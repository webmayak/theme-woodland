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
?><div class="content-block content-block--slider hidden-sm hidden-xs">
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

<div class="why-us">
    <div class="container">
        <div class="why-us__title-big">Домостроительная компания</div>
        <div class="why-us__title section-title">Почему выбирают нас</div>
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

<div class="advantages">
    <div class="container">
        <div class="advantages__title section-title">Наши преимущества</div>
        <ul class="advantages-list ul-reset">
            <li class="advantages-list__item advantage">
                <div class="advantage__circle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.298 460.297" width="29" fill="currentColor"><path d="M230.149 120.939L65.986 256.274c0 .191-.048.472-.144.855-.094.38-.144.656-.144.852v137.041c0 4.948 1.809 9.236 5.426 12.847 3.616 3.613 7.898 5.431 12.847 5.431h109.63V303.664h73.097v109.64h109.629c4.948 0 9.236-1.814 12.847-5.435 3.617-3.607 5.432-7.898 5.432-12.847V257.981c0-.76-.104-1.334-.288-1.707L230.149 120.939z"/><path d="M457.122 225.438L394.6 173.476V56.989c0-2.663-.856-4.853-2.574-6.567-1.704-1.712-3.894-2.568-6.563-2.568h-54.816c-2.666 0-4.855.856-6.57 2.568-1.711 1.714-2.566 3.905-2.566 6.567v55.673l-69.662-58.245c-6.084-4.949-13.318-7.423-21.694-7.423-8.375 0-15.608 2.474-21.698 7.423L3.172 225.438c-1.903 1.52-2.946 3.566-3.14 6.136-.193 2.568.472 4.811 1.997 6.713l17.701 21.128c1.525 1.712 3.521 2.759 5.996 3.142 2.285.192 4.57-.476 6.855-1.998L230.149 95.817l197.57 164.741c1.526 1.328 3.521 1.991 5.996 1.991h.858c2.471-.376 4.463-1.43 5.996-3.138l17.703-21.125c1.522-1.906 2.189-4.145 1.991-6.716-.195-2.563-1.242-4.609-3.141-6.132z"/></svg>
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
