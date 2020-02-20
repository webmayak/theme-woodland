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

    public function run()
    {
        $project = $this->model;

        $query = ShopProduct::find();
        $query->andWhere(['=', 'category_id', $project->category_id]);
        $query->andWhere(['<', 'id', $project->id]);
        $query->orderBy(['id' => SORT_DESC]);
        $prevProject = $query->one();

        if (!$prevProject) {
            $query = ShopProduct::find();
            $query->andWhere(['=', 'category_id', $project->category_id]);
            $query->andWhere(['<>', 'id', $project->id]);
            $query->orderBy(['id' => SORT_DESC]);
            $prevProject = $query->one();
        }

        if ($prevProject) {
            return Html::a(
                '<i class="fa fa-long-arrow-left mr-3"></i> Предыдущий проект',
                $prevProject->present()->getUrl(),
                ['class' => 'btn btn-outline-success']
            );
        }
    }
}
