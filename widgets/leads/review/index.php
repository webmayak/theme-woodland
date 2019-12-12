<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 1:43 PM
 */

use frontend\widgets\leads\request\LeadRequest;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this View */
/* @var $model LeadRequest */
/* @var $key string */
?>
<div class="content-block content-block--review-form">
    <div class="container">
        <?php $form = ActiveForm::begin([
            'id' => 'lead-review-form',
            'action' => ['/leads/default/save', 'key' => $key],
            'options' => [
                'class' => 'lead-form review-form',
            ],
        ]) ?>
        <div class="title-home review-form__title-home">
            Напишите свой отзыв
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'name')->textInput([
                        'placeholder' => $model->getAttributeLabel('name'),
                    ])->label(false) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'phone')->widget(MaskedInput::class, [
                        'mask' => '+7 (999) 999-99-99',
                        'options' => [
                            'placeholder' => $model->getAttributeLabel('phone'),
                            'class' => 'form-control',
                        ],
                    ])->label(false) ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <?= $form->field($model, 'email')->textInput([
                        'type' => 'email',
                        'placeholder' => $model->getAttributeLabel('email'),
                    ])->label(false) ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'comment')->textarea([
                'placeholder' => $model->getAttributeLabel('comment'),
                'rows' => 4,
            ])->label(false) ?>
        </div>
        <div class="form-group text-center">
            <?= Html::submitButton(Html::tag('span', 'ОСТАВИТЬ ОТЗЫВ', [
                'class' => 'ladda-label',
            ]), [
                'class' => 'btn btn-success btn-lg ladda-button',
                'data' => [
                    'style' => 'zoom-in'
                ],
            ]) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
