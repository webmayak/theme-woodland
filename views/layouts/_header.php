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
<svg xmlns="http://www.w3.org/2000/svg" class="hidden">
    <symbol id="icon-city" viewbox="0 0 97.713 97.713">
        <path d="M48.855 0C29.021 0 12.883 16.138 12.883 35.974c0 5.174 1.059 10.114 3.146 14.684 8.994 19.681 26.238 40.46 31.31 46.359a2.003 2.003 0 003.034 0c5.07-5.898 22.314-26.676 31.311-46.359 2.088-4.57 3.146-9.51 3.146-14.684C84.828 16.138 68.69 0 48.855 0zm0 54.659c-10.303 0-18.686-8.383-18.686-18.686 0-10.304 8.383-18.687 18.686-18.687s18.686 8.383 18.686 18.687c.001 10.303-8.382 18.686-18.686 18.686z"/>
    </symbol>
    <symbol id="icon-tel" viewbox="0 0 401.998 401.998">
        <path d="M401.129 311.475c-1.137-3.426-8.371-8.473-21.697-15.129-3.61-2.098-8.754-4.949-15.41-8.566a1437.412 1437.412 0 01-18.13-9.996 605.612 605.612 0 01-15.276-8.846c-.76-.571-3.139-2.234-7.136-5-4.001-2.758-7.375-4.805-10.14-6.14-2.759-1.327-5.473-1.995-8.138-1.995-3.806 0-8.56 2.714-14.268 8.135a139.01 139.01 0 00-15.7 17.706c-4.757 6.379-9.802 12.275-15.126 17.7-5.332 5.427-9.713 8.138-13.135 8.138-1.718 0-3.86-.479-6.427-1.424-2.566-.951-4.518-1.766-5.858-2.423-1.328-.671-3.607-1.999-6.845-4.004-3.244-1.999-5.048-3.094-5.428-3.285-26.075-14.469-48.438-31.029-67.093-49.676-18.649-18.658-35.211-41.019-49.676-67.097-.19-.381-1.287-2.19-3.284-5.424-2-3.237-3.333-5.518-3.999-6.854-.666-1.331-1.475-3.283-2.425-5.852s-1.427-4.709-1.427-6.424c0-3.424 2.713-7.804 8.138-13.134 5.424-5.327 11.326-10.373 17.7-15.128a138.95 138.95 0 0017.701-15.699c5.424-5.711 8.136-10.467 8.136-14.273 0-2.663-.666-5.378-1.997-8.137-1.332-2.765-3.378-6.139-6.139-10.138-2.762-3.997-4.427-6.374-4.999-7.139a627.13 627.13 0 01-8.848-15.271 1441.4 1441.4 0 01-9.995-18.131c-3.615-6.658-6.468-11.799-8.564-15.415C98.986 9.233 93.943 1.997 90.516.859 89.183.288 87.183 0 84.521 0c-5.142 0-11.85.95-20.129 2.856-8.282 1.903-14.799 3.899-19.558 5.996-9.517 3.995-19.604 15.605-30.264 34.826C4.863 61.566.01 79.271.01 96.78c0 5.135.333 10.131.999 14.989.666 4.853 1.856 10.326 3.571 16.418 1.712 6.09 3.093 10.614 4.137 13.56 1.045 2.948 2.996 8.229 5.852 15.845 2.852 7.614 4.567 12.275 5.138 13.988 6.661 18.654 14.56 35.307 23.695 49.964 15.03 24.362 35.541 49.539 61.521 75.521 25.981 25.98 51.153 46.49 75.517 61.526 14.655 9.134 31.314 17.032 49.965 23.698 1.714.568 6.375 2.279 13.986 5.141 7.614 2.854 12.897 4.805 15.845 5.852 2.949 1.048 7.474 2.43 13.559 4.145 6.098 1.715 11.566 2.905 16.419 3.576 4.856.657 9.853.996 14.989.996 17.508 0 35.214-4.856 53.105-14.562 19.219-10.656 30.826-20.745 34.823-30.269 2.102-4.754 4.093-11.273 5.996-19.555 1.909-8.278 2.857-14.985 2.857-20.126.006-2.673-.281-4.668-.855-6.012z"/>
    </symbol>
    <symbol id="icon-email" viewbox="0 0 550.795 550.795">
        <path d="M501.613 491.782c12.381 0 23.109-4.088 32.229-12.16L377.793 323.567a2878.213 2878.213 0 00-10.801 7.767c-11.678 8.604-21.156 15.318-28.434 20.129-7.277 4.822-16.959 9.737-29.045 14.755-12.094 5.024-23.361 7.528-33.813 7.528h-.612c-10.453 0-21.72-2.503-33.813-7.528-12.093-5.018-21.775-9.933-29.045-14.755-7.277-4.811-16.75-11.524-28.434-20.129a1351.934 1351.934 0 00-10.771-7.809L16.946 479.622c9.119 8.072 19.854 12.16 32.234 12.16h452.433zM31.047 225.299C19.37 217.514 9.015 208.598 0 198.555V435.98l137.541-137.541c-27.516-19.21-62.969-43.562-106.494-73.14zM520.059 225.299c-41.865 28.336-77.447 52.73-106.75 73.195l137.486 137.492V198.555c-8.815 9.841-19.059 18.751-30.736 26.744z"/><path d="M501.613 59.013H49.181c-15.784 0-27.919 5.33-36.42 15.979C4.253 85.646.006 98.97.006 114.949c0 12.907 5.636 26.892 16.903 41.959 11.267 15.061 23.256 26.891 35.961 35.496 6.965 4.921 27.969 19.523 63.012 43.801a20367.497 20367.497 0 0149.505 34.395 8855.122 8855.122 0 0131.022 21.701c.985.691 2.534 1.799 4.59 3.269 2.215 1.591 5.018 3.61 8.476 6.107 6.659 4.816 12.191 8.709 16.597 11.683 4.4 2.975 9.731 6.298 15.985 9.988 6.249 3.685 12.143 6.456 17.675 8.299 5.533 1.842 10.655 2.766 15.367 2.766h.612c4.711 0 9.834-.924 15.368-2.766 5.531-1.843 11.42-4.608 17.674-8.299 6.248-3.69 11.572-7.02 15.986-9.988 4.406-2.974 9.938-6.866 16.598-11.683 3.451-2.497 6.254-4.517 8.469-6.102a643.575 643.575 0 014.596-3.274c6.684-4.651 17.1-11.892 31.104-21.616 25.482-17.705 63.01-43.764 112.742-78.281 14.957-10.447 27.453-23.054 37.496-37.803 10.025-14.749 15.051-30.22 15.051-46.408 0-13.525-4.873-25.098-14.598-34.737-9.736-9.627-21.265-14.443-34.584-14.443z"/>
    </symbol>
    <symbol id="icon-mode" viewbox="0 0 299.995 299.995">
        <path d="M149.995 0C67.156 0 0 67.158 0 149.995s67.156 150 149.995 150 150-67.163 150-150S232.834 0 149.995 0zm64.847 178.524H151.25c-.215 0-.415-.052-.628-.06-.213.01-.412.06-.628.06-5.729 0-10.374-4.645-10.374-10.374V62.249c0-5.729 4.645-10.374 10.374-10.374s10.374 4.645 10.374 10.374v95.527h54.47c5.729 0 10.374 4.645 10.374 10.374 0 5.729-4.641 10.374-10.37 10.374z"/>
    </symbol>
    <symbol id="icon-address" viewbox="0 0 460.298 460.297">
        <path d="M230.149 120.939L65.986 256.274c0 .191-.048.472-.144.855-.094.38-.144.656-.144.852v137.041c0 4.948 1.809 9.236 5.426 12.847 3.616 3.613 7.898 5.431 12.847 5.431h109.63V303.664h73.097v109.64h109.629c4.948 0 9.236-1.814 12.847-5.435 3.617-3.607 5.432-7.898 5.432-12.847V257.981c0-.76-.104-1.334-.288-1.707L230.149 120.939z"/><path d="M457.122 225.438L394.6 173.476V56.989c0-2.663-.856-4.853-2.574-6.567-1.704-1.712-3.894-2.568-6.563-2.568h-54.816c-2.666 0-4.855.856-6.57 2.568-1.711 1.714-2.566 3.905-2.566 6.567v55.673l-69.662-58.245c-6.084-4.949-13.318-7.423-21.694-7.423-8.375 0-15.608 2.474-21.698 7.423L3.172 225.438c-1.903 1.52-2.946 3.566-3.14 6.136-.193 2.568.472 4.811 1.997 6.713l17.701 21.128c1.525 1.712 3.521 2.759 5.996 3.142 2.285.192 4.57-.476 6.855-1.998L230.149 95.817l197.57 164.741c1.526 1.328 3.521 1.991 5.996 1.991h.858c2.471-.376 4.463-1.43 5.996-3.138l17.703-21.125c1.522-1.906 2.189-4.145 1.991-6.716-.195-2.563-1.242-4.609-3.141-6.132z"/>
    </symbol>
</svg>

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="/" class="header__logo">
                    <img class="header__logo-img" src="/images/logo.jpg" alt="">
                    <span>
                        <div class="header__logo-name">Фортуна</div>
                        <div class="header__logo-descr">Домостроительная компания</div>
                    </span>
                </a>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <div class="header__contact header__contact--city">
                            <div class="header__contact-icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" height="10" fill="currentColor">
                                    <use xlink:href="#icon-city">
                                    </svg>
                                </div>
                                <div>
                                    <div class="header__contact-key">Ваш город:</div>
                                    <div class="header__contact-value">
                                        <div class="dropdown">
                                            <button class="header__contact-toggle dropdown-toggle" type="button" data-toggle="dropdown">г. Москва <i class="fa fa-chevron-down"></i></button>
                                            <ul class="header__city-dropdown dropdown-menu">
                                                <li>
                                                    <button class="header__city-item header__city-item--active" type="button">г. Москва</button>
                                                </li>
                                                <li>
                                                    <button class="header__city-item" type="button">г.Санкт-Петербург</button>
                                                </li>
                                                <li>
                                                    <button class="header__city-item" type="button">г.Сочи</button>
                                                </li>
                                                <li>
                                                    <button class="header__city-item" type="button">г.Нижний Новгород</button>
                                                </li>
                                                <li>
                                                    <button class="header__city-item" type="button">г.Новосибирск</button>
                                                </li>
                                                <li>
                                                    <button class="header__city-item" type="button">г.Екатеренбург</button>
                                                </li>
                                                <li>
                                                    <button class="header__city-item" type="button">г.Самара</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="header__contact header__contact--tel">
                                <div class="header__contact-icon-wrap">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="10" fill="currentColor">
                                        <use xlink:href="#icon-tel">
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="header__contact-key">Телефон:</div>
                                        <div class="header__contact-value">
                                            <div class="dropdown">
                                                <button class="header__contact-toggle dropdown-toggle" type="button" data-toggle="dropdown">8-800-775-18-13 <i class="fa fa-chevron-down"></i></button>
                                                <ul class="header__tel-dropdown dropdown-menu">
                                                    <li>
                                                        Отдел Продаж:
                                                        <a href="tel:+74957751813">+7-495-775-18-13</a>
                                                    </li>
                                                    <li>
                                                        Горячая Линия:
                                                        <a href="tel:89267751813">8-926-775-18-13</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="header__contact header__contact--email">
                                    <div class="header__contact-icon-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="10" fill="currentColor">
                                            <use xlink:href="#icon-email">
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="header__contact-key">Email:</div>
                                            <div class="header__contact-value">fortuna-les@gmail.com</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="header__contact header__contact--mode">
                                        <div class="header__contact-icon-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="10" fill="currentColor">
                                                <use xlink:href="#icon-mode">
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="header__contact-key">Режим работы:</div>
                                            <div class="header__contact-value">Пн-Пт: 09:00-19:00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="header__contact header__contact--address">
                                        <div class="header__contact-icon-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="12" fill="currentColor">
                                                <use xlink:href="#icon-address">
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="header__contact-key">Адрес:</div>
                                            <div class="header__contact-value">г. Москва, ул. Летчика Бабушкина, д. 123, оф. 244</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="btn btn-primary header__btn header__btn--call">Заказать звонок</a>
                            <a href="#" class="btn btn-success header__btn header__btn--question">Задать вопрос</a>
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
                                <?= LeadForm::widget([
                                    'key' => 'iDoctor',
                                    'text' => 'Я врач<span class="hidden-sm hidden-xs"> - желаю сотрудничать</span>',
                                    'options' => [
                                        'class' => '',
                                    ],
                                ]) ?>
                                <?= LeadForm::widget([
                                    'key' => 'getRecommendations',
                                    'text' => 'Получить рекомендации по лечению гепатита С',
                                    'options' => [
                                        'class' => '',
                                    ],
                                ]) ?>
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
                                    <img src="/images/logo.svg" alt="Индиавир" id="logo" />
                                </a>
                                <small class="top-panel__logo-text">Препараты от Гепатита и ВИЧ из Индии</small>
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
            <div class="wsmobileheader clearfix">
                <div class="container">
                    <div class="wsmobileheader__holder">
                        <a id="wsnavtoggle">
                            <div class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </div>
                        </a>
                        <div class="logo">
                            <a href="/">
                                <img src="/images/logo.svg" height="30" style="margin-top: 8px; margin-left: -40px;" alt=""/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
<?php endif; ?>
