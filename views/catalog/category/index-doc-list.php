<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/31/18
 * Time: 4:40 PM
 */

use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $links array */
$this->title = 'Документы';

?><main class="page-site-docs__content">
    <h1><?= $this->title ?></h1>
    <div class="page-site-docs__item doc-item">
        <a href="doc.pdf" class="doc-item__link btn btn-primary" download>Скачать</a>
        <span class="doc-item__icon-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="37" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-file"/>
            </svg>
        </span>
        <span class="doc-item__title">ГОСТ 6782.2 - 75 "Пилопродукция из древесины лиственных пород. Величина усушки."</span>
    </div>
    <div class="page-site-docs__item doc-item">
        <a href="doc.pdf" class="doc-item__link btn btn-primary" download>Скачать</a>
        <span class="doc-item__icon-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="37" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-file"/>
            </svg>
        </span>
        <span class="doc-item__title">ГОСТ 2695 - 83 "Пиломатериалы лиственных пород. Технические условия."</span>
    </div>
    <div class="page-site-docs__item doc-item">
        <a href="doc.doc" class="doc-item__link btn btn-primary" download>Скачать</a>
        <span class="doc-item__icon-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="37" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-file"/>
            </svg>
        </span>
        <span class="doc-item__title">ГОСТ 24454 - 80 "Пиломатериалы хвойных пород. Размеры."</span>
    </div>
    <div class="page-site-docs__item doc-item">
        <a href="doc.doc" class="doc-item__link btn btn-primary" download>Скачать</a>
        <span class="doc-item__icon-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="37" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-file"/>
            </svg>
        </span>
        <span class="doc-item__title">ГОСТ 7319 - 80 "Пиломатериалы и заготовки лиственных пород.Атмосферная сушка и хранение"</span>
    </div>
</main>

</div><!-- закрываем .container -->

<?= LeadForm::widget([
    'mode' => LeadForm::MODE_INLINE,
    'key' => 'question',
]) ?>

<div class="container"><!-- открываем .container -->