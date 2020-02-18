<?php

use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
?>
<a href="<?= Html::encode($model->body) ?>" data-fancybox>
    <div class="item__image-holder item__image-holder--video">
        <?php
        $img = '';
        if ($model->media && $model->media->issetMedia()) {
            $img = $model->media->image(370, 280, false);
        }
        echo Html::img($img, [
            'class' => 'content-item__image',
        ]);
        ?>
    </div>
    <div class="h5 content-item__title">
        <?= $model->title ?>
    </div>
</a>
