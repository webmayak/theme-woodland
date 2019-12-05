<?php

use yii\data\ActiveDataProvider;
use yii\web\View;
use yii\helpers\Url;
use yii\widgets\ListView;

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;

/* @var $this View */
/* @var $dataProvider ActiveDataProvider */
?><main class="page-news__content">
    <h1><?= $this->title ?></h1>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false,
        'itemView' => '_view',
        'itemOptions' => [
            'class' => 'col-lg-4 col-sm-6 news-list__item-wrap',
        ],
        'options' => [
            'class' => 'row news-list',
        ],
    ]) ?>
    <div class="page-news__btn-wrap text-center">
        <button class="btn btn-lg btn-primary">Показать еще</button>
    </div>
</main>
