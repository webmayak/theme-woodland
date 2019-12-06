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
?>
<h1 class="title-home">
    <?= $this->title ?>
</h1>

<div style="margin: 30px 0;">
	<div class="input-group">
		<input class="form-control form-control-lg" type="text" placeholder="Поиск по сайту" value="Дом">
		<div class="input-group-append">
          <button type="submit" class="btn btn-primary" style="width: 160px;">Поиск</button>
        </div>
	</div>
</div>

<div style="margin: 30px 0 20px;">Если результаты вас не удовлетворяют, пожалуйста, попробуйте еще раз</div>

<br/>

<?= $this->render('@theme/views/_catalog_grid') ?>

<br/>

<div class="text-center">
    <button class="btn btn-lg btn-primary">Показать еще</button>
</div>

<br/><br/>
