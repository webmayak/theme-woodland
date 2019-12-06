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
            <?= $this->render('@theme/views/_catalog_grid') ?>
            <div class="catalog-page__btn-wrap">
                <button class="catalog-page__btn btn btn-primary">Показать еще</button>
                <button class="catalog-page__btn btn btn-success">Перейти в категорию</button>
            </div>
        </div>
        <div class="tab-pane fade" id="catalog-tab-2">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="catalog-page__item product-card">
                        <div class="product-card__img-wrap">
                            <img class="product-card__img" src="/images/product-1.jpg" alt="Дом из бруса 8x8.5 в два этажа брусом с эркером">
                        </div>
                        <a href="#" class="product-card__title-link">
                            <h3 class="product-card__title">Дом из бруса 8x8.5 в два этажа брусом с эркером</h3>
                        </a>
                        <ul class="product-card__params ul-reset">
                            <li class="product-card__param">
                                <div class="product-card__param-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-address"/>
                                    </svg>
                                </div>
                                <div class="product-card__param-text">Этажность: <b>2 этажа</b></div>
                            </li>
                            <li class="product-card__param">
                                <div class="product-card__param-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-bed"/>
                                    </svg>
                                </div>
                                <div class="product-card__param-text">Комнат: <b>5</b></div>
                            </li>
                            <li class="product-card__param">
                                <div class="product-card__param-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-size"/>
                                    </svg>
                                </div>
                                <div class="product-card__param-text">Размер: <b>8×8.5</b></div>
                            </li>
                            <li class="product-card__param">
                                <div class="product-card__param-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-calendar"/>
                                    </svg>
                                </div>
                                <div class="product-card__param-text">Сроки: <b>14 дней</b></div>
                            </li>
                        </ul>
                        <div class="product-card__old-price">Старая цена: <del>850 000 Руб</del></div>
                        <div class="product-card__price">Цена: <b>742 500 Руб</b></div>
                        <div class="product-card__actions">
                            <button class="product-card__to-cart btn btn-primary">
                                Заказать
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-cart"/>
                                </svg>
                            </button>
                            <button class="product-card__to-favorites btn btn-outline-success">
                                <span class="sr-only">В избранное</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-heart"/>
                                </svg>
                            </button>
                            <button class="product-card__to-compare btn btn-outline-success">
                                <span class="sr-only">Сравнить</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-graph"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="catalog-page__item product-card">
                        <div class="product-card__img-wrap">
                            <img class="product-card__img" src="/images/product-1.jpg" alt="Дом из бруса 8x8.5 в два этажа брусом с эркером">
                        </div>
                        <a href="#" class="product-card__title-link">
                            <h3 class="product-card__title">Дом из бруса 8x8.5 в два этажа брусом с эркером</h3>
                        </a>
                        <ul class="product-card__params ul-reset">
                            <li class="product-card__param">
                                <div class="product-card__param-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-address"/>
                                    </svg>
                                </div>
                                <div class="product-card__param-text">Этажность: <b>2 этажа</b></div>
                            </li>
                            <li class="product-card__param">
                                <div class="product-card__param-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-bed"/>
                                    </svg>
                                </div>
                                <div class="product-card__param-text">Комнат: <b>5</b></div>
                            </li>
                            <li class="product-card__param">
                                <div class="product-card__param-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-size"/>
                                    </svg>
                                </div>
                                <div class="product-card__param-text">Размер: <b>8×8.5</b></div>
                            </li>
                            <li class="product-card__param">
                                <div class="product-card__param-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-calendar"/>
                                    </svg>
                                </div>
                                <div class="product-card__param-text">Сроки: <b>14 дней</b></div>
                            </li>
                        </ul>
                        <div class="product-card__old-price">Старая цена: <del>850 000 Руб</del></div>
                        <div class="product-card__price">Цена: <b>742 500 Руб</b></div>
                        <div class="product-card__actions">
                            <button class="product-card__to-cart btn btn-primary">
                                Заказать
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-cart"/>
                                </svg>
                            </button>
                            <button class="product-card__to-favorites btn btn-outline-success">
                                <span class="sr-only">В избранное</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-heart"/>
                                </svg>
                            </button>
                            <button class="product-card__to-compare btn btn-outline-success">
                                <span class="sr-only">Сравнить</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-graph"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="catalog-page__item product-card">
                        <div class="product-card__img-wrap">
                            <img class="product-card__img" src="/images/product-1.jpg" alt="Дом из бруса 8x8.5 в два этажа брусом с эркером">
                        </div>
                        <a href="#" class="product-card__title-link">
                            <h3 class="product-card__title">Дом из бруса 8x8.5 в два этажа брусом с эркером</h3>
                        </a>
                        <ul class="product-card__params ul-reset">
                            <li class="product-card__param">
                                <div class="product-card__param-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-address"/>
                                    </svg>
                                </div>
                                <div class="product-card__param-text">Этажность: <b>2 этажа</b></div>
                            </li>
                            <li class="product-card__param">
                                <div class="product-card__param-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-bed"/>
                                    </svg>
                                </div>
                                <div class="product-card__param-text">Комнат: <b>5</b></div>
                            </li>
                            <li class="product-card__param">
                                <div class="product-card__param-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-size"/>
                                    </svg>
                                </div>
                                <div class="product-card__param-text">Размер: <b>8×8.5</b></div>
                            </li>
                            <li class="product-card__param">
                                <div class="product-card__param-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                        <use xlink:href="/images/sprite.svg#icon-calendar"/>
                                    </svg>
                                </div>
                                <div class="product-card__param-text">Сроки: <b>14 дней</b></div>
                            </li>
                        </ul>
                        <div class="product-card__old-price">Старая цена: <del>850 000 Руб</del></div>
                        <div class="product-card__price">Цена: <b>742 500 Руб</b></div>
                        <div class="product-card__actions">
                            <button class="product-card__to-cart btn btn-primary">
                                Заказать
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-cart"/>
                                </svg>
                            </button>
                            <button class="product-card__to-favorites btn btn-outline-success">
                                <span class="sr-only">В избранное</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-heart"/>
                                </svg>
                            </button>
                            <button class="product-card__to-compare btn btn-outline-success">
                                <span class="sr-only">Сравнить</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-graph"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="catalog-page__item product-card">
                    <div class="product-card__img-wrap">
                        <img class="product-card__img" src="/images/product-1.jpg" alt="Дом из бруса 8x8.5 в два этажа брусом с эркером">
                    </div>
                    <a href="#" class="product-card__title-link">
                        <h3 class="product-card__title">Дом из бруса 8x8.5 в два этажа брусом с эркером</h3>
                    </a>
                    <ul class="product-card__params ul-reset">
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-address"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Этажность: <b>2 этажа</b></div>
                        </li>
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-bed"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Комнат: <b>5</b></div>
                        </li>
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-size"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Размер: <b>8×8.5</b></div>
                        </li>
                        <li class="product-card__param">
                            <div class="product-card__param-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-calendar"/>
                                </svg>
                            </div>
                            <div class="product-card__param-text">Сроки: <b>14 дней</b></div>
                        </li>
                    </ul>
                    <div class="product-card__old-price">Старая цена: <del>850 000 Руб</del></div>
                    <div class="product-card__price">Цена: <b>742 500 Руб</b></div>
                    <div class="product-card__actions">
                        <button class="product-card__to-cart btn btn-primary">
                            Заказать
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-cart"/>
                            </svg>
                        </button>
                        <button class="product-card__to-favorites btn btn-outline-success">
                            <span class="sr-only">В избранное</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-heart"/>
                            </svg>
                        </button>
                        <button class="product-card__to-compare btn btn-outline-success">
                            <span class="sr-only">Сравнить</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-graph"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            </div>
        </div>
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

<div class="advantages light-bg">
    <div class="container">
        <h2>Наши преимущества</h2>
        <div class="row justify-content-center no-gutters">
            <div class="col-xl col-md-3 col-sm-4 col-6">
                <div class="advantages__item advantage">
                    <div class="advantage__circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-address">
                        </svg>
                    </div>
                    <div class="advantage__descr">Офисы в Москве и&nbsp;Волгограде</div>
                </div>
            </div>
            <div class="col-xl col-md-3 col-sm-4 col-6">
                <div class="advantages__item advantage">
                    <div class="advantage__circle">
                        <img src="/images/advantage-2.png" alt="">
                    </div>
                    <div class="advantage__descr">Собственный склад круглого леса</div>
                </div>
            </div>
            <div class="col-xl col-md-3 col-sm-4 col-6">
                <div class="advantages__item advantage">
                    <div class="advantage__circle">
                        <img src="/images/advantage-3.png" alt="">
                    </div>
                    <div class="advantage__descr">Современная пилорама</div>
                </div>
            </div>
            <div class="col-xl col-md-3 col-sm-4 col-6">
                <div class="advantages__item advantage">
                    <div class="advantage__circle">
                        <img src="/images/advantage-4.png" alt="">
                    </div>
                    <div class="advantage__descr">Цеха по обработке дерева</div>
                </div>
            </div>
            <div class="col-xl col-md-3 col-sm-4 col-6">
                <div class="advantages__item advantage">
                    <div class="advantage__circle">
                        <img src="/images/advantage-5.png" alt="">
                    </div>
                    <div class="advantage__descr">Склад готовой продукции</div>
                </div>
            </div>
            <div class="col-xl col-md-3 col-sm-4 col-6">
                <div class="advantages__item advantage">
                    <div class="advantage__circle">
                        <img src="/images/advantage-6.png" alt="">
                    </div>
                    <div class="advantage__descr">Собственный парк автотранспорта</div>
                </div>
            </div>
            <div class="col-xl col-md-3 col-sm-4 col-6">
                <div class="advantages__item advantage">
                    <div class="advantage__circle">
                        <img src="/images/advantage-7.png" alt="">
                    </div>
                    <div class="advantage__descr">Высокое качество продукции</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="steps">
    <div class="container">
        <h2>Как мы работаем</h2>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="steps__item step">
                    <div class="step__number">01</div>
                    <div class="step__title" style="background-image: url('/images/1.svg')">Общение</div>
                    <div class="step__descr">Общение с заказчиком, получение информации для отрисовки и просчёта проекта</div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="steps__item step">
                    <div class="step__number">02</div>
                    <div class="step__title" style="background-image: url('/images/2.svg')">Создание</div>
                    <div class="step__descr">Создание<br> проекта и технической документации</div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="steps__item step">
                    <div class="step__number">03</div>
                    <div class="step__title" style="background-image: url('/images/3.svg')">Согласовываем</div>
                    <div class="step__descr">Согласовываем<br> и подписываем документы +&nbsp;предоплата 35%</div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="steps__item step">
                    <div class="step__number">04</div>
                    <div class="step__title" style="background-image: url('/images/4.svg')">Встреча</div>
                    <div class="step__descr">Встреча заказчика<br> с прорабом на участке и обсуждение вопросов</div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="steps__item step">
                    <div class="step__number">05</div>
                    <div class="step__title" style="background-image: url('/images/5.svg')">Вывоз</div>
                    <div class="step__descr">Вывоз домокомплекта,<br> начало работ бригады +&nbsp;вторая оплата 35%</div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="steps__item step">
                    <div class="step__number">06</div>
                    <div class="step__title" style="background-image: url('/images/6.svg')">Приемка</div>
                    <div class="step__descr">Приемка проекта согласно документации, заказчиком и  прорабом +&nbsp;остаток оплаты 30%</div>
                </div>
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