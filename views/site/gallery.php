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
$this->title = 'Галерея';
$this->params['breadcrumbs'][] = $this->title;
?><main class="page-site-gallery__content">
    <h1><?= $this->title ?></h1>
    <div class="row">
        <div class="col-lg-4 col-sm-6">
            <a class="page-site-gallery__item item-card" href="/site/gallery-one">
                <img class="item-card__img mb-3" src="/images/gallery-1.jpg" alt="">
                <h4 class="item-card__title mb-0">Дома из бруса под ключ</h4>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="page-site-gallery__item item-card" href="/site/gallery-one">
                <img class="item-card__img mb-3" src="/images/gallery-1.jpg" alt="">
                <h4 class="item-card__title mb-0">Срубы из бруса под усадку</h4>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="page-site-gallery__item item-card" href="/site/gallery-one">
                <img class="item-card__img mb-3" src="/images/gallery-1.jpg" alt="">
                <h4 class="item-card__title mb-0">Бани из бруса</h4>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="page-site-gallery__item item-card" href="/site/gallery-one">
                <img class="item-card__img mb-3" src="/images/gallery-1.jpg" alt="">
                <h4 class="item-card__title mb-0">Отделка бань</h4>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="page-site-gallery__item item-card" href="/site/gallery-one">
                <img class="item-card__img mb-3" src="/images/gallery-1.jpg" alt="">
                <h4 class="item-card__title mb-0">Внутренняя отделка домов</h4>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="page-site-gallery__item item-card" href="/site/gallery-one">
                <img class="item-card__img mb-3" src="/images/gallery-1.jpg" alt="">
                <h4 class="item-card__title mb-0">Каркасные дома</h4>
            </a>
        </div>
    </div>
</main>

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
