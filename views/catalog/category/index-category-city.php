<?php

use frontend\widgets\twigRender\TwigRender;
use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
$this->title = Yii::$app->seo->title ?? $model->name;

?><main class="page-site-category__content">
    <h1><?= Html::encode(Yii::$app->seo->h1 ?? $model->name) ?></h1>

    <?php if ($model->description) : ?>
    <div class="text-block">
        <div class="editor-content">
            <?= TwigRender::widget([
                'text' => $model->description,
            ]) ?>
        </div>
    </div>
    <?php endif; ?>
</main>

</div><!-- закрываем .container -->

<?php
// блок "Карта выполненных объектов"
if ($mapScript = trim($model->present()->getAttributeValueByKey('map'))) {
    echo $this->render('@theme/views/_works-map--with-form', [
        'mapScript' => $mapScript,
    ]);
} ?>

<?php if ($bottom_text = Yii::$app->seo->text): ?>
<div class="text-block">
    <div class="container">
        <div class="editor-content">
            <?= $bottom_text ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php
// блок "Наши выполненные работы"
if (($galleries = $model->present()->getRelationCategoryByTypeKey('gallery'))
    && !empty($gallery = $galleries[0])
) {
    echo $this->render('@theme/views/_works', [
        'model' => $gallery,
    ]);
} ?>

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
