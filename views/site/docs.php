<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/31/18
 * Time: 4:40 PM
 */

use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $links array */
$this->title = 'Документы';
$this->params['breadcrumbs'][] = $this->title;
?><main class="page-site-docs__content">
    <h1><?= $this->title ?></h1>
    <div class="page-site-docs__item doc-item doc-item--pdf">
        <span class="doc-item__icon-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="37" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-file"/>
            </svg>
        </span>
        <span class="doc-item__title">ГОСТ 6782.2 - 75 "Пилопродукция из древесины лиственных пород. Величина усушки."</span>
        <a href="#" class="doc-item__link btn btn-primary" download>Скачать</a>
    </div>
    <div class="page-site-docs__item doc-item doc-item--pdf">
        <span class="doc-item__icon-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="37" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-file"/>
            </svg>
        </span>
        <span class="doc-item__title">ГОСТ 2695 - 83 "Пиломатериалы лиственных пород. Технические условия."</span>
        <a href="#" class="doc-item__link btn btn-primary" download>Скачать</a>
    </div>
    <div class="page-site-docs__item doc-item doc-item--doc">
        <span class="doc-item__icon-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="37" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-file"/>
            </svg>
        </span>
        <span class="doc-item__title">ГОСТ 24454 - 80 "Пиломатериалы хвойных пород. Размеры."</span>
        <a href="#" class="doc-item__link btn btn-primary" download>Скачать</a>
    </div>
    <div class="page-site-docs__item doc-item doc-item--doc">
        <span class="doc-item__icon-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="37" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-file"/>
            </svg>
        </span>
        <span class="doc-item__title">ГОСТ 7319 - 80 "Пиломатериалы и заготовки лиственных пород.Атмосферная сушка и хранение"</span>
        <a href="#" class="doc-item__link btn btn-primary" download>Скачать</a>
    </div>
</main>
