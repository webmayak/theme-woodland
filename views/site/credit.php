<?php

use pantera\leads\widgets\form\LeadForm;
use yii\web\View;

/* @var $this View */
/* @var $links array */
$this->title = 'Строительство в кредит';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="credit-page pb-5">
    <h1><?= $this->title ?></h1>
    <ul class="credit-page__nav-tabs nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#credit-tab-1">Почта-Банк</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#credit-tab-2">Кредит Европа-Банк</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#credit-tab-3">Альфа- Банк</a>
        </li>
    </ul>
    <div class="credit-page__tab-content tab-content">
        <div class="tab-pane fade show active" id="credit-tab-1">
            <div class="row">
                <div class="col-lg-7 order-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="editor-content">
                                <h3><b>Преимущества почта банка</b></h3>
                                <ul>
                                    <li>Срок кредита: от 6 мес до 5 лет;</li>
                                    <li>Сумма кредита: от 50 000 до 1 000 000 рублей;</li>
                                    <li>Процентная ставка: от 13.5%-16%;</li>
                                    <li>Первоначальный взнос: от 10%;</li>
                                </ul>
                                <h3><b>Условия</b></h3>
                                <ul>
                                    <li>Гражданство РФ;</li>
                                    <li>Постоянная регистрация на территории РФ;</li>
                                    <li>Возраст Клиента от 18 лет;</li>
                                    <li>Стаж на текущем месте работы: от 3-х месяцев;</li>
                                </ul>
                                <h3><b>Порядок действий</b></h3>
                                <ol>
                                    <li>Выбираете типовой проект или присылаете свой собственный проект на расчет;</li>
                                    <li>Обговариваете с менеджером все детали будущего сооружения;</li>
                                    <li>Сообщаете о желании строиться в кредит;</li>
                                    <li>Менеджер готовит коммерческое предложение и высылает Вам на утверждение;</li>
                                    <li>Менеджер связывается с сотрудником банка и передает информацию о клиенте;</li>
                                    <li>В течение 7 календарных дней банк принимает решение о кредитовании;</li>
                                    <li>Сотрудник банка связывается с клиентом и сообщает решение банка;</li>
                                    <li>В случае положительного решения сотрудник банка обговаривает удобную дату и ближайший филиал для подписания кредитного договора;</li>
                                    <li>После подписания кредитного договора мы подписываем с Вами договор на проведение строительных работ;</li>
                                    <li>Сразу после подписания договора мы приступаем к сборке и отправки материала и строительной бригады на участок заказчика;</li>
                                    <li>Производим полный цикл строительных и отделочных работ с предоставлением официальной гарантии;</li>
                                    <li>Все дальнейшее взаимодействие, связанное с обслуживанием кредитных обязательств, происходит непосредственно с вашим личным менеджером от банка.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="credit-page__short-info card">
                        <div class="card-body">
                            <img class="w-100 mb-4" src="/images/credit-1.png" alt="Почта-Банк">
                            <div class="editor-content">
                                <p>Хотите построить деревянный дом или баню, но в данный момент не хватает средств на реализацию задуманного? Не стоит ограничивать себя в самом главном!</p>
                                <p>Компания "Брусина" совместно с Почта Банком предлагает выгодные условия кредитования на малоэтажное строительство.</p>
                            </div>
                        </div>
                    </div>
                    <div class="credit-page__form-block card card-body alert alert-dismissible fade show">
                        <div class="h3 text-center mb-3"><b>Заявка на банковские услуги</b></div>
                        <?= LeadForm::widget([
                            'key' => 'orderOnMap',
                            'mode' => LeadForm::MODE_INLINE,
                        ]) ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="credit-tab-2">2</div>
        <div class="tab-pane fade" id="credit-tab-3">3</div>
    </div>
</div>
