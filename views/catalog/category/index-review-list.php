<?php

use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $links array */
?><main class="page-site-reviews__content">
    <h1><?= $this->title ?></h1>

    <?= \yii\widgets\ListView::widget([
        'dataProvider' => (new \pantera\content\models\ContentPageSearch())->search('reviews'),
        'itemView' => '@theme/views/_review_view',
        'itemOptions' => [
            'class' => 'review-item page-site-reviews__list-item',
        ],
        'layout' => '{items}',
    ]) ?>

    <?php if (0): ?>
    <div class="page-site-reviews__btn-wrap text-center">
        <button class="btn btn-lg btn-primary">Показать еще</button>
    </div>
    <?php endif; ?>
</main>

</div><!--закрываем .container -->

<?= LeadForm::widget([
    'mode' => LeadForm::MODE_INLINE,
    'key' => 'review',
]) ?>
