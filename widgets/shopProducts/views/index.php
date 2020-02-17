<?php 

use yii\widgets\ListView;

?><?= ListView::widget([
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
