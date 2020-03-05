<?php

namespace frontend\themes\woodland\widgets\shopProducts;

use yii\helpers\Url;
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

    /* var bool кнопка "Показать еще" */
    public $showMoreButton = false;

    /**
     * {@inheritdoc}
     */
    public function init() : void
    {
        parent::init();
        $this->prepareLayout();
    }

    /**
     * Подготавливаем лейаут в соответствии
     * с параметром виджета showMoreButton
     * и кол-вом моделей из dataProvider
     * @return void
     */
    private function prepareLayout()
    {
        if ($this->showMoreButton
            && $this->dataProvider->count < $this->dataProvider->totalCount
            && empty(Yii::$app->request->get('page'))
        ) {
            $loadMoreUrl = [
                '/' . Yii::$app->request->pathinfo,
                'per-page' => Yii::$app->request->get('per-page', 12) + 12
            ];
            $this->layout =
                '<div class="row">{items}</div>'
                . '<div class="show-more text-center mt-4 mb-4">'
                . '   <a href="' . Url::to($loadMoreUrl) . '" class="btn btn-lg btn-primary" rel="nofollow">Показать еще</a>'
                . '</div>'
                . '{pager}';
        }
    }
}
