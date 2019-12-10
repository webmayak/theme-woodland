<?php

use pantera\content\widgets\block\Block;
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

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contacts-tab-2">
                2
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

<?php $this->endContent() ?>
