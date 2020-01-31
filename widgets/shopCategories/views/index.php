<?php 

use yii\helpers\Html;

?><?php if (($catalogRoot = \common\modules\shop\models\ShopCategory::findOne(1)) && ($categories = $catalogRoot->getChildren()->andWhere(['status' => 1])->all())): ?>
<div class="row">
    <?php foreach ($categories as $category): ?>
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
            <div class="categories__item">
                <a class="categories__item-link" href="<?=$category->present()->getUrl()?>">
                    <div class="categories__item-img-wrap">
                        <img class="categories__item-img" src="<?= $category->media ? $category->media->image() : 'https://via.placeholder.com/300x200' ?>" alt="<?= Html::encode($category->name) ?>">
                        <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                    </div>
                    <div class="categories__item-title"><?= Html::encode($category->name) ?></div>
                </a>
            </div>
        </div>
    <?php endforeach;?>
</div>
<?php endif; ?>
