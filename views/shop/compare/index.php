<?php

use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/* @var $this View */
/* @var $links array */
$this->title = 'Сравнение';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="compare-page pb-5">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if ($models): ?>
        <ul class="compare-page__nav-tabs nav nav-tabs">
            <li class="nav-item">
                <a class="compare-page__all-attr-link nav-link active" href="#">Все характеристики</a>
            </li>
            <li class="nav-item">
                <a class="compare-page__diff-attr-link nav-link" href="#">Только различающиеся</a>
            </li>
        </ul>

        <div class="compare-page__tab-content">
            <div class="table-responsive">
                <table class="compare-page__table table table-striped table-borderless text-center">
                    <tr>
                        <th scope="row">Название</th>
                        <?php foreach ($models as $model): ?>
                            <td>
                                <?= $model->name ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <th scope="row">Фото</th>
                        <?php foreach ($models as $model): ?>
                            <td>
                                <?php
                                if ($model->media && $model->media->issetMedia()) {
                                    echo Html::img($model->media->image(), [
                                        'class' => 'compare-page__item-img',
                                        'alt' => $model->name
                                    ]);
                                }
                                ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <th scope="row">Цена</th>
                        <?php foreach ($models as $model): ?>
                            <td>
                                <?= $model->present()->getPriceFormat() ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                    <?php foreach ($attributes as $attribute): ?>
                        <?php
                        $attributesValues = [];
                        $attributesIsEqual = true;
                        $previousValue = null;
                        foreach ($models as $model) {
                            $value = $model->present()->getAttributeValue($attribute->id);
                            $attributesValues[] = $value;
                            if (!is_null($previousValue) && $previousValue != $value) {
                                $attributesIsEqual = false;
                            }
                            $previousValue = $value;
                        }
                        ?>
                        <tr <?= $attributesIsEqual ? 'data-equal' : '' ?>>
                            <th scope="row">
                                <?= $attribute->name ?>
                            </th>
                            <?php foreach ($attributesValues as $value): ?>
                                <td>
                                    <?= Html::encode($value) ?>
                                </td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <th scope="row"></th>
                        <?php foreach ($models as $model): ?>
                            <td>
                                <?= Html::a('Удалить', ['/shop/compare/add', 'id' => $model->id], [
                                    'class' => 'btn btn-link text-danger'
                                ]) ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <?php foreach ($models as $model): ?>
                            <td>
                                <a href="<?= $model->present()->getUrl() ?>" class="btn btn-primary btn-lg">Подробнее</a>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                </table>
            </div>
        </div>

    <?php else: ?>
        <p class="text-center">Вы еще ничего не добавили в сравнение, перейдите в <a href="<?= Url::to(['/shop/catalog/index']) ?>">каталог проектов</a></p>
    <?php endif; ?>
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
