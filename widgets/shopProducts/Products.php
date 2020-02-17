<?php

namespace frontend\themes\woodland\widgets\shopProducts;

use common\modules\shop\models\ShopProductsSearchFrontend;
use yii\base\Widget;

class Products extends Widget
{
	public $dataProvider;

    public function run()
    {
    	if (empty($this->dataProvider)) {
	    	$searchModel = new ShopProductsSearchFrontend();
	    	$this->dataProvider = $searchModel->search([]);
    	}

    	$dataProvider->pagination['defaultPageSize'] = 12;

        return $this->render('index', [
        	'dataProvider' => $this->dataProvider,
        ]);
    }
}
