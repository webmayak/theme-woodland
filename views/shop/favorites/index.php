<?php

use frontend\themes\woodland\widgets\shopProducts\ProductsList;
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
        <?= ProductsList::widget([
            'dataProvider' => $dataProvider,
            'showLeadCard' => false,
        ]) ?>
    <?php else: ?>
        <p class="text-center">Вы еще ничего не добавили в избранное, перейдите в <a href="<?= Url::to(['/shop/catalog/index']) ?>">каталог проектов</a></p>
    <?php endif; ?>
</div>
