<?php

namespace frontend\themes\woodland\widgets\videoList;

use pantera\content\models\ContentPage;
use pantera\content\models\ContentPageSearch;
use yii\base\Widget;

class VideoList extends Widget
{
    public $ids;

    public function run()
    {
        parent::run();
        $searchModel = new ContentPageSearch();
        $dataProvider = $searchModel->search('video');
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function init()
    {
        parent::init();
        VideoListAsset::register($this->view);
    }
}
