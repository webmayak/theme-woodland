<?php

use pantera\content\widgets\block\Block;
use pantera\leads\widgets\form\LeadForm;
use common\widgets\Alert;
use yii\web\View;
use yii\widgets\Breadcrumbs;

/* @var $this View */
/* @var $content string */
?>
<?php $this->beginContent('@theme/views/layouts/default.php') ?>
<div class="container">
	<?php if (isset($this->params['breadcrumbs'])) : ?>
		<?= Breadcrumbs::widget([
		    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
		]) ?>
	<?php endif; ?>
	<?= Alert::widget() ?>
	<?= $content ?>
</div>

<main class="page-contacts__content">
    <div class="container">
        <div class="page-contacts__tabs">
            <ul class="page-contacts__nav-tabs nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#contacts-tab-1"><i class="fa fa-map-marker"></i> Москва</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#contacts-tab-2"><i class="fa fa-map-marker"></i> Волгоград</a>
                </li>
            </ul>
            <div class="page-contacts__tab-content tab-content mt-4">
                <div class="tab-pane fade show active" id="contacts-tab-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <ul class="page-contacts__contact-list ul-reset">
                                <li class="page-contacts__contact-item contact-item">
                                    <div class="contact-item__icon-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                            <use xlink:href="/images/sprite.svg#icon-address"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="contact-item__key">Адрес:</div>
                                        <div class="contact-item__value">г. Москва, ул. Летчика Бабушкина, д. 123, оф. 244</div>
                                    </div>
                                </li>
                                <li class="page-contacts__contact-item contact-item">
                                    <div class="contact-item__icon-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                            <use xlink:href="/images/sprite.svg#icon-tel"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="contact-item__key">Отдел продаж:</div>
                                        <div class="contact-item__value">8-800-775-18-13</div>
                                        <div class="contact-item__key">Бухгалтерия:</div>
                                        <div class="contact-item__value">8-800-775-18-13</div>
                                        <div class="contact-item__key">Сотрудничество:</div>
                                        <div class="contact-item__value">8-800-775-18-13</div>
                                    </div>
                                </li>
                                <li class="page-contacts__contact-item contact-item">
                                    <div class="contact-item__icon-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                            <use xlink:href="/images/sprite.svg#icon-email"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="contact-item__key">Email:</div>
                                        <div class="contact-item__value">Fortuna-Les@yandex.ru</div>
                                    </div>
                                </li>
                                <li class="page-contacts__contact-item contact-item">
                                    <div class="contact-item__icon-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                            <use xlink:href="/images/sprite.svg#icon-mode"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="contact-item__key">Режим работы:</div>
                                        <div class="contact-item__value">Пн-Сб: 09:00-17:00 <br>Вс: по предварительной записи</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8">
                            <ul class="page-contacts__map-tabs nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#map-tab-1">Google</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#map-tab-2">Яндекс</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-3">
                                <div class="tab-pane fade show active" id="map-tab-1">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2238.228412075748!2d37.67781741609217!3d55.876052389946686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b531355488e7f7%3A0x26c520fbc59bc863!2z0YPQuy4g0JvRkdGC0YfQuNC60LAg0JHQsNCx0YPRiNC60LjQvdCwLCAxMjMsINCc0L7RgdC60LLQsCwgMTI5MzQ1!5e0!3m2!1sru!2sru!4v1576040841627!5m2!1sru!2sru" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="map-tab-2">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://yandex.ru/map-widget/v1/-/CGhnJ8LJ" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="page-contacts__route">
                                <h2>Как добраться</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="page-contacts__route-item page-contacts__route-item--foot">
                                            <div class="page-contacts__route-title">Пешком</div>
                                            <div class="page-contacts__route-text">Автобус № 177, марш. такси № - 535 , 51, 72, 71, Остановка: "метро Жулебино. Метро "Жулебино", последний вагон из центра, налево и налево. На улице пройти прямо к дому, вход со двора. "Шапки-Шапочки", "Затея".</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="page-contacts__route-item page-contacts__route-item--car">
                                            <div class="page-contacts__route-title">Авто</div>
                                            <div class="page-contacts__route-text">С МКАД съезд на улицу Поляны (р-н Северное Бутово). Далее прямо до улицы  Бартеневская, первый поворот на лево. Вниз по улице Пушкина, до конца, номер дома 162, заезд со двора дома. напротив спортивный клуб "Сафари".</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contacts-tab-2">
                    Волгоград инфо
                </div>
            </div>
        </div>
    </div>

<div class="requisites light-bg">
    <div class="container">
        <h2>Наши реквизиты</h2>
        <ul>
            <li>
                Полное  наименование:
                <b>Общество с ограниченной ответственностью «Фортуна-Лес»</b>
            </li>
            <li>
                Сокращенное  наименование:
                <b>ООО «Фортуна-Лес»</b>
            </li>
            <li>
                Юридический адрес:
                <b>140755,Московская обл. Шатурский р-н п. ЦУС «Мир» д. 1б</b>
            </li>
            <li>
                Фактический адрес:
                <b>140755,Московская обл. Шатурский р-н п. ЦУС «Мир» д. 1б</b>
            </li>
            <li>
                ИНН:
                <b>5049018840</b>
            </li>
            <li>
                КПП:
                <b>504901001</b>
            </li>
            <li>
                ОКПО:
                <b>61542011</b>
            </li>
            <li>
                ОГРН:
                <b>1095049000606</b>
            </li>
            <li>
                Генеральный директор:
                <b>Пыльцын Сергей Алексеевич</b>
            </li>
            <li>
                Расчетный счет:
                <b>40702810805800142664</b>
            </li>
            <li>
                Корреспондентский счет:
                <b>30101810900000000181</b>
            </li>
            <li>
                БИК
                <b>044525181</b>
            </li>
            <li>
                Банк:
                <b>Шатурский филиал Банка «Возрождение» (ПАО) г. Шатура</b>
            </li>
            <li>
                Вид деятельности:
                <b>основной 41.2- Строительство зданий и сооружений (ОКВЭД 2)</b>
            </li>
            <li>
                Контактное лицо:
                <b>Пыльцына  Елена Борисовна</b>
            </li>
        </ul>
    </div>
</div>

</main>

<?= $this->render('@theme/views/_video') ?>

<div class="container">
    <?= LeadForm::widget([
        'mode' => LeadForm::MODE_INLINE,
        'key' => 'contact',
    ]) ?>
</div>

<?php $this->endContent() ?>
