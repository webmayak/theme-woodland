<?php

use yii\web\View;
use pantera\leads\widgets\form\LeadForm;
use frontend\themes\woodland\widgets\calculators\BaseCalc;

/* @var $this View */
/* @var $links array */
$this->title = 'Расчет цены фундамента';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calc-page pb-5">
    <h1><?= $this->title ?></h1>
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8">
            <?= BaseCalc::widget() ?>
        </div>
    </div>
    <div class="editor-content mt-5">
        <div class="h4"><b>Опорно-столбчатый</b></div>
        <ul>
            <li>Одна опора размером 400х400х400 мм (высота над землёй 40см), состоит из четырех цементных блоков, 1 блок
                имеет размер - 200х200х400 мм.
            </li>
            <li>Фундамент не заглубленный, устанавливается на подушку из песка(пгс).</li>
            <li>Расчёт количества точек опор –сеткой с равным шагом.</li>
            <li>Это бюджетный и доступный вариант фундамента, подходит для легких строений, бань, одноэтажных домов.
                Монтаж
                за 1 день.
            </li>
        </ul>
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
