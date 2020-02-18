<?php

namespace frontend\themes\woodland\widgets\calculators;

use yii\base\Widget;

class BaseCalc extends Widget
{
    public function run()
    {
        return $this->render('base');
    }
}
