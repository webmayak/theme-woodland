<?php

use frontend\widgets\twigRender\TwigRender;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use pantera\leads\widgets\form\LeadForm;

/* @var $this View */
/* @var $links array */
?><main class="page-site-gallery-one__content">
    <h1><?= Html::encode(Yii::$app->seo->h1) ?></h1>
    <?php if ($photos = $model->getChildrenActive()->all()): ?>
        <div class="row">
        <?php foreach ($photos as $index => $photo): ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="page-site-gallery-one__item">
                <a class="page-site-gallery-one__img-link gallery-link" href="<?= $photo->media->image() ?>" data-fancybox="gallery">
                    <img class="page-site-gallery-one__img" src="<?= $photo->media->image(255, 255, false) ?>" alt="<?= Html::encode($photo->name) ?>">
                </a>
                <a class="page-site-gallery-one__title-link" href="<?= Url::to($photo->present()->getAttributeValueByKey('link')) ?>">
                    <?= Html::encode($photo->name) ?>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <?php if ($model->media && is_array($model->media)): ?>
    <div class="row">
        <?php foreach ($model->media as $index => $media): ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link gallery-link" href="<?= $media->image() ?>" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="<?= $media->image(255, 255, false) ?>" alt="<?= Html::encode($this->title) . ' - фото ' . ($index+1)  ?>">
            </a>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <?php if ($model->description) : ?>
    <div class="editor-content">
        <?= TwigRender::widget([
            'text' => $model->description,
        ]) ?>
    </div>
    <?php endif; ?>
</main>

<!-- закрываем .container -->
</div>
<div class="contact-form-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8">
                <?= LeadForm::widget([
                    'key' => 'request',
                    'mode' => LeadForm::MODE_INLINE,
                ]) ?>
            </div>
        </div>
    </div>
</div>
<!-- снова открываем локально закрытый .container -->
<div class="container">
