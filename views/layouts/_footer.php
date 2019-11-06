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
                    logo
                </div>
                <div class="col-md-2">
                    <div class="footer__menu-title">Информация</div>
                    <ul class="footer__menu ul-reset">
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
                <div class="col-md-2">
                    <div class="footer__menu-title">ПРОЕКТЫ</div>
                    <ul class="footer__menu ul-reset">
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
                <div class="col-md-2">
                    <div class="footer__menu-title">СТРОИТЕЛЬСТВО</div>
                    <ul class="footer__menu ul-reset">
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
                <div class="col-md-3">
                    contacts
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    Copyright © fortuna-les.ru 2008-2019
                </div>
                <div class="col-md-6 text-right">
                    Создание и продвижение сайта от Iceseo
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
