<?php

    use yii\helpers\Html;

?>

<div class="main-tabs__item-card item-card item-card--main-news-item">
    <a class="item-card__img-link" href="<?= $model->getUrl() ?>">
        <?php
        if ($model->media && $model->media->issetMedia()) {
            $img = $model->media->image(310, 200, false);
            echo Html::img($img, [
                'class' => 'item-card__img',
                'alt' => $model->title
            ]);
        } ?>
    </a>
    <div class="item-card__date"><i class="fa fa-calendar"></i> <?= Yii::$app->formatter->asDate($model->created_at, 'd.MM.yy') ?></div>
    <h4 class="item-card__title"><a href="<?= $model->getUrl() ?>"><?= Html::encode($model->title) ?></a></h4>
    <a class="item-card__more-link" href="<?= $model->getUrl() ?>">Подробнее <i class="fa fa-angle-right"></i></a>
</div>
