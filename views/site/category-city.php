<?php

use pantera\leads\widgets\form\LeadForm;

?>

<ul class="breadcrumb">
    <li>
        <a href="/">Главная</a>
    </li>
    <li>
        <a href="/site/catalog">Каталог</a>
    </li>
    <li class="active">Каркасные дома</li>
</ul>

<main class="page-site-category__content">
    <h1>Домостроительная компания</h1>
    <div class="page-site-category__text-block mb-5">
        <p>В активе компании склад круглого леса, пилорама, несколько деревообрабатывающих цехов, комплекс сушильных камер, склад готовой продукции, собственный парк автотранспорта. В цехах установлено оборудование для производства домостроительного бруса и подготовки домокомплектов , в том числе и линия для изготовления клеёного бруса. Иными словами, на производственные площади  предприятия мы поместили всё необходимое оборудование для полного технологического цикла по обработке древесины от раскроя бревна до выпуска готовых домокомплектов и другой столярной продукции.</p>
        <p>Чтобы прикоснуться к истории, мы создали домостроительную компанию «ФОРТУНА» и разместили ее в подмосковной Мещёре, в краю красивых и экологически чистых лесов, жемчужных озёр и рек, на расстоянии 140км. от Москвы, в посёлке ЦУС «Мир» Шатурского района.</p>
    </div>

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
            <div class="catalog-page__item free-calc-card">
                <div class="free-calc-card__img-wrap">
                    <img class="free-calc-card__img" src="/images/free-calc-img.jpg" alt="">
                </div>
                <div class="free-calc-card__title">Не нашли нужного проекта?</div>
                <div class="free-calc-card__descr">Пришлите свой! <br> Расчитаем за 1 день</div>
                <div class="free-calc-card__accent-text">Бесплатно</div>
                <a href="#" class="btn btn-lg btn-primary px-1 mt-auto">Заказать бесплатный расчет</a>
            </div>
        </div>
    </div>

    <div class="page-site-category__btn-wrap text-center">
        <button class="btn btn-lg btn-primary">Показать еще</button>
    </div>

    <ul class="pagination justify-content-center align-items-center mt-5">
        <li class="page-item">
            <a class="page-link" href="#"><i class="fa fa-angle-left"></i> Назад</a>
        </li>
        <li class="page-item active">
            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
            <a class="page-link">...</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">7</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">Вперед <i class="fa fa-angle-right"></i></a>
        </li>
    </ul>

</main>

<?= $this->render('@theme/views/_categories') ?>

</div>

<?= $this->render('@theme/views/_advantages') ?>

<?= $this->render('@theme/views/_text-block') ?>

<?= $this->render('@theme/views/_steps') ?>

<?= $this->render('@theme/views/_works-map') ?>

<?= $this->render('@theme/views/_text-block') ?>

<?= $this->render('@theme/views/_works') ?>

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
