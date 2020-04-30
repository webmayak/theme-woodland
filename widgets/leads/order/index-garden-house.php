<?php

use frontend\themes\woodland\widgets\leads\order\LeadOrderGardenHouse;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\MaskedInput;

$this->title = 'Заказ беседки "Чайная" 2,4х2,4';

/* @var $this View */
/* @var $model LeadOrderGardenHouse */
/* @var $key string */

$form = ActiveForm::begin([
    'id' => 'lead-call-me-form',
    'action' => ['/leads/default/save', 'key' => $key],
    'options' => [
        'class' => 'lead-form',
    ],
]);

?>

<?php echo $form->field($model, 'equipment')->dropDownList([
    'Сделай сам' => 'Сделай сам',
    'Эконом' => 'Эконом',
    'Плюс' => 'Плюс',
], [
    'prompt' => 'Сделайте выбор'
]);
?>

    <fieldset hidden>
        <?php
        $painting = preg_split(
            '/\n+/',
            Yii::$app->settings->get('gardenhouse_painting', 'default')
        );
        echo $form->field($model, 'painting')->dropDownList(
            array_combine($painting, $painting), [
            'prompt' => 'Укажите цвет'
        ]);

        $roofColor = preg_split(
            '/\n+/',
            Yii::$app->settings->get('gardenhouse_roof_color', 'default')
        );
        echo $form->field($model, 'roofColor')->dropDownList(
            array_combine($roofColor, $roofColor), [
            'prompt' => 'Укажите цвет'
        ]);
        ?>
    </fieldset>

    <fieldset hidden>
        <legend class="form-legend">Доставка</legend>
        <?php
        echo $form->field($model, 'city')->textInput([
            'placeholder' => $model->getAttributeLabel('city'),
        ]);

        echo $form->field($model, 'street')->textInput([
            'placeholder' => $model->getAttributeLabel('street'),
        ]);

        echo $form->field($model, 'house')->textInput([
            'placeholder' => $model->getAttributeLabel('house'),
        ]);

        echo $form->field($model, 'date')->input('date', [
            'min' => date("Y-m-d"),
        ]);
        ?>
    </fieldset>

    <fieldset hidden>
        <legend class="form-legend">Сведения о заказчике</legend>
        <?php
        echo $form->field($model, 'name')->textInput([
            'placeholder' => $model->getAttributeLabel('name'),
        ]);

        echo $form->field($model, 'phone')->widget(MaskedInput::class, [
            'mask' => '+7 (999) 999-99-99',
            'options' => [
                'placeholder' => $model->getAttributeLabel('phone'),
                'class' => 'form-control',
            ],
        ]);

        echo $form->field($model, 'email')->textInput([
            'placeholder' => $model->getAttributeLabel('email'),
        ]);
        ?>
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
