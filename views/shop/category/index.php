<?php

use yii\helpers\Html;
use frontend\themes\woodland\widgets\shopProducts\ProductsPjaxList;
use frontend\themes\woodland\widgets\filter\Filter as ProductsFilter;
use common\modules\catalog\models\CatalogCategory;

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

<?php if ($model->description): ?>
    <div class="category-description editor-content">
        <?= $model->description ?>
    </div>
<?php endif; ?>

</div><!-- закрываем .container -->

<?php

$CATEGORY_ID_ATTRIBUTE_ID = 83;

// получаем список категорий каталога, для которых указана id текущей категории магазина
$cities_ids = (new \yii\db\Query())
    ->select('category_id')
    ->from('catalog_category_attribute_value')
    ->where([
        'attribute_id' => $CATEGORY_ID_ATTRIBUTE_ID,
        'value' => $model->id
    ])->column();

if ($cities_ids) {
    echo $this->render(
        '@theme/views/_cities',
        [
            'cities' => CatalogCategory::find()
                ->isActive()
                ->andWhere(['id' => $cities_ids])
                ->all(),
            'nameCallback' => function($city) {
                return $city->parent->name;
            },
        ]
    );
}

?>
