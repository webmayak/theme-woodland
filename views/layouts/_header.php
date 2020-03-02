<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/16/18
 * Time: 11:33 AM
 */

use yii\helpers\Html;
use yii\web\View;
use pantera\content\widgets\block\Block;
use pantera\leads\widgets\form\LeadForm;
use pantera\geolocation\widgets\geolocation\Geolocation;

/* @var $this View */
?>
<header class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-7 col-4 d-flex align-items-center">
                <a class="mburger mburger--squeeze" href="#mmenu-nav">
                    <b></b>
                    <b></b>
                    <b></b>
                </a>
                <a href="/" class="header__site-logo site-logo">
                    <img class="site-logo__img" src="/images/logo.jpg" alt="">
                    <span>
                        <div class="site-logo__name">Фортуна</div>
                        <div class="site-logo__descr">Домостроительная компания</div>
                    </span>
                </a>
            </div>
            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5 col-8">
                <div class="row align-items-md-center">
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="contact-item contact-item--sm header__contact header__contact--city">
                            <div class="contact-item__icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-city"/>
                                </svg>
                            </div>
                            <div>
                                <div class="contact-item__key">Ваш город:</div>
                                <div class="contact-item__value">
                                    <div class="dropdown">
                                        <button class="contact-item__toggle dropdown-toggle" type="button" data-toggle="dropdown">г. Москва <i class="fa fa-chevron-down"></i></button>
                                        <ul class="city-dropdown dropdown-menu">
                                            <li>
                                                <button class="city-dropdown__item city-dropdown__item--active" type="button">г. Москва</button>
                                            </li>
                                            <li>
                                                <button class="city-dropdown__item" type="button">г.Санкт-Петербург</button>
                                            </li>
                                            <li>
                                                <button class="city-dropdown__item" type="button">г.Сочи</button>
                                            </li>
                                            <li>
                                                <button class="city-dropdown__item" type="button">г.Нижний Новгород</button>
                                            </li>
                                            <li>
                                                <button class="city-dropdown__item" type="button">г.Новосибирск</button>
                                            </li>
                                            <li>
                                                <button class="city-dropdown__item" type="button">г.Екатеренбург</button>
                                            </li>
                                            <li>
                                                <button class="city-dropdown__item" type="button">г.Самара</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-item contact-item--sm header__contact header__contact--tel">
                            <div class="contact-item__icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-tel"/>
                                </svg>
                            </div>
                            <div>
                                <div class="contact-item__key">Телефон:</div>
                                <div class="contact-item__value">
                                    <?php
                                        $phone_sales_department = Yii::$app->contactsManager->get('phone_sales_department');
                                        $phone_hotline = Yii::$app->contactsManager->get('phone_hotline');
                                        $showDropdown = $phone_sales_department || $phone_hotline;
                                    ?>
                                    <div class="dropdown">
                                        <button class="contact-item__toggle<?php if ($showDropdown) : ?> dropdown-toggle<?php endif; ?>" type="button"<?php if ($showDropdown) : ?> data-toggle="dropdown"<?php endif; ?>>
                                            <?= Yii::$app->contactsManager->get('phone_main') ?><?php if ($showDropdown) : ?> <i class="fa fa-chevron-down"></i><?php endif; ?>
                                        </button>
                                        <?php if ($showDropdown) : ?>
                                        <ul class="tel-dropdown dropdown-menu">
                                            <?php if ($phone_sales_department) : ?>
                                            <li>
                                                Отдел Продаж:
                                                <a href="tel:<?= $phone_sales_department ?>"><?= $phone_sales_department ?></a>
                                            </li>
                                            <?php endif; ?>
                                            <?php if ($phone_hotline) : ?>
                                            <li>
                                                Горячая Линия:
                                                <a href="tel:<?= $phone_hotline ?>"><?= $phone_hotline ?></a>
                                            </li>
                                            <?php endif; ?>
                                        </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-none d-md-block">
                        <div class="contact-item contact-item--sm header__contact header__contact--email">
                            <div class="contact-item__icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-email"/>
                                </svg>
                            </div>
                            <div>
                                <div class="contact-item__key">Email:</div>
                                <div class="contact-item__value text-nowrap"><?= Yii::$app->contactsManager->get('email') ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="contact-item contact-item--sm header__contact header__contact--mode">
                            <div class="contact-item__icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-mode"/>
                                </svg>
                            </div>
                            <div>
                                <div class="contact-item__key">Режим работы:</div>
                                <div class="contact-item__value"><?= Yii::$app->contactsManager->get('opening_hours') ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="contact-item contact-item--sm header__contact header__contact--address">
                            <div class="contact-item__icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-address"/>
                                </svg>
                            </div>
                            <div>
                                <div class="contact-item__key">Адрес:</div>
                                <div class="contact-item__value text-nowrap"><?= Yii::$app->contactsManager->get('address') ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 d-none d-xl-block">
                <?= LeadForm::widget([
                    'key' => 'callMe',
                    'text' => 'Заказать звонок',
                    'options' => [
                        'class' => 'btn btn-primary header__btn btn--call',
                    ],
                ]) ?>
                <?= LeadForm::widget([
                    'key' => 'questionModal',
                    'text' => 'Задать вопрос',
                    'options' => [
                        'class' => 'btn btn-success header__btn btn--question',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</header>

<?php if (0) : ?>
    <div class="top-controls">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-5">
                    <div class="top-controls__left">
                        <?= Geolocation::widget([
                            'labelYourLocation' => 'Ваш город:',
                            'labelLocationNotDetected' => 'не указан',
                            'labelChangeLocation' => 'Выбрать город',
                        ]) ?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-7">
                    <div class="top-controls__right">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="top-panel">
                <?php if (0): ?>
                    <span class="top-panel__low-vision" title="Версия сайта для слабовидящих">
                        <a rel="nofollow" class="top-panel__low-vision-toggle">Версия сайта для слабовидящих</a>
                        <a rel="nofollow" class="top-panel__low-vision-toggle top-panel__low-vision-toggle_back">Обычная версия сайта</a>
                    </span>
                <?php endif; ?>
                <div class="row">
                    <div class="col-md-2 col-lg-3 top-panel__col-logo">
                        <a href="/">
                            <img src="/images/logo.svg" alt="" id="logo" />
                        </a>
                        <small class="top-panel__logo-text"></small>
                    </div>
                    <div class="col-md-8 col-lg-6 top-panel__col-contacts">
                        <div class="creative_header_address">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="single_header_address first">
                                    <div class="creative_header_icon">
                                        <?= LeadForm::widget([
                                            'key' => 'callMe',
                                            'text' => '<i class="fa fa-phone"></i>',
                                            'options' => [
                                                'class' => '',
                                            ],
                                        ]) ?>
                                    </div>
                                    <div class="creative_header_address_text">
                                        <h3>Телефон</h3>
                                        <a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->contactsManager->get('phone_city')) ?>"><?= Yii::$app->contactsManager->get('phone_city') ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4  col-md-4 col-sm-4 col-xs-12">
                                <div class="single_header_address" style="position: relative; left: -30px;">
                                    <div class="creative_header_icon">
                                        <?= LeadForm::widget([
                                            'key' => 'callMe',
                                            'text' => '<i class="fa fa-phone"></i>',
                                            'options' => [
                                                'class' => '',
                                            ],
                                        ]) ?>
                                    </div>
                                    <div class="creative_header_address_text">
                                        <h3 style="margin-right: -30px;">Бесплатная&nbsp;консультация</h3>
                                        <a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->contactsManager->get('phone_mobile')) ?>"><?= Yii::$app->contactsManager->get('phone_mobile') ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4  col-md-4 col-sm-4 col-xs-12">
                                <div class="single_header_address ctrp" style="position: relative; left: -20px; margin-right: -35px;">
                                    <a href="/contacts" class="creative_header_icon">
                                        <i class="fa fa-map-marker"></i>
                                    </a>
                                    <div class="creative_header_address_text">
                                        <h3>Главный офис</h3>
                                        <a href="/contacts" style="font-size: 13px; line-height: 1.6em; display: inline-block;"><?= nl2br(Yii::$app->contactsManager->get('address')) ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-3 top-panel__col-buttons text-right">
                        <div class="top-panel__icons">
                            <a href="<?= Yii::$app->contactsManager->get('social_facebook') ?>" target="_blank"><img src="/images/icon-fb.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_whatsapp') ?>" target="_blank"><img src="/images/icon-wa.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_youtube') ?>" target="_blank"><img src="/images/icon-youtube.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_instagram') ?>" target="_blank"><img src="/images/icon-instagram.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_vkontakte') ?>" target="_blank"><img src="/images/icon-vk.svg"></a>
                        </div>
                        <div class="top-panel__email">
                            <i class="fa fa-envelope"></i> <a href="mailto:<?= Yii::$app->contactsManager->get('email') ?>" style="font-size: 13px;"><?= Yii::$app->contactsManager->get('email') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php endif; ?>
