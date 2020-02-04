<?php

use pantera\content\widgets\block\Block;

?>
<div class="works-map">
    <div class="container">
        <h2>Карта выполненных объектов</h2>
    </div>
    <div class="works-map__map-wrap">
        <?= Block::widget([
            'position' => 'front-map',
        ]) ?>
    </div>
</div>
