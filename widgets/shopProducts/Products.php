<?php

namespace frontend\themes\woodland\widgets\shopProducts;

use common\modules\shop\models\ShopProductsSearchFrontend;
use yii\base\Widget;
use Yii;

class Products extends Widget
{
    public $dataProvider;

    public function run()
    {
        if (empty($this->dataProvider)) {
            $searchModel = new ShopProductsSearchFrontend();
            $this->dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        }

        $this->dataProvider->pagination->defaultPageSize = 12;
        $this->dataProvider->pagination->pageParam = 'page';

        return $this->render('index', [
            'dataProvider' => $this->dataProvider,
        ]);
    }
}
