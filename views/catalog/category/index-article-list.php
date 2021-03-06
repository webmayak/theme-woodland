<?php

use common\modules\catalog\models\CatalogCategory;
use frontend\themes\woodland\widgets\articleList\ArticleList;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */
?><main class="page-articles__content">
<h1 class="title-home">
    <?= Yii::$app->seo->getH1() ?>
</h1>

<?= ArticleList::widget() ?>
</main>
