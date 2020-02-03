<?php

use yii\helpers\Html;

?>
<?php if ($model->media && $model->media->issetMedia()): ?>
<a href="<?= $model->media->getUrl() ?>" class="doc-item__link btn btn-primary" download>Скачать</a>
<?php endif; ?>
<span class="doc-item__icon-wrap">
    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="37" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
        <use xlink:href="/images/sprite.svg#icon-file"/>
    </svg>
</span>
<span class="doc-item__title"><?= Html::encode($model->title) ?></span>
