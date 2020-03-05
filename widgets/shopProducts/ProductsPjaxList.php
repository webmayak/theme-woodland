<?php

namespace frontend\themes\woodland\widgets\shopProducts;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\web\View;
use Yii;

/**
 * Виджет списка товаров в Pjax
 */
class ProductsPjaxList extends Widget
{
    /* var array */
    public $listOptions;

    /* var array */
    public $pjaxOptions;

    public function run()
    {
        parent::run();
        $this->registerJs();
        $listOptions = ArrayHelper::merge(
            $this->listOptions,
            ['showMoreButton' => true]
        );
        $pjaxOptions = ArrayHelper::merge(
            $this->pjaxOptions,
            ['id' => 'products-list-pjax'],
            ['linkSelector' => '.show-more a']
        );
        return $this->render('pjax_list', [
            'listOptions' => $listOptions,
            'pjaxOptions' => $pjaxOptions,
        ]);
    }

    private function registerJs()
    {
        $js = '$(document).on(\'pjax:start\', function(event) {$(\'.products-list\').css({opacity: .5});});';
        $this->view->registerJs($js, View::POS_END);
    }
}
