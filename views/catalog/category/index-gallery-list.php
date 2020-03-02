<?php

use common\modules\catalog\models\CatalogCategory;
use frontend\themes\woodland\widgets\galleryList\GalleryList;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */
?><main class="page-site-gallery__content">
<h1 class="title-home">
    <?= Yii::$app->seo->getH1() ?>
</h1>

<?= GalleryList::widget() ?>
</main>
