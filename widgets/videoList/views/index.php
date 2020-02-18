<?php

use yii\data\ArrayDataProvider;
use yii\web\View;
use yii\widgets\ListView;

/* @var $this View */
/* @var $dataProvider ArrayDataProvider */
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'summary' => false,
    'itemView' => '_view',
    'layout' => '<div class="row">{items}</div>{pager}',
    'options' => [
        'class' => 'list-view--content',
    ],
    'itemOptions' => [
        'class' => 'col-md-6 col-lg-4 content-item content-item--video',
    ],
]);
