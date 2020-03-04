<?php

use yii\helpers\Html;
use frontend\themes\woodland\widgets\shopProducts\ProductsList;

$this->title = $model->name;

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => ['/shop/catalog/index']];
foreach ($model->parents as $key => $parent) {
    if ($key == 0) continue;
    $this->params['breadcrumbs'][] = ['label' => $parent->name, 'url' => $parent->present()->getUrl()];
}
$this->params['breadcrumbs'][] = $this->title;

/**
 * @var $dataProvider \yii\data\ActiveDataProvider
 */
?><h1><?= Html::encode($this->title) ?></h1>

<?= ProductsList::widget([
    'dataProvider' => $dataProvider,
    'showLeadCard' => !preg_match('/(sadovyj-dekor|pellety)/', Yii::$app->request->pathInfo)
]) ?>
