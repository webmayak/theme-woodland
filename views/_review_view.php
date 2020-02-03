<?php

    use yii\helpers\Html;

?>

<div class="review-item__name"><?= Html::encode($model->title) ?></div>
<div class="review-item__date"><i class="fa fa-clock-o"></i> <?= Yii::$app->formatter->asDate($model->created_at, 'dd.MM.yy') ?></div>
<div class="review-item__text">
    <?= $model->body ?>
</div>
