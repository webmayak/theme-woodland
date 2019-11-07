<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/16/18
 * Time: 11:34 AM
 */

use pantera\leads\widgets\form\LeadForm;
use pantera\content\widgets\block\Block;
use yii\web\View;

/* @var $this View */
?>

<footer class="footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="/" class="site-logo footer__logo">
                        <img class="site-logo__img" src="/images/logo.jpg" alt="">
                        <span>
                            <div class="site-logo__name">Фортуна</div>
                            <div class="site-logo__descr">Домостроительная компания</div>
                        </span>
                    </a>
                    <div class="footer__social">
                        <div class="footer__social-title">Социальные сети</div>
                        <ul>
                            <li>
                                <a class="footer__social-link footer__social-link--vk" href="<?= Yii::$app->contactsManager->get('social_vkontakte') ?>" target="_blank">
                                    <span class="sr-only">ВКонтакте</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                                        <use xlink:href="#icon-vk">
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="footer__social-link footer__social-link--fb" href="<?= Yii::$app->contactsManager->get('social_facebook') ?>" target="_blank">
                                    <span class="sr-only">Facebook</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                                        <use xlink:href="#icon-fb">
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="footer__social-link footer__social-link--youtube" href="<?= Yii::$app->contactsManager->get('social_youtube') ?>" target="_blank">
                                    <span class="sr-only">YouTube</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                                        <use xlink:href="#icon-youtube">
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="footer__social-link footer__social-link--instargam" href="<?= Yii::$app->contactsManager->get('social_instagram') ?>" target="_blank">
                                    <span class="sr-only">Instargam</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                                        <use xlink:href="#icon-instargam">
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="footer__social-link footer__social-link--ok" href="#" target="_blank">
                                    <span class="sr-only">OK</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                                        <use xlink:href="#icon-ok">
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="footer__social-link footer__social-link--tw" href="#" target="_blank">
                                    <span class="sr-only">Twitter</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15">
                                        <use xlink:href="#icon-tw">
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer__menu">
                        <div class="footer__menu-title">Информация</div>
                        <ul>
                            <li>
                                <a href="">Способы оплаты</a>
                            </li>
                            <li>
                                <a href="">Гарантия</a>
                            </li>
                            <li>
                                <a href="">Доставка по России</a>
                            </li>
                            <li>
                                <a href="">Наши партнеры</a>
                            </li>
                            <li>
                                <a href="">Отзывы о компании</a>
                            </li>
                            <li>
                                <a href="">Реквизиты</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer__menu">
                        <div class="footer__menu-title">ПРОЕКТЫ</div>
                        <ul>
                            <li>
                                <a href="">Дома из бруса</a>
                            </li>
                            <li>
                                <a href="">Коттеджи из бруса</a>
                            </li>
                            <li>
                                <a href="">Бани из бруса</a>
                            </li>
                            <li>
                                <a href="">Каркасные дома</a>
                            </li>
                            <li>
                                <a href="">Перевозные бани</a>
                            </li>
                            <li>
                                <a href="">Навесы для машины</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer__menu">
                        <div class="footer__menu-title">СТРОИТЕЛЬСТВО</div>
                        <ul>
                            <li>
                                <a href="">Фундамент</a>
                            </li>
                            <li>
                                <a href="">Строительство срубов</a>
                            </li>
                            <li>
                                <a href="">Внутренняя отделка</a>
                            </li>
                            <li>
                                <a href="">Печи для бань</a>
                            </li>
                            <li>
                                <a href="">Строительство бань</a>
                            </li>
                            <li>
                                <a href="">Калькулятор</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer__contacts">
                        <a href="#" class="btn btn-primary footer__contacts-btn btn--call">Заказать звонок</a>
                        <ul class="footer__contact-list ul-reset">
                            <li class="footer__contact-item">
                                <div class="footer__contact-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14">
                                        <use xlink:href="#icon-tel">
                                    </svg>
                                </div>
                                <div class="footer__contact-item-text">8-800-775-18-13</div>
                            </li>
                            <li class="footer__contact-item">
                                <div class="footer__contact-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12">
                                        <use xlink:href="#icon-email">
                                    </svg>
                                </div>
                                <div class="footer__contact-item-text">fortuna-les@gmail.com</div>
                            </li>
                            <li class="footer__contact-item">
                                <div class="footer__contact-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                        <use xlink:href="#icon-mode">
                                    </svg>
                                </div>
                                <div class="footer__contact-item-text">Пн-Пт: 09:00-19:00</div>
                            </li>
                            <li class="footer__contact-item">
                                <div class="footer__contact-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12">
                                        <use xlink:href="#icon-address">
                                    </svg>
                                </div>
                                <div class="footer__contact-item-text">Шатурский р-н, д. ЦУС Мир д. 1б</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-bottom__copyright">
                        <p>Copyright © fortuna-les.ru 2008-2019</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-bottom__development">
                        <p>Создание и продвижение сайта от Iceseo</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php if (0) : ?>
    <footer id="footer">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 first">
                        <div class="creative_header_address">
                            <div class="single_header_address">
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
                            <div class="single_header_address">
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
                                    <h3>Бесплатная консультация</h3>
                                    <a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->contactsManager->get('phone_mobile')) ?>"><?= Yii::$app->contactsManager->get('phone_mobile') ?></a>
                                </div>
                            </div>
                            <div class="single_header_address">
                                <a href="/contacts" class="creative_header_icon">
                                    <i class="fa fa-map-marker"></i>
                                </a>
                                <div class="creative_header_address_text">
                                    <h3>Главный офис</h3>
                                    <a href="/contacts" style="font-size: 13px;"><?= nl2br(Yii::$app->contactsManager->get('address')) ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="bottom-panel__icons hidden-sm hidden-xs">
                            <a href="<?= Yii::$app->contactsManager->get('social_facebook') ?>" target="_blank"><img src="/images/icon-fb.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_whatsapp') ?>" target="_blank"><img src="/images/icon-wa.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_youtube') ?>" target="_blank"><img src="/images/icon-youtube.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_instagram') ?>" target="_blank"><img src="/images/icon-instagram.svg"></a>
                            <a href="<?= Yii::$app->contactsManager->get('social_vkontakte') ?>" target="_blank"><img src="/images/icon-vk.svg"></a>
                        </div>
                        <div class="creative_header_address">
                            <div class="single_header_address">
                                <a href="mailto:<?= Yii::$app->contactsManager->get('email') ?>" class="creative_header_icon">
                                    <i class="fa fa-envelope"></i>
                                </a>
                                <div class="creative_header_address_text">
                                    <h3>Электронная почта</h3>
                                    <a href="mailto:<?= Yii::$app->contactsManager->get('email') ?>" style="font-size: 13px;"><?= Yii::$app->contactsManager->get('email') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="footer-menu">
                         <?= Block::widget([
                             'position' => 'footer3',
                         ]) ?>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-3 last">
                    <?= Block::widget([
                        'position' => 'footer4',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?= Block::widget([
                        'position' => 'copyrightLeft',
                    ]) ?>
                </div>
                <div class="col-md-3">
                    <?= Block::widget([
                        'position' => 'copyrightCenter',
                    ]) ?>
                </div>
                <div class="col-md-3">
                    <?= Block::widget([
                        'position' => 'copyrightRight',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php endif; ?>
