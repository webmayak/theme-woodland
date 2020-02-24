<?php

namespace frontend\themes\woodland\widgets\specialsList;

use common\modules\catalog\models\CatalogCategory;
use yii\data\ArrayDataProvider;
use yii\widgets\ListView;

class SpecialsList extends \yii\base\Widget
{
    /* @var CatalogCategory[] */
    public $models;
    /* @var false|array Настройки для пейджера */
    public $pagination = false;
    /* @var string */
    public $itemView = '@theme/views/_special_view';
    /* @var array|null */
    public $options = ['class' => 'row'];
    /* @var array|null */
    public $itemOptions = ['class' => 'col-lg-4 col-sm-6 page-specials__list-item-wrap'];

    public function run()
    {
        parent::run();
        if ($this->models) {
            $dataProvider = new ArrayDataProvider([
                'allModels' => $this->models,
                'totalCount' => count($this->models),
                'pagination' => $this->pagination,
            ]);
            return ListView::widget([
                'dataProvider' => $dataProvider,
                'summary' => false,
                'itemView' => $this->itemView,
                'options' => $this->options,
                'itemOptions' => $this->itemOptions,
            ]);
        }
    }
}
