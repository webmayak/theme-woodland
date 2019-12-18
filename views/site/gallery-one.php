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
$this->title = 'Галерея внутренняя';
$this->params['breadcrumbs'][] = $this->title;
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
    <div class="projects__carousel owl-carousel">
        <div class="projects__item product-card">
            <?= $this->render('@theme/views/_product-card') ?>
        </div>
        <div class="projects__item product-card">
            <?= $this->render('@theme/views/_product-card') ?>
        </div>
        <div class="projects__item product-card">
            <?= $this->render('@theme/views/_product-card') ?>
        </div>
        <div class="projects__item product-card">
            <?= $this->render('@theme/views/_product-card') ?>
        </div>
        <div class="projects__item product-card">
            <?= $this->render('@theme/views/_product-card') ?>
        </div>
    </div>
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
