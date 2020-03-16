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
    /* var string */
    public $layout = '{items}';

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
            ['linkSelector' => '.show-more a, a[data-pjax="1"]'],
            ['timeout' => 3000]
        );
        $content = strtr($this->layout, [
            '{items}' => ProductsList::widget($listOptions),
        ]);
        return $this->render('pjax_list', [
            'content' => $content,
            'pjaxOptions' => $pjaxOptions,
        ]);
    }

    private function registerJs()
    {
        $js = '$(document).on(\'pjax:start\', function(event) {$(\'.products-list\').css({opacity: .5});});';
        $this->view->registerJs($js, View::POS_END);
    }
}
