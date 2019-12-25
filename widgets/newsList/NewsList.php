<?php

namespace frontend\themes\woodland\widgets\newsList;

use pantera\content\models\ContentPageSearch;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

class NewsList extends Widget
{
    public function run()
    {
        parent::run();
        $searchModel = new ContentPageSearch();
        $dataProvider = $searchModel->search('news');

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
