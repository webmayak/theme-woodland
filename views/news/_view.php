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

$body = trim(strip_tags($model->body));
$body = trim(str_replace('&nbsp;', '', $body));

/* @var $this View */
/* @var $model ContentPage */
?><div class="news-item">
    <h4 class="news-item__title"><a href="<?= $model->getUrl() ?>"><?= Html::encode($model->title) ?></a></h4>
    <a class="news-item__img-link" href="<?= $model->getUrl() ?>">
      <?php
        if ($model->media && $model->media->issetMedia()) {
            $img = $model->media->image(310, 200, false);
            echo Html::img($img, [
                'class' => 'news-item__img',
            ]);
        } ?>
    </a>
    <div class="news-item__date"><i class="fa fa-calendar"></i> <?= Yii::$app->formatter->asDate($model->created_at, 'd.MM.yy') ?></div>
</div>
