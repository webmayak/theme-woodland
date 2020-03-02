<?php

use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $links array */
$this->title = 'Документы';

?><main class="page-site-docs__content">
    <h1><?= $this->title ?></h1>

    <?= \yii\widgets\ListView::widget([
        'dataProvider' => (new \pantera\content\models\ContentPageSearch())->search('docs'),
        'itemView' => '@theme/views/_doc_view',
        'itemOptions' => [
            'class' => 'page-site-docs__item doc-item',
        ],
        'layout' => '{items}',
    ]) ?>
</main>

</div><!-- закрываем .container -->

<?= LeadForm::widget([
    'mode' => LeadForm::MODE_INLINE,
    'key' => 'question',
]) ?>

<div class="container"><!-- открываем .container -->
