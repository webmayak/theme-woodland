<?php

use pantera\content\widgets\block\Block;

?>
<div class="video-block" id="video-block">
    <div class="container">
        <h2>Видео</h2>
        <?= Block::widget([
            'position' => 'front-video',
        ]) ?>
    </div>
</div>
