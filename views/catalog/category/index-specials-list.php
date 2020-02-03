<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/4/18
 * Time: 11:58 AM
 */

use common\modules\catalog\models\CatalogCategory;
use yii\widgets\ListView;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */
?><main class="page-specials__content">
    <h1><?= Yii::$app->seo->getH1() ?></h1>
    <?= ListView::widget([
	    'dataProvider' => (new \pantera\content\models\ContentPageSearch())->search('specials'),
	    'summary' => false,
	    'itemView' => '@theme/views/_special_view',
	    'itemOptions' => [
	        'class' => 'col-lg-4 col-sm-6 page-specials__list-item-wrap',
	    ],
	    'options' => [
	        'class' => 'row',
	    ],
	]); ?>
    <div class="mt-5"></div>
    <h2>Завершенные акции</h2>
    <?= ListView::widget([
	    'dataProvider' => (new \pantera\content\models\ContentPageSearch())->search('specials'),
	    'summary' => false,
	    'itemView' => '@theme/views/_special_view_completed',
	    'itemOptions' => [
	        'class' => 'col-lg-4 col-sm-6 page-specials__list-item-wrap',
	    ],
	    'options' => [
	        'class' => 'row',
	    ],
	]); ?>
</main>
