<?php

namespace frontend\themes\woodland\widgets\specialsList;

use pantera\content\models\ContentPageSearch;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

class SpecialsList extends Widget
{
    public function run()
    {
        parent::run();
        $searchModel = new ContentPageSearch();
        $dataProvider = $searchModel->search('specials');

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
