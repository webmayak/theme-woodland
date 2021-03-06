<?php

namespace frontend\themes\woodland\widgets\prevNextProject;

use common\modules\shop\models\ShopProduct;
use yii\helpers\Html;
use yii\base\Widget;

/**
 * @var ShopProduct model
 */
class NextProjectLink extends Widget
{
    public $model;
    
    /* @var string */
    public $text = 'Следующий';

    public function run()
    {
        $project = $this->model;

        $query = ShopProduct::find();
        $query->andWhere(['=', 'category_id', $project->category_id]);
        $query->andWhere(['IS', 'parent_id', null]);
        $query->andWhere(['>', 'id', $project->id]);
        $query->orderBy(['id' => SORT_ASC]);
        $nextProject = $query->one();
        
        if (!$nextProject) {
            $query = ShopProduct::find();
            $query->andWhere(['=', 'category_id', $project->category_id]);
            $query->andWhere(['IS', 'parent_id', null]);
            $query->andWhere(['<>', 'id', $project->id]);
            $query->orderBy(['id' => SORT_ASC]);
            $nextProject = $query->one();
        }

        if ($nextProject) {
            return Html::a(
                $this->text,
                $nextProject->present()->getUrl(),
                ['class' => 'btn btn-outline-success']
            );
        }
    }
}
