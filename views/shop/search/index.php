<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use frontend\themes\woodland\widgets\shopProducts\Products;

$defaultTitle = 'Поиск по сайту';
$query = Yii::$app->request->get('q');

$this->title = $query ? '"' . $query . '" - результаты поиска' : $defaultTitle;
$this->params['breadcrumbs'][] = $defaultTitle;

/* @var $this View */
?><main class="page-search__content">
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
    <?= Products::widget([
        'dataProvider' => $dataProvider,
    ]) ?>
    <?php if (0): ?>
    <div class="page-search__btn-wrap text-center">
        <button class="btn btn-lg btn-primary">Показать еще</button>
    </div>
    <?php endif; ?>
</main>
