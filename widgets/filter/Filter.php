<?php

namespace frontend\themes\woodland\widgets\Filter;

use common\modules\shop\models\ShopProductTypeAttribute;
use yii\base\Widget;

class Filter extends Widget
{
	/**
	* {@inheritdoc}
	*/
    public function run()
    {
    	parent::run();
    	$attributes = ShopProductTypeAttribute::find()
		    ->andWhere(['is_for_filter' => 1])
		    ->all();
        return $this->render('index', [
        	'attributes' => $attributes,
        ]);
    }
}
