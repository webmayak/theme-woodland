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
<div class="contact-form">
    <?php $form = ActiveForm::begin([
        'id' => 'lead-request-form',
        'action' => ['/leads/default/save', 'key' => $key],
        'options' => [
            'class' => 'form-home lead-form',
        ],
    ]) ?>
    <div class="title-forma">
        Оставьте Вашу заявку и получите -10%
    </div>
    <div class="form-home__announce">Оставьте заявку и получите конечную стоимость уже через 10 минут</div>
    <div class="form-home__form">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'name')->textInput([
                        'placeholder' => 'Ваше имя',
                    ])->label(false) ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <?= $form->field($model, 'phone')->widget(MaskedInput::class, [
                        'mask' => '+7 (999) 999-99-99',
                        'options' => [
                            'placeholder' => 'Ваш номер телефона',
                            'class' => 'form-control',
                        ],
                    ])->label(false) ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'comment')->textarea([
                'placeholder' => 'Ваш комментарий',
            ])->label(false) ?>
        </div>
        <div class="form-group">
            <?= Html::submitButton(Html::tag('span', 'ОСТАВИТЬ ЗАЯВКУ', [
                'class' => 'ladda-label',
            ]), [
                'class' => 'btn btn-success btn-lg ladda-button',
                'data' => [
                    'style' => 'zoom-in'
                ],
            ]) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
