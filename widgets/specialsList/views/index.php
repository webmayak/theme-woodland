<?php

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
        'class' => 'col-lg-4 col-sm-6 page-specials__list-item-wrap',
    ],
    'options' => [
        'class' => 'row',
    ],
]);

// кнопка "Показать еще":
// 
// <div class="page-specials__btn-wrap text-center">
//     <button class="btn btn-lg btn-primary">Показать еще</button>
// </div>
