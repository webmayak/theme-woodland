<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 4:27 PM
 */

use pantera\content\models\ContentPage;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $model ContentPage */

?><div class="item-card item-card--specials-item">
    <div class="item-card__label">Действующая акция</div>
    <a class="item-card__img-link" href="<?= $model->getUrl() ?>">
        <?php
        if ($model->media && $model->media->issetMedia()) {
            $img = $model->media->image(310, 200, false);
            echo Html::img($img, [
                'class' => 'item-card__img',
            ]);
        } ?>
    </a>
    <div class="item-card__date"><i class="fa fa-calendar"></i> <?= Yii::$app->formatter->asDate($model->created_at, 'd.MM.yy') ?></div>
    <h4 class="item-card__title"><a href="<?= $model->getUrl() ?>"><?= Html::encode($model->title) ?></a></h4>
    <div>
        <p>Не пропустите две недели скидок для Вас, с 10 октября по 24 октября. Не упустите свой шанс, приобрести дом по скидке. Для того что бы оформить заказ, заполните форму ...</p>
    </div>
    <a class="item-card__more-link" href="<?= $model->getUrl() ?>">Читать все <i class="fa fa-angle-right"></i></a>
</div>
