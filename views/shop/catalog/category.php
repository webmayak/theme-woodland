<?php

use common\modules\shop\widgets\productFilter\ProductFilter;
use common\modules\shop\widgets\productFilter\ProductFilterWidgetConfiguration;
use common\modules\shop\widgets\productsListWidget\ProductsListWidget;
use common\modules\shop\widgets\productsListWidget\ProductsListWidgetConfiguration;

$this->title = $model->name;

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => ['/shop/catalog']];
foreach ($model->parents as $key => $parent) {
    if ($key == 0) continue;
    $this->params['breadcrumbs'][] = ['label' => $parent->name, 'url' => $parent->present()->getUrl()];
}
$this->params['breadcrumbs'][] = $this->title;

$dataProvider->pagination = ['defaultPageSize' => 12];

/**
 * @var $dataProvider \yii\data\ActiveDataProvider
 */
?><h1><?=$this->title?></h1>

<?= \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'options' => [
        'class' => 'products-list',
    ],
    'itemView' => '@theme/views/_product-card',
    'itemOptions' => [
        'class' => 'col-xl-3 col-lg-4 col-sm-6 catalog-page__item',
    ],
    'layout' => '<div class="row">{items}</div>{pager}',
    'pager' => [
        'class' => 'yii\bootstrap4\LinkPager',
        'prevPageLabel' => '<i class="fa fa-angle-left"></i> Назад',
        'nextPageLabel' => 'Вперед <i class="fa fa-angle-right"></i>',
        'listOptions' => [
            'class' => ['pagination justify-content-center align-items-center']
        ]
    ],
]) ?>
