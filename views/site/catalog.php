<?php

use pantera\leads\widgets\form\LeadForm;

?>

<ul class="breadcrumb">
    <li>
        <a href="/">Главная</a>
    </li>
    <li class="active">Каталог</li>
</ul>

<div class="catalog-page">
    <h1>Каталог</h1>
    <ul class="catalog-page__nav-tabs nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#catalog-tab-1">Дома из бруса</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catalog-tab-2">Каркасные</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catalog-tab-3">Бани</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catalog-tab-4">Одноэтажные</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catalog-tab-5">Беседки</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catalog-tab-6">Туалеты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catalog-tab-7">Гаражи</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catalog-tab-8">Декор</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catalog-tab-9">Дома из бруса</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catalog-tab-10">Каркасные</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catalog-tab-11">Бани</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catalog-tab-12">Одноэтажные</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catalog-tab-13">Беседки</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catalog-tab-14">Туалеты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catalog-tab-15">Гаражи</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catalog-tab-16">Декор</a>
        </li>
    </ul>
    <div class="catalog-page__tab-content tab-content">
        <div class="tab-pane fade show active" id="catalog-tab-1">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="catalog-page__item product-card">
                        <?= $this->render('@theme/views/_product-card') ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="catalog-page__item product-card">
                        <?= $this->render('@theme/views/_product-card') ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="catalog-page__item product-card">
                        <?= $this->render('@theme/views/_product-card') ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="catalog-page__item product-card">
                        <?= $this->render('@theme/views/_product-card') ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="catalog-page__item product-card">
                        <?= $this->render('@theme/views/_product-card') ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="catalog-page__item product-card">
                        <?= $this->render('@theme/views/_product-card') ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="catalog-page__item product-card">
                        <?= $this->render('@theme/views/_product-card') ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="catalog-page__item product-card">
                        <?= $this->render('@theme/views/_product-card') ?>
                    </div>
                </div>
            </div>
            <div class="catalog-page__btn-wrap">
                <button class="catalog-page__btn btn btn-lg btn-primary">Показать еще</button>
                <button class="catalog-page__btn btn btn-lg btn-success">Перейти в категорию</button>
            </div>
        </div>
        <div class="tab-pane fade" id="catalog-tab-2">2</div>
        <div class="tab-pane fade" id="catalog-tab-3">3</div>
        <div class="tab-pane fade" id="catalog-tab-4">4</div>
        <div class="tab-pane fade" id="catalog-tab-5">5</div>
        <div class="tab-pane fade" id="catalog-tab-6">6</div>
        <div class="tab-pane fade" id="catalog-tab-7">7</div>
        <div class="tab-pane fade" id="catalog-tab-8">8</div>
        <div class="tab-pane fade" id="catalog-tab-9">9</div>
        <div class="tab-pane fade" id="catalog-tab-10">10</div>
        <div class="tab-pane fade" id="catalog-tab-11">11</div>
        <div class="tab-pane fade" id="catalog-tab-12">12</div>
        <div class="tab-pane fade" id="catalog-tab-13">13</div>
        <div class="tab-pane fade" id="catalog-tab-14">14</div>
        <div class="tab-pane fade" id="catalog-tab-15">15</div>
        <div class="tab-pane fade" id="catalog-tab-16">16</div>
    </div>
</div>

</div><!-- закрываем .container -->

<?= $this->render('@theme/views/_advantages') ?>

<?= $this->render('@theme/views/_steps') ?>

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
