<?php

namespace frontend\themes\woodland\widgets\filter;

use common\modules\shop\widgets\productFilter\ProductFilter;
use common\modules\shop\models\ShopProductsSearchFrontend;
use Yii;

class Filter extends ProductFilter
{
    /* @var bool */
    public $registerCssAssets = false;
    /* @var bool */
    public $registerJsAssets = false;

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        FilterAsset::register($this->view);
        if (!$this->searchModel) {
            $this->searchModel = new ShopProductsSearchFrontend();
            $this->searchModel->search(Yii::$app->request->queryParams);
        }
    }
}
