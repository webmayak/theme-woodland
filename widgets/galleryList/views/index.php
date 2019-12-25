<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 11/1/18
 * Time: 12:24 PM
 */

use yii\data\ActiveDataProvider;
use yii\web\View;
use yii\widgets\ListView;

/* @var $this View */
/* @var $dataProvider ActiveDataProvider */
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'summary' => false,
    'itemView' => '_view',
    'itemOptions' => [
        'class' => 'col-lg-4 col-sm-6',
    ],
    'options' => [
        'class' => 'row'
    ],
]);
