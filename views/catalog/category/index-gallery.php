<?php

use yii\helpers\Html;
use yii\web\View;
use pantera\leads\widgets\form\LeadForm;

/* @var $this View */
/* @var $links array */
?><main class="page-site-gallery-one__content">
    <h1><?= Html::encode($this->title) ?></h1>
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
    <?php if (0): ?>
    <div class="page-site-gallery-one__btn-wrap text-center">
        <button class="btn btn-lg btn-primary">Показать еще</button>
    </div>
    <?php endif; ?>
</main>

<div class="projects">
    <h2>Хиты продаж</h2>
    <?= \yii\widgets\ListView::widget([
        'dataProvider' => new \yii\data\ActiveDataProvider([
            'query' => \common\modules\shop\models\ShopProduct::find()->limit(10),
            'pagination' => false,
        ]),
        'options' => [
            'class' => 'products-list',
        ],
        'itemView' => '@theme/views/_product-card',
        'itemOptions' => [
            'class' => 'projects__item',
        ],
        'layout' => '<div class="projects__carousel owl-carousel">{items}</div>',
    ]) ?>
</div>

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
