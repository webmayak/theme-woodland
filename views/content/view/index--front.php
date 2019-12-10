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
                        <div class="why-us-item__number" data-from="0" data-to="19">19</div>
                    </div>
                    <div class="why-us-item__descr">Лет <br>работы</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-3 col-6">
                <div class="why-us__item why-us-item">
                    <div class="why-us-item__circle">
                        <div class="why-us-item__number" data-from="0" data-to="2">2</div>
                    </div>
                    <div class="why-us-item__descr">Собственных <br>производства</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-3 col-6">
                <div class="why-us__item why-us-item">
                    <div class="why-us-item__circle">
                        <div class="why-us-item__number" data-from="0" data-to="550">550</div>
                    </div>
                    <div class="why-us-item__descr">Проектов <br>выполненно</div>
                </div>
            </div>
            <div class="col-xl-2 col-md-3 col-6">
                <div class="why-us__item why-us-item">
                    <div class="why-us-item__circle">
                        <div class="why-us-item__number" data-from="0" data-to="200">200</div>
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
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-1.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Каркасные дома</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-2.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Дома из бревна</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-3.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Кирпичные дома</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-4.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Дачные дома</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-5.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Дома из бруса</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-6.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Бани</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-7.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Беседки</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-8.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Хозблоки</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-9.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Туалеты</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-10.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Мобильные дома</div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="categories__item">
                    <a class="categories__item-link" href="#">
                        <div class="categories__item-img-wrap">
                            <img class="categories__item-img" src="/images/category-11.jpg" alt="">
                            <div class="categories__item-descr">Цена от 320 0000 Руб.</div>
                        </div>
                        <div class="categories__item-title">Бытовки</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="projects">
    <div class="container">
        <h2>Проекты</h2>
        <div class="projects__carousel owl-carousel">
            <div class="projects__item product-card">
                <div class="product-card__label product-card__label--discount"><div>скидка</div></div>
                <?= $this->render('@theme/views/_product-card') ?>
            </div>
            <div class="projects__item product-card">
                <div class="product-card__label product-card__label--best-price"><div>лучшая цена</div></div>
                <?= $this->render('@theme/views/_product-card') ?>
            </div>
            <div class="projects__item product-card">
                <div class="product-card__label product-card__label--present"><div>подарок</div></div>
                <?= $this->render('@theme/views/_product-card') ?>
            </div>
            <div class="projects__item product-card">
                <div class="product-card__label product-card__label--bestseller"><div>хит продаж</div></div>
                <?= $this->render('@theme/views/_product-card') ?>
            </div>
            <div class="projects__item product-card">
                <div class="product-card__label product-card__label--best-price"><div>лучшая цена</div></div>
                <?= $this->render('@theme/views/_product-card') ?>
            </div>
        </div>
    </div>
</div>

<?= $this->render('@theme/views/_text-block--light-bg') ?>

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
                <div class="main-tabs__reviews-carousel owl-carousel">
                    <div class="review-item">
                        <div class="review-item__name">Татьяна Косенко</div>
                        <div class="review-item__date"><i class="fa fa-clock-o"></i> 07.10.19</div>
                        <div class="review-item__text">
                            <p>Долго и качественно я выбирала фирму, которая построит дом по моим требованиям и за приемлемую цену. Когда нашла эту компанию после звонка менеджеру, прежде чем заключить договор, сначала съездила на несколько объектов, которые они раньше строили, что и вам советую. Смогла лично удостовериться, что имею дело с профессионалами, а после того, как залили мне фундамент, я приезжала во время возведения самого сруба и видела, что работа кипит. Каждый был занят своим делом, но работали дружно, как в команде. Дом возвели добротный, с точностью выполнив условия договора, весной этого года думаю продолжить сотрудничество по отделке дома. Выполненной работой осталась очень довольна, здесь вам помогут построить дом вашей мечты.</p>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="review-item__name">Татьяна Косенко</div>
                        <div class="review-item__date"><i class="fa fa-clock-o"></i> 07.10.19</div>
                        <div class="review-item__text">
                            <p>Долго и качественно я выбирала фирму, которая построит дом по моим требованиям и за приемлемую цену. Когда нашла эту компанию после звонка менеджеру, прежде чем заключить договор, сначала съездила на несколько объектов, которые они раньше строили, что и вам советую. Смогла лично удостовериться, что имею дело с профессионалами, а после того, как залили мне фундамент, я приезжала во время возведения самого сруба и видела, что работа кипит. Каждый был занят своим делом, но работали дружно, как в команде. Дом возвели добротный, с точностью выполнив условия договора, весной этого года думаю продолжить сотрудничество по отделке дома. Выполненной работой осталась очень довольна, здесь вам помогут построить дом вашей мечты.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="news-tab">
                <h2>Последние новости</h2>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-news-item">
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-new-1.jpg" alt="Приглашение на выставку домов из дерева 2019 года">
                            </a>
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <h4 class="item-card__title"><a href="#">Приглашение на выставку домов из дерева 2019 года</a></h4>
                            <a class="item-card__more-link" href="#">Подробнее <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-news-item">
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-new-1.jpg" alt="Приглашение на выставку домов из дерева 2019 года">
                            </a>
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <h4 class="item-card__title"><a href="#">Приглашение на выставку домов из дерева 2019 года</a></h4>
                            <a class="item-card__more-link" href="#">Подробнее <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-news-item">
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-new-1.jpg" alt="Приглашение на выставку домов из дерева 2019 года">
                            </a>
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <h4 class="item-card__title"><a href="#">Приглашение на выставку домов из дерева 2019 года</a></h4>
                            <a class="item-card__more-link" href="#">Подробнее <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-news-item">
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-new-1.jpg" alt="Приглашение на выставку домов из дерева 2019 года">
                            </a>
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <h4 class="item-card__title"><a href="#">Приглашение на выставку домов из дерева 2019 года</a></h4>
                            <a class="item-card__more-link" href="#">Подробнее <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="articles-tab">
                <h2>Актуальные статьи</h2>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-articles-item">
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-article-1.jpg" alt="Комформ и уют проживания в деревянном доме">
                            </a>
                            <h4 class="item-card__title"><a href="#">Комформ и уют проживания в деревянном доме</a></h4>
                            <a class="item-card__more-link" href="#">Читать все <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-articles-item">
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-article-1.jpg" alt="Комформ и уют проживания в деревянном доме">
                            </a>
                            <h4 class="item-card__title"><a href="#">Комформ и уют проживания в деревянном доме</a></h4>
                            <a class="item-card__more-link" href="#">Читать все <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-articles-item">
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-article-1.jpg" alt="Комформ и уют проживания в деревянном доме">
                            </a>
                            <h4 class="item-card__title"><a href="#">Комформ и уют проживания в деревянном доме</a></h4>
                            <a class="item-card__more-link" href="#">Читать все <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="main-tabs__item-card item-card item-card--main-articles-item">
                            <div class="item-card__date"><i class="fa fa-calendar"></i> 07.10.19</div>
                            <a class="item-card__img-link" href="#">
                                <img class="item-card__img" src="/images/main-article-1.jpg" alt="Комформ и уют проживания в деревянном доме">
                            </a>
                            <h4 class="item-card__title"><a href="#">Комформ и уют проживания в деревянном доме</a></h4>
                            <a class="item-card__more-link" href="#">Читать все <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->render('@theme/views/_steps') ?>

<?= $this->render('@theme/views/_works-map') ?>

<?= $this->render('@theme/views/_advantages') ?>

<?= $this->render('@theme/views/_text-block--light-bg') ?>

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
