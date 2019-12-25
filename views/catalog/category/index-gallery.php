<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/31/18
 * Time: 4:40 PM
 */

use yii\helpers\Html;
use yii\web\View;
use pantera\leads\widgets\form\LeadForm;

/* @var $this View */
/* @var $links array */
?><main class="page-site-gallery-one__content">
    <h1><?= $this->title ?></h1>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link gallery-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="/images/gallery-one-1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link gallery-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="/images/gallery-one-1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link gallery-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="/images/gallery-one-1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link gallery-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="/images/gallery-one-1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link gallery-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="/images/gallery-one-1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link gallery-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="/images/gallery-one-1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link gallery-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="/images/gallery-one-1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link gallery-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="/images/gallery-one-1.jpg" alt="">
            </a>
        </div>
    </div>
    <div class="page-site-gallery-one__btn-wrap text-center">
        <button class="btn btn-lg btn-primary">Показать еще</button>
    </div>
</main>

<div class="projects">
    <h2>Хиты продаж</h2>
    <?= \yii\widgets\ListView::widget([
        'dataProvider' => new \yii\data\ActiveDataProvider([
            'query' => \common\modules\shop\models\ShopProduct::find()
        ]),
        'options' => [
            'class' => 'products-list',
        ],
        'itemView' => '@theme/views/_product-card',
        'itemOptions' => [
            'class' => 'projects__item',
        ],
        'layout' => '<div class="projects__carousel owl-carousel">{items}</div>{pager}',
        'pager' => [
            'class' => 'yii\bootstrap4\LinkPager',
            'options' => [
                'class' => 'text-center',
            ],
        ],
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
