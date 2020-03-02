<?php

use common\modules\catalog\models\CatalogCategory;
use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/* @var $this View */
/* @var $catalogRoot CatalogCategory */
/* @var $servicesRoot CatalogCategory */
/* @var $calculatorRoot CatalogCategory */
/* @var $category CatalogCategory */
?>
<div class="megamenu clearfix">
    <div class="container">
        <nav class="wsmenu">
            <form class="search__form" action="<?= Url::to(['/shop/search/index']) ?>">
                <input class="search__field form-control" type="text" name="q" placeholder="Поиск по сайту">
                <button class="search__close-btn" type="button"><span class="sr-only">Закрыть</span></button>
            </form>
            <ul class="wsmenu-list">
                <?php
                $catalogIsActive = preg_match('/catalog/', Yii::$app->request->pathInfo);
                $brandsIsActive = preg_match('/^brands/', Yii::$app->request->pathInfo);
                ?>

                <li class="<?= $catalogIsActive ? 'active' : '' ?>" id="main-menu-catalog">
                    <a href="<?= Url::to(['/shop/catalog/index']) ?>" class="navtext vsmenu-cat-toggle">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-address"/>
                        </svg>
                        Проекты
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <?php if (($catalogRoot = \common\modules\shop\models\ShopCategory::findOne(1)) && ($categories = $catalogRoot->getChildren()->andWhere(['status' => 1])->all())): ?>
                        <ul class="sub-menu sub-menu--projects">
                            <?php foreach ($categories as $category): ?>
                                <li>
                                    <a href="<?=$category->present()->getUrl()?>">
                                        <img src="<?= $category->media ? $category->media->image() : 'https://via.placeholder.com/300x200' ?>" alt="<?= Html::encode($category->name) ?>">
                                        <?= $category->name ?>
                                    </a>
                                    <?php if ($lvl2cats = $category->getChildren()->andWhere(['status' => 1])->all()): ?>
                                        <ul class="sub-menu">
                                            <?php foreach ($lvl2cats as $lvl2cat): ?>
                                                <li>
                                                    <a href="<?= $lvl2cat->present()->getUrl() ?>"><?= $lvl2cat->name ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    <?php endif; ?>
                    <?php if (0 && $this->beginCache('megamenu-dropdown', ['duration' => 86400])): ?>
                    <?= $this->render('_dropdown', [
                        'categories' => $catalogRoot->getChildren()->isInMenu()->all(),
                    ]) ?>
                    <?php $this->endCache(); endif; ?>
                </li>

                <?php if ($parent = \common\modules\catalog\models\CatalogCategory::findOne(241)) : ?>
                <li class="<?= Yii::$app->request->pathInfo === $parent->slug ? 'active' : '' ?>">
                    <a class="navtext" href="<?= $parent->present()->getUrl() ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-wall"/>
                        </svg>
                        <?= Html::encode($parent->name) ?>
                        <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                            <i class="fa fa-chevron-down"></i>
                        <?php endif; ?>
                    </a>
                    <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                        <ul class="sub-menu">
                            <?php foreach ($childs as $child): ?>
                            <li>
                                <?= Html::a($child->name, $child->present()->getUrl()) ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>

                <?php if ($parent = \common\modules\catalog\models\CatalogCategory::findOne(235)) : ?>
                <li class="<?= Yii::$app->request->pathInfo === $parent->slug ? 'active' : '' ?>">
                    <a class="navtext" href="<?= $parent->present()->getUrl() ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-gallery"/>
                        </svg>
                        <?= Html::encode($parent->name) ?>
                        <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                            <i class="fa fa-chevron-down"></i>
                        <?php endif; ?>
                    </a>
                    <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                        <ul class="sub-menu">
                            <?php foreach ($childs as $child): ?>
                                <li>
                                    <?= Html::a($child->name, $child->present()->getUrl()) ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>

                <?php if ($parent = \common\modules\catalog\models\CatalogCategory::findOne(237)) : ?>
                <li class="<?= Yii::$app->request->pathInfo === $parent->slug ? 'active' : '' ?>">
                    <a class="navtext" href="<?= $parent->present()->getUrl() ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-company"/>
                        </svg>
                        <?= Html::encode($parent->name) ?>
                        <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                            <i class="fa fa-chevron-down"></i>
                        <?php endif; ?>
                    </a>
                    <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                        <ul class="sub-menu">
                            <?php foreach ($childs as $child): ?>
                                <li>
                                    <?= Html::a($child->name, $child->present()->getUrl()) ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>

                <?php if ($parent = \common\modules\catalog\models\CatalogCategory::findOne(238)) : ?>
                <li class="<?= Yii::$app->request->pathInfo === $parent->slug ? 'active' : '' ?>">
                    <a class="navtext">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-percentage"/>
                        </svg>
                        <?= Html::encode($parent->name) ?>
                        <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                            <i class="fa fa-chevron-down"></i>
                        <?php endif; ?>
                    </a>
                    <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                        <ul class="sub-menu">
                            <?php foreach ($childs as $child): ?>
                                <li>
                                    <?= Html::a($child->name, $child->present()->getUrl()) ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>

                <?php if ($parent = \common\modules\catalog\models\CatalogCategory::findOne(234)) : ?>
                <li class="<?= Yii::$app->request->pathInfo === $parent->slug ? 'active' : '' ?>">
                    <a class="navtext">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-fence"/>
                        </svg>
                        <?= Html::encode($parent->name) ?>
                        <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                            <i class="fa fa-chevron-down"></i>
                        <?php endif; ?>
                    </a>
                    <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                        <ul class="sub-menu">
                            <?php foreach ($childs as $child): ?>
                                <li>
                                    <?= Html::a($child->name, $child->present()->getUrl()) ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>

                <?php if ($parent = \common\modules\catalog\models\CatalogCategory::findOne(243)) : ?>
                <li class="<?= Yii::$app->request->pathInfo === $parent->slug ? 'active' : '' ?>">
                    <a class="navtext" href="<?= $parent->present()->getUrl() ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-city"/>
                        </svg>
                        <?= Html::encode($parent->name) ?>
                        <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                            <i class="fa fa-chevron-down"></i>
                        <?php endif; ?>
                    </a>
                    <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                        <ul class="sub-menu">
                            <?php foreach ($childs as $child): ?>
                                <li>
                                    <?= Html::a($child->name, $child->present()->getUrl()) ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
                <?php endif; ?>
                <li class="search-wrap">
                    <div class="navicon search">
                        <button class="search__open-btn" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-search"/>
                            </svg>
                            <span class="sr-only">Поиск</span>
                        </button>
                    </div>
                </li>
                <li>
                    <a class="navicon" href="<?= Url::to(['/favorite']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-heart"/>
                        </svg>
                        <span class="sr-only">Избранное</span>
                    </a>
                </li>
                <li>
                    <a class="navicon" href="<?= Url::to(['/compare']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-graph"/>
                        </svg>
                        <span class="sr-only">Сравнение</span>
                    </a>
                </li>
                <li class="active">
                    <?=\common\modules\shop\widgets\cart\miniCart\MiniCartWidget::widget([
                        'content' => 'Корзина',
                    ])?>
                </li>
            </ul>
        </nav>
    </div>
</div>
