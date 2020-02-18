<?php

namespace frontend\themes\woodland\widgets\videoList;

use pantera\media\widgets\syncedOwls\FancyboxAsset;
use yii\web\AssetBundle;

class VideoListAsset extends AssetBundle
{
    public $depends = [
        FancyboxAsset::class,
    ];
}
