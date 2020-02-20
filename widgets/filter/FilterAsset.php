<?php

namespace frontend\themes\woodland\widgets\Filter;

use yii\web\AssetBundle;

class FilterAsset extends AssetBundle
{
    public $sourcePath = __DIR__;

    public $js = [
        'product-filter.js',
    ];

    public $depends = [
        'frontend\themes\woodland\AppAsset'
    ];
}
