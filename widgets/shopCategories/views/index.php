<?php 

use common\modules\shop\models\ShopProduct;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $categories common\modules\shop\models\ShopCategory[] */
?><div class="row">
    <?php foreach ($categories as $category) : ?>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
            <div class="categories__item">
                <a class="categories__item-link" href="<?= $category->present()->getUrl() ?>">
                    <div class="categories__item-img-wrap">
                        <img class="categories__item-img" src="<?= $category->media ? $category->media->image() : 'https://via.placeholder.com/300x200' ?>" alt="<?= Html::encode($category->name) ?>">
                        <?php if (
                            $minPrice = $category->getProducts()
                                ->andWhere(['parent_id' => null, 'status' => ShopProduct::getAvailableStatuses()])
                                ->select('MIN(price)')
                                ->scalar()
                        ) : ?>
                        <div class="categories__item-descr">Цена от <?= number_format($minPrice, 0, ',', ' ') ?> Руб.</div>
                        <?php endif; ?>
                    </div>
                    <div class="categories__item-title"><?= Html::encode($category->name) ?></div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
