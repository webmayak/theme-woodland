<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/8/18
 * Time: 12:02 PM
 */

use common\modules\catalog\models\CatalogCategory;
use pantera\leads\widgets\form\LeadForm;
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
            <ul class="wsmenu-list">
                <?php
                $catalogIsActive = preg_match('/^catalog/', Yii::$app->request->pathInfo);
                $brandsIsActive = preg_match('/^brands/', Yii::$app->request->pathInfo);
                ?>
                <li class="<?= $catalogIsActive ? 'active' : '' ?>active" id="main-menu-catalog">
                    <a href="<?= Url::to(['/shop/catalog']) ?>" class="navtext vsmenu-cat-toggle">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-address"/>
                        </svg>
                        Проекты
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <?php if ($categories = \common\modules\shop\models\ShopCategory::findOne(2)->getChildren()->andWhere(['status' => 1])->all()): ?>
                        <ul class="sub-menu">
                            <?php foreach ($categories as $category): ?>
                                <li>
                                    <a href="<?=$category->present()->getUrl()?>"><?= $category->name ?></a>
                                    <?php if ($lvl2cats = $category->getChildren()->andWhere(['status' => 1])->all()): ?>
                                        <ul>
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
                <li class="<?= false ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-wall"/>
                        </svg>
                        Строительство
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Пункт 1</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Пункт 2</a>
                        </li>
                    </ul>
                </li>
                <li class="<?= Yii::$app->request->pathInfo === 'gallery' ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/site/gallery']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-gallery"/>
                        </svg>
                        Галерея
                    </a>
                </li>
                <li class="<?= false ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-company"/>
                        </svg>
                        О компании
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="<?= Url::to(['/news']) ?>">Новости</a></li>
                        <li><a href="<?= Url::to(['/articles']) ?>">Статьи</a></li>
                        <li><a href="<?= Url::to(['/specials']) ?>">Акции</a></li>
                        <li><a href="<?= Url::to(['/site/reviews']) ?>">Отзывы</a></li>
                        <li><a href="<?= Url::to(['/site/search']) ?>">Поиск по сайту</a></li>
                        <li><a href="<?= Url::to(['/site/faq']) ?>">FAQ</a></li>
                        <li><a href="<?= Url::to(['/sitemap']) ?>">Карта сайта</a></li>
                        <li><a href="<?= Url::to(['/404']) ?>">404</a></li>
                        <li><a href="<?= Url::to(['/site/docs']) ?>">Документы</a></li>
                    </ul>
                </li>
                <li class="<?= false ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-percentage"/>
                        </svg>
                        Покупателю
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Пункт 1</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Пункт 2</a>
                        </li>
                    </ul>
                </li>
                <li class="<?= false ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-fence"/>
                        </svg>
                        Услуги
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Пункт 1</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Пункт 2</a>
                        </li>
                    </ul>
                </li>
                <li class="<?= Yii::$app->request->pathInfo === 'kontakty' ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/kontakty']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-city"/>
                        </svg>
                        Контакты
                    </a>
                </li>
                <li>
                    <a class="navicon" href="<?= Url::to(['/site/search']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-search"/>
                        </svg>
                        <span class="sr-only">Поиск</span>
                    </a>
                </li>
                <li>
                    <a class="navicon" href="<?= Url::to(['/site/favorite']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-heart"/>
                        </svg>
                        <span class="sr-only">Избранное</span>
                    </a>
                </li>
                <li>
                    <a class="navicon" href="<?= Url::to(['/site/compare']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-graph"/>
                        </svg>
                        <span class="sr-only">Сравнение</span>
                    </a>
                </li>
                <li class="active">
                    <a class="navicon" href="<?= Url::to(['#']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                            <use xlink:href="/images/sprite.svg#icon-cart"/>
                        </svg>
                        <span class="sr-only">Корзина</span>
                        <span class="menu-cart-count">23</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
