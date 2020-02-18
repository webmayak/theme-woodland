<?php

use frontend\themes\woodland\widgets\videoList\VideoList;
use common\modules\catalog\models\CatalogCategory;
use yii\web\View;

/* @var $this View */
/* @var $model CatalogCategory */
?>
<h1><?= Yii::$app->seo->getH1() ?></h1>
<?php if ($model->description) : ?>
    <div class="editor-content">
        <?= $model->description ?>
    </div>
<?php endif; ?>

<?= VideoList::widget() ?>
