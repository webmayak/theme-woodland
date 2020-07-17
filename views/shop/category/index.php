<?php

use yii\helpers\Html;
use frontend\themes\woodland\widgets\shopProducts\ProductsPjaxList;
use frontend\themes\woodland\widgets\filter\Filter as ProductsFilter;

$this->title = $model->seo->h1 ?? $model->name;

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => ['/shop/catalog/index']];
foreach ($model->parents as $key => $parent) {
    if ($key == 0) continue;
    $this->params['breadcrumbs'][] = ['label' => $parent->name, 'url' => $parent->present()->getUrl()];
}
$this->params['breadcrumbs'][] = $model->name;

$isProjectsCategory = !preg_match('/(sadovyj-dekor|pellety)/', Yii::$app->request->pathInfo);

$dataProvider->sort->defaultOrder = ['price' => SORT_DESC];

/**
 * @var $dataProvider \yii\data\ActiveDataProvider
 */
?><h1><?= Html::encode($this->title) ?></h1>

<?= ProductsPjaxList::widget([
    'layout' => $isProjectsCategory
        ? ProductsFilter::widget(['searchModel' => $searchModel]) . '{items}'
        : '{items}',
    'listOptions' => [
        'dataProvider' => $dataProvider,
        'showLeadCard' => $isProjectsCategory,
    ],
]) ?>

<div class="category-description editor-content">
    <?= $model->description ?>
</div>
