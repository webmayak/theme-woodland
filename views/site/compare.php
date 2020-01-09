<?php

use yii\web\View;
use pantera\leads\widgets\form\LeadForm;

/* @var $this View */
/* @var $links array */
$this->title = 'Сравнение';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compare-page pb-5">
    <h1><?= $this->title ?></h1>
    <ul class="compare-page__nav-tabs nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#compare-tab-1">Все характеристики</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#compare-tab-2">Только различающиеся</a>
        </li>
    </ul>
    <div class="compare-page__tab-content tab-content">
        <div class="tab-pane fade show active" id="compare-tab-1">
            <div class="table-responsive">
                <table class="table table-striped table-borderless text-center">
                    <tr>
                        <th scope="row">Название</th>
                        <td>Дом из бревна 074</td>
                        <td>Дом из бревна 017</td>
                        <td>Дом из бревна 113</td>
                        <td>Дом из бревна 114</td>
                    </tr>
                    <tr>
                        <th scope="row">Фото</th>
                        <td>
                            <img class="compare-page__item-img" src="/images/category-1.jpg" alt="">
                        </td>
                        <td>
                            <img class="compare-page__item-img" src="/images/category-2.jpg" alt="">
                        </td>
                        <td>
                            <img class="compare-page__item-img" src="/images/category-3.jpg" alt="">
                        </td>
                        <td>
                            <img class="compare-page__item-img" src="/images/category-4.jpg" alt="">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Цена:</th>
                        <td>870000</td>
                        <td>920000</td>
                        <td>980000</td>
                        <td>980000</td>
                    </tr>
                    <tr>
                        <th scope="row">Жилая площадь:</th>
                        <td>190 м2</td>
                        <td>88 м2</td>
                        <td>75 м2</td>
                        <td>75 м2</td>
                    </tr>
                    <tr>
                        <th scope="row">Площадь:</th>
                        <td>205</td>
                        <td>103</td>
                        <td>90</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <th scope="row">Размер:</th>
                        <td>17х14</td>
                        <td>7х9</td>
                        <td>8х7</td>
                        <td>8х7</td>
                    </tr>
                    <tr>
                        <th scope="row">Этажность:</th>
                        <td>1</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <th scope="row">По особенностям:</th>
                        <td>Для постоянного проживания</td>
                        <td>С мансардой</td>
                        <td>Недорогие</td>
                        <td>Недорогие</td>
                    </tr>
                    <tr>
                        <th scope="row">Время строительства:</th>
                        <td>20 дней</td>
                        <td>20 дней</td>
                        <td>20 дней</td>
                        <td>20 дней</td>
                    </tr>
                    <tr>
                        <th scope="row">По размерам:</th>
                        <td>12х12</td>
                        <td>12х12</td>
                        <td>12х12</td>
                        <td>12х12</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>
                            <button class="btn btn-link text-danger" type="button">Удалить</button>
                        </td>
                        <td>
                            <button class="btn btn-link text-danger" type="button">Удалить</button>
                        </td>
                        <td>
                            <button class="btn btn-link text-danger" type="button">Удалить</button>
                        </td>
                        <td>
                            <button class="btn btn-link text-danger" type="button">Удалить</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>
                            <?= LeadForm::widget([
                                'key' => 'callMe',
                                'text' => 'Оставить заявку',
                                'options' => [
                                    'class' => 'btn btn-primary btn-lg',
                                ],
                            ]) ?>
                        </td>
                        <td>
                            <?= LeadForm::widget([
                                'key' => 'callMe',
                                'text' => 'Оставить заявку',
                                'options' => [
                                    'class' => 'btn btn-primary btn-lg',
                                ],
                            ]) ?>
                        </td>
                        <td>
                            <?= LeadForm::widget([
                                'key' => 'callMe',
                                'text' => 'Оставить заявку',
                                'options' => [
                                    'class' => 'btn btn-primary btn-lg',
                                ],
                            ]) ?>
                        </td>
                        <td>
                            <?= LeadForm::widget([
                                'key' => 'callMe',
                                'text' => 'Оставить заявку',
                                'options' => [
                                    'class' => 'btn btn-primary btn-lg',
                                ],
                            ]) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="compare-tab-2">2</div>
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
