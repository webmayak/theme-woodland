<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 1:43 PM
 */

use frontend\widgets\leads\request\LeadRequest;
use kartik\depdrop\DepDrop;
use nex\datepicker\DatePicker;
use yii\helpers\Html;
use yii\helpers\Url;
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
        Online-запись на процедуру или консультацию
    </div>
    <div class="form-home__announce">Оставьте заявку и мы перезвоним Вам в самое ближайшее время!</div>
    <div class="form-home__form">
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'categoryLevel1')->dropDownList($model->getCategoryLevel1(), [
                    'prompt' => 'Процедура..',
                ])->label(false) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'categoryLevel2')->widget(DepDrop::class, [
                    'options' => ['placeholder' => '..'],
                    'pluginOptions' => [
                        'depends' => ['leadrequest-categorylevel1'],
                        'placeholder' => '--',
                        'url' => Url::to(['/catalog/default/load-child-category'])
                    ]
                ])->label(false) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($model, 'date')->widget(DatePicker::class, [
                    'options' => [
                        'placeholder' => 'Дата',
                    ],
                    'language' => Yii::$app->language,
                    'addon' => false,
                    'clientOptions' => [
                        'showTodayButton' => false,
                        'showClear' => false,
                        'format' => 'DD-MM-YYYY',
                    ],
                ])->label(false) ?>
            </div>
            <div class="col-md-6">
                <?= $form->field($model, 'time')->dropDownList($model->getTime(), [
                    'prompt' => 'Время',
                ])->label(false) ?>
            </div>
        </div>
        
        <?php if (0): ?>
        <?= $form->field($model, 'affiliate')->dropDownList($model->getAffiliates(), [
                'prompt' => 'Филиал',
        ])->label(false) ?>
        <?php endif; ?>

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
            <?= Html::submitButton(Html::tag('span', 'ЗАПИСАТЬСЯ', [
                'class' => 'ladda-label',
            ]), [
                'class' => 'btn btn-primary btn-lg ladda-button',
                'data' => [
                    'style' => 'zoom-in'
                ],
            ]) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
