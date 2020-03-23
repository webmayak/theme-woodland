<?php

use pantera\content\models\ContentPage;
use frontend\widgets\twigRender\TwigRender;
use yii\helpers\Html;
use yii\web\View;

$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['/stati']];
$this->params['breadcrumbs'][] = $model->title;

/* @var $this View */
/* @var $model ContentPage */
?>
<h1 class="title-home">
    <?= Yii::$app->seo->getH1() ?>
</h1>
<?php if ($model->body) : ?>
    <div class="editor-content">
        <?= TwigRender::widget([
            'text' => $model->body,
        ]) ?>
    </div>
<?php endif; ?>
