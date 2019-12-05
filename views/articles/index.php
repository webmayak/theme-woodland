<?php

use yii\data\ActiveDataProvider;
use yii\web\View;
use yii\helpers\Url;
use yii\widgets\ListView;

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;

/* @var $this View */
/* @var $dataProvider ActiveDataProvider */
?><div class="page-articles">
    <h1><?= $this->title ?></h1>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false,
        'itemView' => '_view',
        'itemOptions' => [
            'class' => 'articles-list__item media',
        ],
        'options' => [
            'class' => 'articles-list',
        ],
    ]) ?>
</div>
