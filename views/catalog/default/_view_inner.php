<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 4:26 PM
 */

use common\modules\catalog\models\CatalogCategory;
use common\modules\catalog\models\CatalogCategoryAttributeValue;
use frontend\widgets\leads\LeadForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
?><div class="catalog-item__info">
    <div class="catalog-item__title">
        <a href="<?= $model->present()->getUrl() ?>"><?= Html::encode($model->name) ?></a>
    </div>
    <div class="catalog-item__rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
    </div>
    <?php if ($announce = $model->present()->getAttributeValueByKey('announce')): ?>
    <div class="catalog-item__announce">
        <?= nl2br($announce) ?>
    </div>
    <?php endif; ?>
    <div class="catalog-item__button">
        <a class="btn btn-primary" href="<?= $model->present()->getUrl() ?>">Подробнее</a>
        <?= LeadForm::widget([
            'key' => 'order',
            'text' => 'Заказать',
            'options' => [
                'class' => 'btn btn-primary btn-buy',
                'href' => Url::to(['/leads/default/modal', 'key' => 'order', 'productId' => $model->id]),
            ],
        ]) ?>
    </div>
</div>
