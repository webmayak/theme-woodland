<?php

use yii\web\View;
use pantera\leads\widgets\form\LeadForm;
use frontend\themes\woodland\widgets\calculators\HouseCalc;

/* @var $this View */
/* @var $links array */
$this->title = 'Расчет цены дома';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calc-page pb-5">
    <h1><?= $this->title ?></h1>
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8">
            <?= HouseCalc::widget() ?>
        </div>
    </div>
</div>

</div>

<div class="contact-form-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8">
                <?= LeadForm::widget([
                    'key' => 'request',
                    'mode' => LeadForm::MODE_INLINE,
                ]) ?>
            </div>
        </div>
    </div>
</div>
