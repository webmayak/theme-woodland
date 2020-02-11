<?php

use yii\helpers\Html;
use common\modules\shop\models\ShopProductCompare;

/**
 * @var \common\modules\shop\models\ShopProduct $model
 */
?><div class="product-card">
    <?php
        $labelStart = '<div class="product-card__label product-card__label--';
        $labelMiddle = '"><div>';
        $labelEnd = '</div></div>';
        if($model->isInSegment('discount')) echo $labelStart .'discount' . $labelMiddle . 'скидка' . $labelEnd;
        if($model->isInSegment('best-price')) echo $labelStart .'best-price' . $labelMiddle . 'лучшая цена' . $labelEnd;
        if($model->isInSegment('present')) echo $labelStart .'present' . $labelMiddle . 'подарок' . $labelEnd;
        if($model->isInSegment('bestseller')) echo $labelStart .'bestseller' . $labelMiddle . 'хит продаж' . $labelEnd;
    ?>
    <div class="product-card__img-wrap">
        <a href="/<?=$model->present()->getUrl()?>" _href="<?= $model->present()->getUrl() ?>">
            <img class="product-card__img" src="<?= $model->media ? $model->media->image() : 'https://via.placeholder.com/150' ?>" alt="<?= Html::encode($model->getParentWithVariantName()) ?>">
        </a>
    </div>
    <a href="/<?=$model->present()->getUrl()?>" _href="<?= $model->present()->getUrl() ?>" class="product-card__title-link">
        <h3 class="product-card__title"><?= Html::encode($model->getParentWithVariantName()) ?></h3>
    </a>
    <ul class="product-card__params ul-reset">
        <?php if ($attributeValue = $model->present()->getAttributeValue(1)): ?>
        <li class="product-card__param">
            <div class="product-card__param-icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-address"/>
                </svg>
            </div>
            <div class="product-card__param-text">Этажность: <b><?= $attributeValue ?></b></div>
        </li>
        <?php endif; ?>
        <?php if ($attributeValue = $model->present()->getAttributeValue(2)): ?>
        <li class="product-card__param">
            <div class="product-card__param-icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-bed"/>
                </svg>
            </div>
            <div class="product-card__param-text">Комнат: <b><?= $attributeValue ?></b></div>
        </li>
        <?php endif; ?>
        <?php if ($attributeValue = $model->present()->getAttributeValue(3)): ?>
        <li class="product-card__param">
            <div class="product-card__param-icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-size"/>
                </svg>
            </div>
            <div class="product-card__param-text">Размер: <b><?= $attributeValue ?></b></div>
        </li>
        <?php endif; ?>
        <?php if ($attributeValue = $model->present()->getAttributeValue(4)): ?>
        <li class="product-card__param">
            <div class="product-card__param-icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-calendar"/>
                </svg>
            </div>
            <div class="product-card__param-text">Сроки: <b><?= $attributeValue ?></b></div>
        </li>
        <?php endif; ?>
    </ul>
    <?php if ($model->default_price > $model->price): ?>
    <div class="product-card__old-price">Старая цена: <del><?= number_format($model->default_price, 0, ',', ' ') ?> Руб</del></div>
    <?php endif; ?>
    <div class="product-card__price">Цена: от <b><?= number_format($model->price, 0, ',', ' ') ?> Руб.</b></div>
    <div class="product-card__actions">
        <a href="/<?=$model->present()->getUrl()?>" class="product-card__to-cart btn btn-primary">
            Подробнее
            <?php if (0) : ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-cart"/>
            </svg>
            <?php endif; ?>
        </a>
        <button class="product-card__to-favorites btn btn-outline-success">
            <span class="sr-only">В избранное</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-heart"/>
            </svg>
        </button>
        <button class="product-card__to-compare btn <?= ShopProductCompare::isCompare($model->id) ? 'btn-success' : 'btn-outline-success' ?>" data-id="<?= $model->id ?>">
            <span class="sr-only">Сравнить</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-graph"/>
            </svg>
        </button>
    </div>
</div>

<?php
// рассчитываем реальную позицию текущего элемента
$realKey = $widget->dataProvider->pagination
    ? ($widget->dataProvider->pagination->page * $widget->dataProvider->pagination->pageSize) + $index
    : $index;

// получаем класс обертки элемента
$cardWrapperClass = ($widget->itemOptions && !empty($widget->itemOptions['class']))
    ? $widget->itemOptions['class']
    : '';
?>
<?php if ($realKey == ($widget->dataProvider->totalCount - 1)): ?>
    </div>
    <div class="<?= $cardWrapperClass ?>">
        <div class="catalog-page__item free-calc-card">
            <div class="free-calc-card__img-wrap">
                <img class="free-calc-card__img" src="/images/free-calc-img.jpg" alt="">
            </div>
            <div class="free-calc-card__title">Не нашли нужного проекта?</div>
            <div class="free-calc-card__descr">Пришлите свой! <br> Расчитаем за 1 день</div>
            <div class="free-calc-card__accent-text">Бесплатно</div>
            <a href="#" class="btn btn-lg btn-primary px-1 mt-auto">Заказать бесплатный расчет</a>
        </div>
    <!-- не закрываем тег-->
<?php endif; ?>
