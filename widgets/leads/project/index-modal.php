<?php

use frontend\themes\woodland\widgets\leads\project\LeadOrderProject;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\MaskedInput;

/* @var $this View */
/* @var $key string */
/* @var $model LeadOrderProject */
$this->title = 'Заказать проект';

$form = ActiveForm::begin([
    'id' => 'lead-order-project-form',
    'action' => ['/leads/default/save', 'key' => $key],
    'options' => [
        'class' => 'lead-form',
    ],
]);

echo $form->field($model, 'name')->textInput([
    'placeholder' => 'Ваше имя',
])->label(false);

echo $form->field($model, 'phone')->widget(MaskedInput::class, [
    'mask' => '+7 (999) 999-99-99',
    'options' => [
        'placeholder' => 'Ваш номер телефона',
        'class' => 'form-control',
    ],
])->label(false);

echo $form->field($model, 'email')->textInput([
    'placeholder' => 'Ваш E-mail',
])->label(false);

echo $form->field($model, 'comment')->textarea([
    'rows' => 5,
    'placeholder' => 'Ваш комментарий',
])->label(false);

echo Html::submitButton(Html::tag('span', 'Отправить заявку', [
    'class' => 'ladda-label',
]), [
    'class' => 'btn btn-success d-block ladda-button',
    'data' => [
        'style' => 'zoom-in'
    ],
]);

ActiveForm::end();
