<?php

namespace frontend\themes\woodland\widgets\shopProducts;

use Yii;

/**
 * Виджет owl-карусели товаров
 */
class ProductsCarousel extends ProductsBaseList
{
    /* var array */
    public $itemOptions = ['class' => 'projects__item'];

    /* var string */
    public $layout = '<div class="projects__carousel owl-carousel">{items}</div>';

    /* var bool показать карточку "не нашли нужного проекта" */
    public $showLeadCard = false;
}
