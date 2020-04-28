<?php

use frontend\themes\woodland\widgets\leads\order\LeadOrder;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\web\View;

$this->title = 'Заказ беседки "Чайная" 2,4х2,4';

/* @var $this View */
/* @var $model LeadOrder */
/* @var $key string */

$form = ActiveForm::begin([
    'id' => 'lead-call-me-form',
    'action' => ['/leads/default/save', 'key' => $key],
    'options' => [
        'class' => 'lead-form',
    ],
]);

?>

    <div class="form-group">
        <label class="text-muted" for="equipmentField">Комплектация <span class="text-danger">*</span></label>
        <select class="form-control" name="equipment" id="equipmentField">
            <option>Сделайте выбор</option>
            <option>Сделай сам</option>
            <option>Эконом</option>
            <option>Плюс</option>
        </select>
    </div>

    <fieldset hidden>
        <div class="form-group">
            <label class="text-muted" for="paintingField">Покраска <span class="text-danger">*</span></label>
            <select class="form-control" name="painting" id="paintingField">
                <option>Укажите цвет</option>
                <option>Без покраски</option>
                <option>Акватекс "Зеленый" в 1 слой</option>
                <option>Акватекс "Палисандр" в 1 слой</option>
                <option>Акватекс "Орех" в 1 слой</option>
                <option>Акватекс "Красное дерево" в 1 слой</option>
                <option>Акватекс "Дуб" в 1 слой</option>
                <option>Акватекс "Орегон" в 1 слой</option>
            </select>
        </div>
        <div class="form-group">
            <label class="text-muted" for="roofColorField">Цвет кровли <span class="text-danger">*</span></label>
            <select class="form-control" name="roofColor" id="roofColorField">
                <option>Укажите цвет</option>
                <option>Шинглас "Финская черепица" коричневый</option>
                <option>Шинглас "Финская черепица" Зеленый</option>
                <option>Шинглас "Финская черепица" красный</option>
            </select>
        </div>
    </fieldset>

    <fieldset hidden>
        <legend class="form-legend">Доставка</legend>
        <div class="form-group">
            <label class="text-muted" for="cityField">Населенный пункт <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="city" id="cityField" placeholder="г.Москва" required>
        </div>
        <div class="form-group">
            <label class="text-muted" for="streetField">Улица <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="street" id="streetField" placeholder="ул. Пушкинская" required>
        </div>
        <div class="form-group">
            <label class="text-muted" for="houseField">Номер дома <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="house" id="houseField" placeholder="254" required>
        </div>
        <div class="form-group field-leadorderproject-date">
            <label class="text-muted" for="dateField">Желаемая дата доставки <span class="text-danger">*</span></label>
            <input type="date" class="form-control" name="date" id="dateField" value="2020-04-28" required>
        </div>
    </fieldset>

    <fieldset hidden>
        <legend class="form-legend">Сведения о заказчике</legend>
        <div class="form-group field-leadorderproject-name">
            <label class="text-muted" for="nameField">ФИО <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="name" id="nameField" placeholder="Екатерина" required>
        </div>
        <div class="form-group field-leadorderproject-phone">
            <label class="text-muted" for="phoneField">Телефон <span class="text-danger">*</span></label>
            <input type="tel" class="form-control" name="phone" id="phoneField" placeholder="+7 892 142 25 25" required>
        </div>
        <div class="form-group field-leadorderproject-email">
            <label class="text-muted" for="emailField">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" name="email" id="emailField" placeholder="Ekaterinapasec@gmail.com" required>
        </div>
    </fieldset>

<?php

echo Html::submitButton(Html::tag('span', 'Заказать', [
    'class' => 'ladda-label',
]), [
    'class' => 'btn btn-success btn-block mt-3 ladda-button',
    'data' => [
        'style' => 'zoom-in'
    ],
    'hidden' => true
]);

ActiveForm::end();
