<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 11/1/18
 * Time: 12:25 PM
 */

use common\modules\catalog\models\CatalogCategory;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
?><a class="page-site-gallery__item item-card" href="<?= $model->present()->getUrl() ?>">
    <img class="item-card__img mb-3" src="<?= $model->media ? $model->media->image() : 'https://via.placeholder.com/300x200' ?>" alt="<?= Html::encode($model->name) ?>">
    <h4 class="item-card__title mb-0"><?= Html::encode($model->name) ?></h4>
</a>
