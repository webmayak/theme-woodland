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
                $catalogIsActive = preg_match('/^(catalog|brands|documenty-certificaty-rezultaty-himicheskih-issledovanii)/', Yii::$app->request->pathInfo);
                $brandsIsActive = preg_match('/^brands/', Yii::$app->request->pathInfo);
                ?>
                <li class="<?= $catalogIsActive ? 'active' : '' ?>" id="main-menu-catalog">
                    <a href="<?= Url::to(['#']) ?>" class="navtext">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-address"/>
                        </svg>
                        Проекты
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Этажность</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Площадь</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Технология и тип</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Стиль</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Особенности</a>
                        </li>
                    </ul>
                    <?php if (0 && $this->beginCache('megamenu-dropdown', ['duration' => 86400])): ?>
                    <?= $this->render('_dropdown', [
                        'categories' => $catalogRoot->getChildren()->isInMenu()->all(),
                    ]) ?>
                    <?php $this->endCache(); endif; ?>
                </li>
                <li class="<?= preg_match('/^article$/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-wall"/>
                        </svg>
                        Строительство
                    </a>
                </li>
                <li class="<?= preg_match('/^lechenie/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-gallery"/>
                        </svg>
                        Галерея
                    </a>
                </li>
                <li class="<?= preg_match('/^news$/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-company"/>
                        </svg>
                        О компании
                    </a>
                </li>
                <li class="<?= preg_match('/^reviews/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-percentage"/>
                        </svg>
                        Покупателю
                    </a>
                </li>
                <?php
                $faqIsActive = preg_match('/^faq/', Yii::$app->request->pathInfo);
                ?>
                <li class="<?= $faqIsActive ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-fence"/>
                        </svg>
                        Услуги
                    </a>
                </li>
                <li class="<?= Yii::$app->request->pathInfo === 'contacts' ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['#']) ?>">
                        <svg class="megamenu__icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor">
                            <use xlink:href="/images/sprite.svg#icon-city"/>
                        </svg>
                        Контакты
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
