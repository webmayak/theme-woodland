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
$this->title = '"Дом" - результаты поиска';
$this->params['breadcrumbs'][] = $this->title;
?><main class="page-search__content">
    <h1><?= $this->title ?></h1>
	<div class="input-group">
		<input class="page-search__search-field form-control form-control-lg" type="text" placeholder="Поиск по сайту" value="Дом">
		<div class="input-group-append">
          <button type="submit" class="page-search__search-btn btn btn-primary">Поиск</button>
        </div>
	</div>
    <div class="page-search__text">Если результаты вас не удовлетворяют, пожалуйста, попробуйте еще раз</div>
    <?= $this->render('@theme/views/_catalog_grid') ?>
    <div class="page-search__btn-wrap text-center">
        <button class="btn btn-lg btn-primary">Показать еще</button>
    </div>
    <ul class="page-search__pagination pagination justify-content-center align-items-center">
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
