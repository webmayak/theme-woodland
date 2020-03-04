<?php

namespace frontend\themes\woodland\widgets\shopProducts;

use Yii;

/**
 * Виджет простого списка товаров
 */
class ProductsList extends ProductsBaseList
{
    /* var array */
    public $itemOptions = ['class' => 'col-xl-3 col-lg-4 col-sm-6 catalog-page__item'];

    /* var string */
    public $layout = '<div class="row">{items}</div>{pager}';

    /* var array */
    public $pager = [
        'class' => 'yii\bootstrap4\LinkPager',
        'prevPageLabel' => '<i class="fa fa-angle-left"></i> Назад',
        'nextPageLabel' => 'Вперед <i class="fa fa-angle-right"></i>',
        'listOptions' => [
            'class' => ['pagination justify-content-center align-items-center']
        ]
    ];

    /* var bool показать карточку "не нашли нужного проекта" */
    public $showLeadCard = true;
}
