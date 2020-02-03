<?php

use yii\helpers\Html;

?><div class="works">
    <div class="container">
        <h2>Наши выполненные работы</h2>
        <?php if (!empty($model) && !empty($model->media) && is_array($model->media)): ?>
        <div class="works__carousel owl-carousel">
            <?php foreach ($model->media as $index => $media): ?>
            <a class="works__item gallery-link" href="<?= $media->image() ?>" data-fancybox="works">
                <img src="<?= $media->image(255, 255, false) ?>" alt="<?= Html::encode($model->name) . ' - фото ' . ($index+1)  ?>">
            </a>
        <?php endforeach; ?>
        </div>
        <?php else: ?>
        <p>Нет элементов для отображения.</p>
        <?php endif; ?>
    </div>
</div>
