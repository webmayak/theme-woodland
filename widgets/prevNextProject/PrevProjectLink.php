<?php

namespace frontend\themes\woodland\widgets\prevNextProject;

use common\modules\shop\models\ShopProduct;
use yii\helpers\Html;
use yii\base\Widget;

/**
 * @var ShopProduct model
 */
class PrevProjectLink extends Widget
{
    public $model;

    /* @var string */
    public $text = 'Предыдущий';

    public function run()
    {
        $project = $this->model;

        $query = ShopProduct::find();
        $query->andWhere(['=', 'category_id', $project->category_id]);
        $query->andWhere(['IS', 'parent_id', null]);
        $query->andWhere(['<', 'id', $project->id]);
        $query->orderBy(['id' => SORT_DESC]);
        $prevProject = $query->one();

        if (!$prevProject) {
            $query = ShopProduct::find();
            $query->andWhere(['=', 'category_id', $project->category_id]);
            $query->andWhere(['IS', 'parent_id', null]);
            $query->andWhere(['<>', 'id', $project->id]);
            $query->orderBy(['id' => SORT_DESC]);
            $prevProject = $query->one();
        }

        if ($prevProject) {
            return Html::a(
                $this->text,
                $prevProject->present()->getUrl(),
                ['class' => 'btn btn-outline-success']
            );
        }
    }
}
