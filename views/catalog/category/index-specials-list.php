<?php

use common\modules\catalog\models\CatalogCategory;
use frontend\themes\woodland\widgets\specialsList\SpecialsList;
use yii\web\View;

$specials = $model->childrenActive;
$activeSpecials = [];
$closedSpecials = [];

foreach ($specials as $special) {
    if ($special->present()->getAttributeValueByKey('is_closed')) {
        $closedSpecials[] = $special;
    } else {
        $activeSpecials[] = $special;
    }
}

/* @var $this View */
/* @var $model CatalogCategory */
/* @var $hasMedia bool */
?><main class="page-specials__content">

    <h1><?= Yii::$app->seo->getH1() ?></h1>

    <?php if ($activeSpecials) : ?>
        <?= SpecialsList::widget([
            'models' => $activeSpecials,
        ]) ?>
    <?php endif; ?>

    <?php if ($closedSpecials) : ?>
        <h2 class="mt-5">Завершенные акции</h2>
        <?= SpecialsList::widget([
            'models' => $closedSpecials,
        ]) ?>
    <?php endif; ?>
</main>
