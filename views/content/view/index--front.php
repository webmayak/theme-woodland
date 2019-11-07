<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 3:45 PM
 */

use common\modules\catalog\models\CatalogCategory;
use frontend\themes\woodland\widgets\mainCatalog\MainCatalog;
use frontend\themes\woodland\widgets\videoList\VideoList;
use pantera\content\models\ContentPage;
use pantera\content\widgets\block\Block;
use pantera\content\widgets\slider\Slider;
use pantera\leads\widgets\form\LeadForm;
use yii\web\View;

$this->context->layout = '//front';

/* @var $this View */
/* @var $model ContentPage */
/** @noinspection PhpUndefinedFieldInspection */
?>
<?php if (0) : ?>
<div class="content-block content-block--slider hidden-sm hidden-xs">
    <div class="container">
        <div class="slider-block">
            <div class="slider-block__left">
                <?= Slider::widget([
                    'pluginOptions' => [
                        'dots' => false,
                        'autoplay' => true,
                        'animateIn' => false,
                        'animateOut' => false,
                        'autoplayHoverPause' => true,
                    ],
                ]) ?>
            </div>
            <div class="slider-block__right">
                <div class="slider-block__info">
                    <div class="h3">НАШИ ПРЕИМУЩЕСТВА:</div>
                    <ul>
                        <li>безопасная сделка</li>
                        <li>быстрая доставка</li>
                        <li>доступная цена</li>
                        <li>выгодные условия рассрочки</li>
                    </ul>
                    <div class="slider-block__icons">
                        <a href="tel:+79136505577"><img src="/images/icon-phone-alt.svg" alt="Phone"></a>
                        <a href="https://api.whatsapp.com/send?phone=79136505577"><img src="/images/icon-wa-alt.svg" alt="WhatsApp"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="why-us">
    <div class="container">
        <h1 class="why-us__title-big">Домостроительная компания</h1>
        <h2 class="why-us__title section-title">Почему выбирают нас</h2>
        <div class="row">
            <div class="col-md-2 col-md-offset-2">
                <div class="why-us-item">
                    <div class="why-us-item__circle">19</div>
                    <div class="why-us-item__descr">Лет <br>работы</div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="why-us-item">
                    <div class="why-us-item__circle">2</div>
                    <div class="why-us-item__descr">Собственных <br>производства</div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="why-us-item">
                    <div class="why-us-item__circle">550</div>
                    <div class="why-us-item__descr">Проектов <br>выполненно</div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="why-us-item">
                    <div class="why-us-item__circle">200</div>
                    <div class="why-us-item__descr">Рабочих <br>в штате</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="categories">
    <div class="container">
        <h2 class="categories__title section-title">Категории</h2>
        <ul class="categories__list ul-reset">
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-1.jpg" alt="">
                    <div class="categories__item-title">Дома из бруса</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-2.jpg" alt="">
                    <div class="categories__item-title">Каркасные</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-3.jpg" alt="">
                    <div class="categories__item-title">Бани</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-4.jpg" alt="">
                    <div class="categories__item-title">Одноэтажные</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-5.jpg" alt="">
                    <div class="categories__item-title">Беседки</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-6.jpg" alt="">
                    <div class="categories__item-title">Туалеты</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-7.jpg" alt="">
                    <div class="categories__item-title">Гаражи</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-8.jpg" alt="">
                    <div class="categories__item-title">Декор</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-1.jpg" alt="">
                    <div class="categories__item-title">Дома из бруса</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-2.jpg" alt="">
                    <div class="categories__item-title">Каркасные</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-3.jpg" alt="">
                    <div class="categories__item-title">Бани</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-4.jpg" alt="">
                    <div class="categories__item-title">Одноэтажные</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-5.jpg" alt="">
                    <div class="categories__item-title">Беседки</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-6.jpg" alt="">
                    <div class="categories__item-title">Туалеты</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-7.jpg" alt="">
                    <div class="categories__item-title">Гаражи</div>
                </a>
            </li>
            <li class="categories__item">
                <a class="categories__item-link" href="#">
                    <img class="categories__item-img" src="/images/category-8.jpg" alt="">
                    <div class="categories__item-title">Декор</div>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="steps">
    <div class="container">
        <h2 class="steps__title section-title">Как мы работаем</h2>
        <ul class="steps-list ul-reset">
            <li class="steps-list__item step">
                <div class="step__number">01</div>
                <div class="step__title">Общение</div>
                <div class="step__descr">Общение с заказчиком, получение информации для отрисовки и просчёта проекта</div>
            </li>
            <li class="steps-list__item step">
                <div class="step__number">02</div>
                <div class="step__title">Создание</div>
                <div class="step__descr">Создание<br> проекта и технической документации</div>
            </li>
            <li class="steps-list__item step">
                <div class="step__number">03</div>
                <div class="step__title">Согласовываем</div>
                <div class="step__descr">Согласовываем<br> и подписываем документы +&nbsp;предоплата 35%</div>
            </li>
            <li class="steps-list__item step">
                <div class="step__number">04</div>
                <div class="step__title">Встреча</div>
                <div class="step__descr">Встреча заказчика<br> с прорабом на участке и обсуждение вопросов</div>
            </li>
            <li class="steps-list__item step">
                <div class="step__number">05</div>
                <div class="step__title">Вывоз</div>
                <div class="step__descr">Вывоз домокомплекта,<br> начало работ бригады +&nbsp;вторая оплата 35%</div>
            </li>
            <li class="steps-list__item step">
                <div class="step__number">06</div>
                <div class="step__title">Приемка</div>
                <div class="step__descr">Приемка проекта согласно документации, заказчиком и  прорабом +&nbsp;остаток оплаты 30%</div>
            </li>
        </ul>
    </div>
</div>

<div class="advantages">
    <div class="container">
        <h2 class="advantages__title section-title">Наши преимущества</h2>
        <ul class="advantages-list ul-reset">
            <li class="advantages-list__item advantage">
                <div class="advantage__circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="29" fill="currentColor">
                        <use xlink:href="#icon-address">
                    </svg>
                </div>
                <div class="advantage__descr">Офисы в Москве и&nbsp;Волгограде</div>
            </li>
            <li class="advantages-list__item advantage">
                <div class="advantage__circle">
                    <img src="/images/advantage-2.png" alt="">
                </div>
                <div class="advantage__descr">Собственный склад круглого леса</div>
            </li>
            <li class="advantages-list__item advantage">
                <div class="advantage__circle">
                    <img src="/images/advantage-3.png" alt="">
                </div>
                <div class="advantage__descr">Современная пилорама</div>
            </li>
            <li class="advantages-list__item advantage">
                <div class="advantage__circle">
                    <img src="/images/advantage-4.png" alt="">
                </div>
                <div class="advantage__descr">Цеха по обработке дерева</div>
            </li>
            <li class="advantages-list__item advantage">
                <div class="advantage__circle">
                    <img src="/images/advantage-5.png" alt="">
                </div>
                <div class="advantage__descr">Склад готовой продукции</div>
            </li>
            <li class="advantages-list__item advantage">
                <div class="advantage__circle">
                    <img src="/images/advantage-6.png" alt="">
                </div>
                <div class="advantage__descr">Собственный парк автотранспорта</div>
            </li>
            <li class="advantages-list__item advantage">
                <div class="advantage__circle">
                    <img src="/images/advantage-7.png" alt="">
                </div>
                <div class="advantage__descr">Высокое качество продукции</div>
            </li>
        </ul>
    </div>
</div>

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

<?= $this->render('@theme/views/_features') ?>

<div class="content-block content-block--main-catalog">
    <div class="container">
        <h3 class="main-catalog__subtitle"><a href="/catalog/preparaty-dlya-lechenia-gepatita-c">Препараты для лечения гепатита C</a></h3>
        <div class="main-catalog__subset">
            <?= MainCatalog::widget([
                'root' => CatalogCategory::findOne(386),
                'limit' => 3,
            ]) ?>
        </div>
        
        <h3 class="main-catalog__subtitle"><a href="/catalog/preparaty-dlya-lechenia-gepatita-b">Препараты для лечения гепатита В</a></h3>
        <div class="main-catalog__subset">
            <?= MainCatalog::widget([
                'root' => CatalogCategory::findOne(393),
                'limit' => 3,
            ]) ?>
        </div>

        <h3 class="main-catalog__subtitle"><a href="/catalog/preparaty-dlya-lechenia-vich">Препараты для лечения ВИЧ</a></h3>
        <div class="main-catalog__subset">
            <?= MainCatalog::widget([
                'root' => CatalogCategory::findOne(387),
                'limit' => 3,
            ]) ?>
        </div>

        <?= $this->render('@theme/views/_fast-consult') ?>
    </div>
</div>

<div class="content-block">
	<div class="content-block__title text-center">Сертификаты, результаты химических исследований</div>
	<div class="certificates">
		<a href="/uploads/elfinder/certificates/sofo-natko.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofo-natko.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sofovir.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofovir.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sovihep.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sovihep.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sofo-natko.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofo-natko.jpg" alt="" /></a>
		<a href="/uploads/elfinder/certificates/sofovir.jpg" data-fancybox="certificates"><img src="/uploads/elfinder/certificates/sofovir.jpg" alt="" /></a>
	</div>
    <div class="certificates-block__button"><a href="/documenty-certificaty-rezultaty-himicheskih-issledovanii" class="btn btn-lg btn-primary">Все документы и сертификаты</a></div>
</div>

<div class="content-block">
	<div class="container">
		<div class="content-block__title text-center">Задать вопрос врачу</div>
        <?= LeadForm::widget([
            'key' => 'question-row',
            'mode' => LeadForm::MODE_INLINE,
        ]) ?>
        <?= $this->render('@theme/views/_faq-block') ?>
    </div>
</div>

<div class="content-block content-block--fillwidth-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<a href="/uploads/elfinder/lechenie-1.jpg" data-fancybox="lechenie"><img src="/uploads/elfinder/lechenie-1.jpg" alt="" class="img-responsive" /></a>
			</div>
			<div class="col-md-6">
				<a href="/uploads/elfinder/lechenie-2.jpg" data-fancybox="lechenie"><img src="/uploads/elfinder/lechenie-2.jpg" alt="" class="img-responsive" /></a>
			</div>
		</div>
	</div>
</div>

<?= $this->render('@theme/views/_quality-protection') ?>

<?php if (0): ?>
    <div class="content-block">
       <div class="h2 content-block__title text-center">Химические исследования</div>
       <?= Block::widget([
        'position' => 'chemical_research',
    ]) ?>
</div>
<?php endif; ?>

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

<?php if ($model->body || $model->seo->h1): ?>
    <div class="content-block content-block--frontpage-content">
        <div class="container">
            <?php if ($model->seo->h1) : ?>
                <h1 class="title-home">
                    <?= $model->seo->h1 ?>
                </h1>
            <?php endif; ?>
            <?php if ($model->body) : ?>
                <div class="editor-content">
                    <?= $model->body ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<?php endif; ?>
