<?php

namespace frontend\themes\woodland\widgets\articleList;

use pantera\content\models\ContentPageSearch;
use yii\base\Widget;
use yii\data\ActiveDataProvider;

class ArticleList extends Widget
{
    public function run()
    {
        parent::run();
        $searchModel = new ContentPageSearch();
        $dataProvider = $searchModel->search('articles');

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
