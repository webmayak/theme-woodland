<?php

namespace frontend\themes\woodland\widgets\megaMenu;

use yii\base\Widget;

class MegaMenu extends Widget
{
    public function run()
    {
        parent::run();
        return $this->render('index');
    }
}
