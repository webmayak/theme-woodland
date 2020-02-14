<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/* @var $this View */
/* @var $links array */
$this->title = 'Избранное';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pb-5">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if ($dataProvider->totalCount) : ?>
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
    <?php else: ?>
        <p class="text-center">Вы еще ничего не добавили в избранное, перейдите в <a href="<?= Url::to(['/shop/catalog/index']) ?>">каталог проектов</a></p>
    <?php endif; ?>
</div>
