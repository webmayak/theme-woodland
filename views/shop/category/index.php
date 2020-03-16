<?php

use yii\helpers\Html;
use frontend\themes\woodland\widgets\shopProducts\ProductsPjaxList;
use frontend\themes\woodland\widgets\filter\Filter as ProductsFilter;

$this->title = $model->name;

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => ['/shop/catalog/index']];
foreach ($model->parents as $key => $parent) {
    if ($key == 0) continue;
    $this->params['breadcrumbs'][] = ['label' => $parent->name, 'url' => $parent->present()->getUrl()];
}
$this->params['breadcrumbs'][] = $this->title;

$isProjectsCategory = !preg_match('/(sadovyj-dekor|pellety)/', Yii::$app->request->pathInfo);

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
