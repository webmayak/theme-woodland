<?php

namespace frontend\themes\woodland\widgets\shopCategories;

use yii\base\Widget;
use common\modules\shop\models\ShopCategory;

class Categories extends Widget
{
    /* @var int|array|null */
    public $ids;

    public function run()
    {
        if ($this->ids) {
            $categories = ShopCategory::find()
                ->andWhere(['status' => 1, 'id' => $this->ids])
                ->all();
        } elseif ($catalogRoot = ShopCategory::findOne(1)) {
            $categories = $catalogRoot
                ->getChildren()
                ->andWhere(['status' => 1])
                ->all();
        }
        if (!empty($categories)) {
            return $this->render('index', [
                'categories' => $categories,
            ]);
        }
    }
}
