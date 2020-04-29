<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use frontend\themes\woodland\widgets\shopProducts\ProductsList;

$defaultTitle = 'Поиск по сайту';
$query = Yii::$app->request->get('q');

$this->title = $query ? '"' . $query . '" - результаты поиска' : $defaultTitle;
$this->params['breadcrumbs'][] = $defaultTitle;

$dataProvider->sort->defaultOrder = ['price' => SORT_DESC];
$dataProvider->pagination->pageSize = 12;

/* @var $this View */
?>

<h1><?= Html::encode($this->title) ?></h1>

<form action="<?= Url::to(['/shop/search/index']) ?>" method="get">
    <div class="input-group">
        <input class="page-search__search-field form-control form-control-lg" type="text" name="q" placeholder="Поиск по сайту" value="<?= Html::encode($query) ?>">
        <div class="input-group-append">
          <button type="submit" class="page-search__search-btn btn btn-primary">Поиск</button>
        </div>
    </div>
</form>

<div class="page-search__text">Если результаты вас не удовлетворяют, пожалуйста, попробуйте еще раз</div>

<?= ProductsList::widget([
    'dataProvider' => $dataProvider,
]) ?>
