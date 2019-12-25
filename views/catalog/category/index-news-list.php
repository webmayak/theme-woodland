<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\themes\woodland\widgets\newsList\NewsList;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */
?><main class="page-news__content">
<h1 class="title-home">
    <?= Yii::$app->seo->getH1() ?>
</h1>

<?= NewsList::widget() ?>
</main>
