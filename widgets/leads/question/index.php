<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/24/18
 * Time: 1:33 PM
 */

use frontend\themes\woodland\widgets\leads\question\LeadQuestion;
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
        'class' => 'form-fullwidth lead-form',
    ],
]) ?>
<div class="container">
    <div class="form-fullwidth__title">
        Задайте свой вопрос
    </div>
    <div class="form-faq__form">
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'name')->textInput([
                    'placeholder' => 'Ваше имя',
                ])->label() ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'phone')->widget(MaskedInput::class, [
                    'mask' => '+7 (999) 999-99-99',
                    'options' => [
                        'placeholder' => 'Ваш телефон',
                        'class' => 'form-control',
                    ],
                ])->label(); ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'email')->textInput([
                    'placeholder' => 'Ваш Email',
                ])->label(); ?>
            </div>
        </div>
        <?= $form->field($model, 'question')->textarea([
            'rows' => 8,
            'placeholder' => 'Ваш вопрос',
        ])->label() ?>
        <div class="text-center mt-4">
            <button class="btn btn-success btn-lg">Задать вопрос</button>
        </div>
    </div>
</div>
<?php ActiveForm::end() ?>
