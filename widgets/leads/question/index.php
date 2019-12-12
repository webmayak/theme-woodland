<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/24/18
 * Time: 1:33 PM
 */

use frontend\widgets\leads\question\LeadQuestion;
use yii\bootstrap\ActiveForm;
use yii\web\View;
use yii\widgets\MaskedInput;

/* @var $this View */
/* @var $key string */
/* @var $model LeadQuestion */
?>
<?php $form = ActiveForm::begin([
    'id' => 'lead-question-form',
    'action' => ['/leads/default/save', 'key' => $key],
    'options' => [
        'class' => 'form-faq lead-form',
    ],
]) ?>
<div class="container">
    <div class="title-home">
        Задайте свой вопрос
    </div>
    <div class="form-faq__form">
        <div class="row">
            <div class="col-sm-4">
                <?= $form->field($model, 'name')->textInput([
                    'placeholder' => 'Ваше имя',
                ])->label(false) ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'phone')->widget(MaskedInput::class, [
                    'mask' => '+7 (999) 999-99-99',
                    'options' => [
                        'placeholder' => 'Ваш номер телефона',
                        'class' => 'form-control',
                    ],
                ])->label(false); ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'email')->textInput([
                    'placeholder' => 'Ваш Email',
                ])->label(false) ?>
            </div>
        </div>
        <?= $form->field($model, 'question')->textarea([
            'rows' => 3,
            'placeholder' => 'Ваш комментарий',
        ])->label(false) ?>
        <div class="text-center">
            <button class="btn btn-success btn-lg">Оставить заявку</button>
        </div>
    </div>
</div>
<?php ActiveForm::end() ?>
