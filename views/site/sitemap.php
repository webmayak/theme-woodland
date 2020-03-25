<?php

use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $links array */
$this->title = 'Карта сайта';
$this->params['breadcrumbs'][] = $this->title;
?>
<main class="page-sitemap__content">
    <h1><?= $this->title ?></h1>
    <div class="page-sitemap__title">Разделы</div>
    <ul>
        <?php foreach ($links1 as $link) : ?>
            <li>
                <?= Html::a($link['anchor'], $link['url']) ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="page-sitemap__title">Каталог</div>
    <ul>
        <?php foreach ($links2 as $link) : ?>
            <li>
                <?= Html::a($link['anchor'], $link['url']) ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="page-sitemap__title">Статьи</div>
    <ul>
        <?php foreach ($links3 as $link) : ?>
            <li>
                <?= Html::a($link['anchor'], $link['url']) ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <div class="page-sitemap__title">Акции и скидки</div>
    <ul>
        <?php foreach ($links4 as $link) : ?>
            <li>
                <?= Html::a($link['anchor'], $link['url']) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</main>
