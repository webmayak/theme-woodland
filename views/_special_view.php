<?php

use common\modules\catalog\models\CatalogCategory;
use yii\helpers\Html;
use yii\web\View;

$isClosed = $model->present()->getAttributeValueByKey('is_closed');

/* @var $this View */
/* @var $model CatalogCategory */
?><div class="item-card item-card--specials-item">
    <?php if ($isClosed) : ?>
    <div class="item-card__label item-card__label--closed">Акция завершена</div>
    <?php else : ?>
    <div class="item-card__label">Действующая акция</div>
    <?php endif; ?>
    <a class="item-card__img-link" href="<?= $model->present()->getUrl() ?>">
        <?php
        if ($model->media && $model->media->issetMedia()) {
            $img = $model->media->image(310, 200, false);
            echo Html::img($img, [
                'class' => 'item-card__img',
            ]);
        } ?>
    </a>
    <div class="item-card__date"><i class="fa fa-calendar"></i> <?= Yii::$app->formatter->asDate($model->created_at, 'd.MM.yy') ?></div>
    <h4 class="item-card__title"><a href="<?= $model->present()->getUrl() ?>"><?= Html::encode($model->name) ?></a></h4>
    <?php if ($announce = $model->present()->getAttributeValueByKey('announce')) : ?>
        <div><p><?= $announce ?></p></div>
    <?php endif; ?>
    <a class="item-card__more-link" href="<?= $model->present()->getUrl() ?>">Читать все <i class="fa fa-angle-right"></i></a>
</div>
