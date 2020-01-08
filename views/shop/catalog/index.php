<?php

use pantera\leads\widgets\form\LeadForm;
use yii\web\View;

/* @var $this View */
/* @var $categories array */

$this->title = "Каталог";
$this->params['breadcrumbs'][] = $this->title;

?><h1><?=$this->title?></h1>

<?php if ($categories) : ?>
    <ul class="catalog-page__nav-tabs nav nav-tabs" role="tablist">
    <?php foreach ($categories as $key => $category): ?>
        <li class="nav-item">
            <a class="nav-link<?= $key == 0 ? ' active' : ''?>" data-toggle="tab" href="#catalog-tab-<?= $key ?>"><?= $category->name ?></a>
            <?php if (0): ?>
                <?php if ($lvl2cats = $category->getChildren()->andWhere(['status' => 1])->all()): ?>
                    <ul>
                    <?php foreach ($lvl2cats as $lvl2cat): ?>
                        <li>
                            <a href="<?= $lvl2cat->present()->getUrl() ?>"><?= $lvl2cat->name ?></a>
                            <?php if ($lv3categories = $lvl2cat->getChildren()->andWhere(['status' => 1])->all()): ?>
                            <ul>
                                <?php foreach ($lv3categories as $lvl3cat): ?>
                                    <li><a href="<?= $lvl3cat->present()->getUrl() ?>"><?= $lvl3cat->name ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            <?php endif; ?>
        </li>
    <?php endforeach;?>
    </ul>
<?php endif; ?>

<?php if ($categories) : ?>
    <div class="catalog-page__tab-content tab-content">
        <?php foreach ($categories as $key => $category) : ?>
            <div class="tab-pane fade show<?= $key == 0 ? ' active' : ''?>" id="catalog-tab-<?= $key ?>">
                <?= \yii\widgets\ListView::widget([
                    'dataProvider' => new \yii\data\ActiveDataProvider([
                        'query' => \common\modules\shop\models\ShopProduct::find()->andWhere(['category_id' => $category->id])
                    ]),
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
                <div class="catalog-page__btn-wrap">
                    <?php if (0) : ?>
                        <button class="catalog-page__btn btn btn-lg btn-primary">Показать еще</button>
                    <?php endif; ?>
                    <a class="catalog-page__btn btn btn-lg btn-success" href="<?= $category->present()->getUrl() ?>">Перейти в категорию</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

</div><!-- закрываем .container -->

<?= $this->render('@theme/views/_advantages') ?>

<?= $this->render('@theme/views/_steps') ?>

<div class="contact-form-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8">
                <?= LeadForm::widget([
                    'key' => 'request',
                    'mode' => LeadForm::MODE_INLINE,
                ]) ?>
            </div>
        </div>
    </div>
</div>

<div class="container"><!-- открываем снова .container -->
