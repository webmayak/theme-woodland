<?php

use common\modules\catalog\models\CatalogCategory;
use frontend\themes\woodland\widgets\videoList\VideoList;
use frontend\themes\woodland\widgets\shopProducts\ProductsCarousel;
use frontend\themes\woodland\widgets\shopCategories\Categories as CategoriesList;
use pantera\content\models\ContentPage;
use pantera\content\widgets\block\Block;
use pantera\content\widgets\slider\Slider;
use pantera\leads\widgets\form\LeadForm;
use yii\data\ArrayDataProvider;
use yii\web\View;
use yii\widgets\ListView;

$this->context->layout = '//front';

/* @var $this View */
/* @var $model ContentPage */
/** @noinspection PhpUndefinedFieldInspection */
?>

<div class="slider">
    <?= Slider::widget([
        'pluginOptions' => [
            'dots' => true,
            'autoplay' => true,
            'animateIn' => false,
            'animateOut' => false,
            'autoplayHoverPause' => true,
        ],
    ]) ?>

    <div class="slider__form">
        <div class="slider__form-title">Отправить расчёт на проект</div>
        <?= LeadForm::widget([
            'key' => 'order',
            'mode' => LeadForm::MODE_INLINE,
        ]) ?>
    </div>

    <a href="#video-block" class="btn btn-lg btn-primary btn--video">Смотреть видео <i class="fa fa-play" aria-hidden="true"></i></a>
</div>

<div class="why-us light-bg">
    <div class="container">
        <h1>Домостроительная компания</h1>
        <h2>Почему выбирают нас</h2>
        <div class="row justify-content-center">
            <div class="col-xl-2 col-md-3 col-6">
                <div class="why-us__item why-us-item">
                    <div class="why-us-item__circle">
                        <div class="why-us-item__number" data-from="0" data-to="21">21</div>
                    </div>
                    <div class="why-us-item__descr">Лет <br>работы</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-3 col-6">
                <div class="why-us__item why-us-item">
                    <div class="why-us-item__circle">
                        <div class="why-us-item__number" data-from="0" data-to="3">3</div>
                    </div>
                    <div class="why-us-item__descr">Собственных <br>производства</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-3 col-6">
                <div class="why-us__item why-us-item">
                    <div class="why-us-item__circle">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="why-us-item__number" data-from="0" data-to="1000">1000</span>
                            <span>+</span>
                        </div>
                    </div>
                    <div class="why-us-item__descr">Проектов <br>выполненно</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-3 col-6">
                <div class="why-us__item why-us-item">
                    <div class="why-us-item__circle">
                        <div class="why-us-item__number" data-from="0" data-to="50">50</div>
                    </div>
                    <div class="why-us-item__descr">Рабочих <br>в штате</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="categories">
    <div class="container">
        <h2>Категории</h2>
        <?= CategoriesList::widget() ?>
    </div>
</div>

<div class="container">
    <div class="projects">
        <h2>Проекты</h2>
        <?php

        // найти необходимый сегмент по алиасу
        $segment = \common\modules\shop\models\ShopProductSegment::find()->andWhere(['alias' => 'frontpage'])->one();

        // найти все товары в рамках текущего сегмента
        $productsOnFront = \common\modules\shop\models\ProductToSegment::find()->andWhere(['segment_id' => $segment->id])->select('product_id')->column();

        ?>
        <?= ProductsCarousel::widget([
            'dataProvider' => new \yii\data\ActiveDataProvider([
                'query' => \common\modules\shop\models\ShopProduct::find()->andWhere(['id' => $productsOnFront]),
                'pagination' => false,
            ]),
        ]) ?>
    </div>
</div>

<div class="text-block light-bg">
    <div class="container">
        <div class="editor-content">
            <?= Block::widget([
                'position' => 'text_frontpage',
            ]) ?>
        </div>
    </div>
</div>

<?= $this->render('@theme/views/_video') ?>

<div class="main-tabs">
    <div class="container">
        <ul class="main-tabs__nav-tabs nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#reviews-tab">Отзывы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#news-tab">Новости</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#articles-tab">Статьи</a>
            </li>
        </ul>
        <div class="main-tabs__tab-content tab-content">
            <div class="tab-pane fade show active" id="reviews-tab">
                <h2>Что клиенты говорят о нас</h2>
                <?php
                $contentPages = ContentPage::find()
                    ->joinWith('type', false)
                    ->isActive()
                    ->andWhere(['=', 'is_favorite', ContentPage::IS_FAVORITE_YES])
                    ->andWhere(['=', 'key', 'reviews'])
                    ->all();
                $dataProvider = new ArrayDataProvider([
                    'allModels' => $contentPages,
                ]);
                echo ListView::widget([
                    'dataProvider' => $dataProvider,
                    'options' => [
                        'class' => 'main-tabs__reviews-carousel owl-carousel',
                    ],
                    'itemView' => '@theme/views/_review_view',
                    'itemOptions' => [
                        'class' => 'review-item',
                    ],
                    'layout' => '{items}',
                ]) ?>
            </div>
            <div class="tab-pane fade" id="news-tab">
                <h2>Последние новости</h2>
                <?php
                $contentPages = ContentPage::find()
                    ->joinWith('type', false)
                    ->isActive()
                    ->andWhere(['=', 'is_favorite', ContentPage::IS_FAVORITE_YES])
                    ->andWhere(['=', 'key', 'news'])
                    ->all();
                $dataProvider = new ArrayDataProvider([
                    'allModels' => $contentPages,
                ]);
                echo \yii\widgets\ListView::widget([
                    'dataProvider' => $dataProvider,
                    'options' => [
                        'class' => 'row',
                    ],
                    'itemView' => '@theme/views/_main_news_view',
                    'itemOptions' => [
                        'class' => 'col-xl-3 col-lg-4 col-sm-6',
                    ],
                    'layout' => '{items}',
                ]) ?>
            </div>
            <div class="tab-pane fade" id="articles-tab">
                <h2>Актуальные статьи</h2>
                <?php
                $contentPages = ContentPage::find()
                    ->joinWith('type', false)
                    ->isActive()
                    ->andWhere(['=', 'is_favorite', ContentPage::IS_FAVORITE_YES])
                    ->andWhere(['=', 'key', 'articles'])
                    ->all();
                $dataProvider = new ArrayDataProvider([
                    'allModels' => $contentPages,
                ]);
                echo \yii\widgets\ListView::widget([
                    'dataProvider' => $dataProvider,
                    'options' => [
                        'class' => 'row',
                    ],
                    'itemView' => '@theme/views/_main_articles_view',
                    'itemOptions' => [
                        'class' => 'col-xl-3 col-lg-4 col-sm-6',
                    ],
                    'layout' => '{items}',
                ]) ?>
            </div>
        </div>
    </div>
</div>

<?= $this->render('@theme/views/_steps') ?>

<?= $this->render('@theme/views/_works-map') ?>

<?= $this->render('@theme/views/_advantages') ?>

<?php if ($model->body): ?>
    <div class="text-block light-bg">
        <div class="container">
            <div class="editor-content">
                <?= $model->body ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?= $this->render('@theme/views/_cities') ?>

<?php if (0) : ?>
<div class="content-block">
    <div class="container">
        <div class="content-block__body">
            <?= Block::widget([
                'position' => 'text_about',
            ]) ?>
        </div>
    </div>
</div>

<div class="content-block content-block--video">
    <div class="h2 content-block__title text-center" style="margin-bottom: 0px;">Видео о нас</div>
    <div class="container">
        <div class="front-page-video-holder">
            <?= VideoList::widget([
                'models' => CatalogCategory::findOne(110)->getChildrenActive()->limit(6)->all(),
            ]) ?>
        </div>
    </div>
</div>
<?php endif; ?>

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
