<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

$defaultTitle = 'Поиск по сайту';

$this->title = $query ? '"' . $query . '" - результаты поиска' : $defaultTitle;
$this->params['breadcrumbs'][] = $defaultTitle;

/* @var $this View */
?><main class="page-search__content">
    <h1><?= Html::encode($this->title) ?></h1>
    <form action="<?= Url::to(['/site/search']) ?>" method="get">
        <div class="input-group">
            <input class="page-search__search-field form-control form-control-lg" type="text" name="q" placeholder="Поиск по сайту" value="<?= Html::encode($query) ?>">
            <div class="input-group-append">
              <button type="submit" class="page-search__search-btn btn btn-primary">Поиск</button>
            </div>
        </div>
    </form>
    <div class="page-search__text">Если результаты вас не удовлетворяют, пожалуйста, попробуйте еще раз</div>
    <?= \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'options' => [
            'class' => 'products-list',
        ],
        'itemView' => '@theme/views/_product-card',
        'itemOptions' => [
            'class' => 'col-xl-3 col-lg-4 col-sm-6 catalog-page__item',
        ],
        'layout' => '<div class="row">{items}</div>{pager}',
        'pager' => [
            'class' => 'yii\bootstrap4\LinkPager',
            'prevPageLabel' => '<i class="fa fa-angle-left"></i> Назад',
            'nextPageLabel' => 'Вперед <i class="fa fa-angle-right"></i>',
            'listOptions' => [
                'class' => ['pagination justify-content-center align-items-center']
            ]
        ],
    ]) ?>
    <?php if (0): ?>
    <div class="page-search__btn-wrap text-center">
        <button class="btn btn-lg btn-primary">Показать еще</button>
    </div>
    <?php endif; ?>
</main>
/div>
</main>
