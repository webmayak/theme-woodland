<?php

use yii\helpers\Html;
use yii\helpers\Url;
use common\modules\shop\models\ShopProduct;
use common\modules\shop\models\ShopProductsSearchFrontend;
use common\modules\shop\models\ProductAttributeValue;

$AREA_ATTR_ID = 5;

// получаем минимальную и максимальную цену в текущей категории
// для этого используем основную search-модель, т.к. в ней
// реализована мощая логика
$searchByCategory = new ShopProductsSearchFrontend();
$searchByCategory->category_id = $searchModel->category_id;

$minPrice = $searchByCategory->buildSearchQuery()->select('MIN(price)')->groupBy(false)->scalar();
$maxPrice = $searchByCategory->buildSearchQuery()->select('MAX(price)')->groupBy(false)->scalar();

// получаем максимальную цену вариантов
$searchByCategoryVariants = new ShopProductsSearchFrontend();
$searchByCategoryVariants->onlyVariants = true;
$searchByCategoryVariants->status = false;
$searchByCategoryVariants->parent_id = $searchByCategory->buildSearchQuery()->distinct('shop_product.id')->groupBy(false)->column();
$maxVariantsPrice = $searchByCategoryVariants->buildSearchQuery()->select('MAX(price)')->groupBy(false)->scalar();

// максимальная цена с учетом вариантов
$maxPrice = max($maxPrice, $maxVariantsPrice);

$minPriceValue = number_format($searchModel->min_price ?: $minPrice, 0, ',', '');
$maxPriceValue = number_format($searchModel->max_price ?: $maxPrice, 0, ',', '');

$minArea = ProductAttributeValue::find()->select('MIN(CAST(attribute_value AS UNSIGNED))')->andWhere(['attribute_id' => $AREA_ATTR_ID])->scalar();
$maxArea = ProductAttributeValue::find()->select('MAX(CAST(attribute_value AS UNSIGNED))')->andWhere(['attribute_id' => $AREA_ATTR_ID])->scalar();

$areaFrom = Yii::$app->request->get('min_area');
$areaTo = Yii::$app->request->get('max_area');

$minAreaValue = $areaFrom ? $areaFrom : $minArea;
$maxAreaValue = $areaTo ? $areaTo : $maxArea;

?>
<script>
    var AREA_ATTR_ID = <?= $AREA_ATTR_ID ?>;
    var minPrice = <?= $minPrice ?>;
    var maxPrice = <?= $maxPrice ?>;
    var minArea = <?= $minArea ?>;
    var maxArea = <?= $maxArea ?>;
</script>
<form action="<?= Url::to(['/' . Yii::$app->request->pathInfo]) ?>" class="filter" method="get" id="products-list-filter" data-pjax="1">
    <?php if ($perPage = Yii::$app->request->get('per-page')) : ?>
    <?= Html::hiddenInput('per-page', $perPage) ?>
    <?php endif; ?>
    <div class="filter__wrap">
        <div class="filter__main">
            <div class="row">
                <div class="col-lg-4">
                    <fieldset class="filter__item">
                        <legend class="filter__main-title">Цена, руб:</legend>
                        <div class="filter__content">
                            <div class="filter__range">
                                <input class="js-range-slider" type="text" id="js-range-slider-price">
                            </div>
                            <div class="filter__price-fields">
                                <input class="form-control filter__price-field" type="number" id="price-from" aria-label="Цена, от" name="min_price" value="<?= $minPriceValue ?>" min="<?= $minPriceValue ?>" max="<?= $maxPriceValue ?>">
                                <input class="form-control filter__price-field" type="number" id="price-to" aria-label="Цена, до" name="max_price" value="<?= $maxPriceValue ?>" min="<?= $minPriceValue ?>" max="<?= $maxPriceValue ?>">
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-lg-4">
                    <fieldset class="filter__item">
                        <legend class="filter__main-title">Площадь, м2:</legend>
                        <div class="filter__content">
                            <div class="filter__range">
                                <input class="js-range-slider" type="text" id="js-range-slider-area">
                            </div>
                            <div class="filter__price-fields">
                                <input class="form-control filter__price-field" type="number" id="area-from" aria-label="Площадь, от" name="min_area" value="<?= $minAreaValue ?>" min="<?= $minArea ?>" max="<?= $maxArea ?>">
                                <input class="form-control filter__price-field" type="number" id="area-to" aria-label="Площадь, до" name="max_area" value="<?= $maxAreaValue ?>" min="<?= $minArea ?>" max="<?= $maxArea ?>">
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-lg-4">
                    <fieldset class="filter__item">
                        <legend class="filter__main-title">Сортировать:</legend>
                        <div class="filter__content">
                            <div class="filter__sort-labels-wrap">
                                <label class="filter__sort-label">
                                    <input class="filter__sort-input sr-only" type="radio" name="sort" value="price"<?= $searchModel->sort === 'price' ? ' checked' : '' ?>>
                                    <span class="filter__sort-control">по цене &uarr;</span>
                                </label>
                                <label class="filter__sort-label">
                                    <input class="filter__sort-input sr-only" type="radio" name="sort" value="-price"<?= $searchModel->sort === 'price' ? '' : ' checked' ?>>
                                    <span class="filter__sort-control">по цене &darr;</span>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="filter__additional"<?= !empty($_COOKIE['filter_expanded']) ? '' : ' style="display: none"' ?>>
            <?php foreach ($attributes as $attribute) : ?>
                <?php
                // $values = preg_split('/\n+/', $attribute->default_values);
                // $values = array_map('trim', $values);
                $values = ProductAttributeValue::find()
                    ->select('attribute_value')
                    ->andWhere([
                        'attribute_id' => $attribute->id,
                        'product_id' => $searchByCategory->buildSearchQuery()->select(ShopProduct::tableName() . '.id')->column(),
                    ])
                    ->column();
                $values = array_unique($values);
                sort($values);
                ?>
                <fieldset class="filter__additional-item"<?php if ($attribute->id === $AREA_ATTR_ID) echo ' hidden'; ?>>
                    <legend class="filter__additional-title"><?= $attribute->name ?>:</legend>
                    <div class="filter__content">
                        <div class="filter__option-labels-wrap">
                            <?php foreach ($values as $value) : ?>
                            <?php $checked = isset($searchModel->filter_attr[$attribute->id]) && in_array($value, $searchModel->filter_attr[$attribute->id]); ?>
                                <label class="filter__option-label">
                                    <input class="filter__option-input sr-only" type="checkbox" name="filter_attr[<?= $attribute->id ?>][]" value="<?= Html::encode($value) ?>"<?= $checked ? ' checked' : '' ?>>
                                    <span class="filter__option-control"><?= Html::encode($value) ?></span>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </fieldset>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <button class="filter__open btn btn-lg btn-block btn-primary" type="button"><?= !empty($_COOKIE['filter_expanded']) ? 'Свернуть' : 'Все параметры' ?></button>
        </div>
        <div class="col-md-6">
            <a href="<?= Url::to(['/' . Yii::$app->request->pathInfo]) ?>" class="filter__reset btn btn-lg btn-block btn-secondary" type="reset" data-pjax="1">Сбросить</a>
        </div>
    </div>
</form>
