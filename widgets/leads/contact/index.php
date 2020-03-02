<?php

use frontend\themes\woodland\widgets\leads\contact\LeadContact;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this View */
/* @var $model LeadContact */
/* @var $key string */
?>
<?php $form = ActiveForm::begin([
    'id' => 'lead-call-me-form',
    'action' => ['/leads/default/save', 'key' => $key],
    'options' => [
        'class' => 'form-fullwidth lead-form',
    ],
]) ?>
<div class="container">
    <div class="form-fullwidth__title">
    Напишите нам
    </div>
    <div class="form-contact__form">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <?= $form->field($model, 'name')->textInput([
                        'placeholder' => $model->getAttributeLabel('name'),
                    ])->label(); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <?= $form->field($model, 'phone')->widget(MaskedInput::class, [
                        'mask' => '+7 (999) 999-99-99',
                        'options' => [
                            'placeholder' => $model->getAttributeLabel('phone'),
                            'class' => 'form-control',
                        ],
                    ])->label(); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <?= $form->field($model, 'email')->textInput([
                        'type' => 'email',
                        'placeholder' => $model->getAttributeLabel('email'),
                    ])->label(); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'comment')->textarea([
                'rows' => 8,
                'placeholder' => 'Ваш комментарий',
            ])->label(); ?>
        </div>
        <div class="text-center mt-4">
            <?= Html::submitButton(Html::tag('span', 'Отправить письмо', [
                'class' => 'ladda-label',
            ]), [
                'class' => 'btn btn-success btn-lg ladda-button',
                'data' => [
                    'style' => 'zoom-in'
                ],
            ]); ?>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
