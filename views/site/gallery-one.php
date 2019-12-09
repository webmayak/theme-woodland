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
            <a class="page-site-gallery-one__item-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="/images/gallery-one-1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="/images/gallery-one-1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="/images/gallery-one-1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="/images/gallery-one-1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="/images/gallery-one-1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="/images/gallery-one-1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
                <img class="page-site-gallery-one__img" src="/images/gallery-one-1.jpg" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <a class="page-site-gallery-one__item-link" href="/images/gallery-one-1.jpg" data-fancybox="gallery">
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
        <div class="projects__item product-card">
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
        <div class="projects__item product-card">
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
        <div class="projects__item product-card">
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
        <div class="projects__item product-card">
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
