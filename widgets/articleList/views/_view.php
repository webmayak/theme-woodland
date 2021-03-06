<?php

use pantera\content\models\ContentPage;
use yii\helpers\Html;
use yii\web\View;

$body = trim(strip_tags($model->body));
$body = trim(str_replace('&nbsp;', '', $body));

/* @var $this View */
/* @var $model ContentPage */
?><div class="item-card item-card--articles-item">
    <div class="item-card__date"><i class="fa fa-calendar"></i> <?= Yii::$app->formatter->asDate($model->created_at, 'd.MM.yy') ?></div>
    <a class="item-card__img-link" href="<?= $model->getUrl() ?>">
      <?php
        if ($model->media && $model->media->issetMedia()) {
            $img = $model->media->image(310, 200, false);
            echo Html::img($img, [
                'class' => 'item-card__img',
            ]);
        } ?>
    </a>
    <h4 class="item-card__title"><a href="<?= $model->getUrl() ?>"><?= Html::encode($model->title) ?></a></h4>
    <a class="item-card__more-link" href="<?= $model->getUrl() ?>">Читать все <i class="fa fa-angle-right"></i></a>
</div>
