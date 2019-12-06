<?php

use yii\data\ActiveDataProvider;
use yii\web\View;
use yii\helpers\Url;
use yii\widgets\ListView;

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;

/* @var $this View */
/* @var $dataProvider ActiveDataProvider */
?><main class="page-articles__content">
    <h1><?= $this->title ?></h1>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'summary' => false,
        'itemView' => '_view',
        'itemOptions' => [
            'class' => 'col-lg-4 col-sm-6 page-articles__list-item-wrap',
        ],
        'options' => [
            'class' => 'row',
        ],
    ]) ?>
    <div class="page-articles__btn-wrap text-center">
        <button class="btn btn-lg btn-primary">Показать еще</button>
    </div>
</main>
