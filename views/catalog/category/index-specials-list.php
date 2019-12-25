<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\themes\woodland\widgets\specialsList\SpecialsList;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */
?><main class="page-specials__content">
    <h1><?= Yii::$app->seo->getH1() ?></h1>
    <?= SpecialsList::widget() ?>
    <div class="mt-5"></div>
    <h2>Завершенные акции</h2>
    <?= SpecialsList::widget() ?>
</main>
