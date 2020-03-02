<?php

namespace frontend\themes\woodland\widgets\megaMenu;

use common\modules\catalog\models\CatalogCategory;

class MegaMenu extends \yii\base\Widget
{
    public function run()
    {
        parent::run();
        $catalogRoot = CatalogCategory::findOne(54);
        $servicesRoot = CatalogCategory::findOne(55);
        $calculatorRoot = CatalogCategory::findOne(78);
        return $this->render('index', [
            'catalogRoot' => $catalogRoot,
            'servicesRoot' => $servicesRoot,
            'calculatorRoot' => $calculatorRoot,
        ]);
    }
}
