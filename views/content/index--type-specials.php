<?php

use pantera\content\models\ContentPage;
use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model ContentPage */
$this->params['breadcrumbs'][] = $model->title;
?>
<h1 class="title-home">
    <?= Yii::$app->seo->getH1() ?>
</h1>
<div class="page-specials__content">
    <div class="row">
        <div class="col-lg-7">
            <?php if ($model->media && $model->media->issetMedia()) : ?>
                <?= Html::img($model->media->image(), [
                        'class' => 'img-fluid page-specials__thumb mb-4'
                ]) ?>
            <?php endif; ?>

            <?php if ($model->body) : ?>
                <div class="editor-content editor-content__page">
                    <?= $model->body ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-lg-5 mt-5 mt-lg-0">
            <div class="form-alert alert alert-dismissible fade show">
                <div class="form-alert__title">Оставить заявку на акцию</div>
                <?= LeadForm::widget([
                    'key' => 'orderOnMap',
                    'mode' => LeadForm::MODE_INLINE,
                ]) ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
