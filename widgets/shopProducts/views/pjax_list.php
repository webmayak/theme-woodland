<?php

use yii\widgets\Pjax;
use frontend\themes\woodland\widgets\shopProducts\ProductsList;

?>

<?php Pjax::begin($pjaxOptions) ?>
<?= ProductsList::widget($listOptions) ?>
<?php Pjax::end() ?>
