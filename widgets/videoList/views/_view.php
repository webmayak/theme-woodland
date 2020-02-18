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
        } else {
            $img = 'https://via.placeholder.com/370x280?text=+';
        }
        echo Html::img($img, [
            'class' => 'content-item__image',
        ]);
        ?>
    </div>
    <div class="h5 content-item__title mt-3">
        <?= $model->title ?>
    </div>
</a>
