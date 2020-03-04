<?php

namespace frontend\themes\woodland\widgets\shopProducts;

use common\modules\shop\models\ShopProductsSearchFrontend;
use yii\widgets\ListView;
use Yii;

class ProductsList extends ListView
{
    /* var array */
    public $options = ['class' => 'products-list'];
    /* var array */
    public $itemOptions = ['class' => 'col-xl-3 col-lg-4 col-sm-6 catalog-page__item'];
    /* var string */
    public $itemView = '@frontend/themes/woodland/widgets/shopProducts/views/_view';
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

    public function init()
    {
        parent::init();
        if (empty($this->dataProvider)) {
            $searchModel = new ShopProductsSearchFrontend();
            $this->dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            $this->dataProvider->pagination->defaultPageSize = 12;
            $this->dataProvider->pagination->pageParam = 'page';
        }
    }
}
