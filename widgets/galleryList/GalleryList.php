<?php

namespace frontend\themes\woodland\widgets\galleryList;

use common\modules\catalog\models\CatalogCategory;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

class GalleryList extends Widget
{
    public function run()
    {
        parent::run();
        $dataProvider = new ActiveDataProvider([
            'query' => CatalogCategory::find()->isActive()->joinWith('type')->andWhere(['key' => 'gallery']),
            'pagination' => false,
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
