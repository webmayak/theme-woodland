<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/10/18
 * Time: 2:37 PM
 */

namespace frontend\widgets\leads\request;

use common\modules\catalog\models\CatalogCategory;
use pantera\leads\models\Lead;
use yii\helpers\ArrayHelper;

class LeadRequest extends Lead
{
    public $name;
    public $phone;
    public $comment;
    public $date;
    public $time;
    public $affiliate;
    public $categoryLevel1;
    public $categoryLevel2;

    public function getTime()
    {
        return [
            '09:00' => '09:00',
            '09:15' => '09:15',
            '09:30' => '09:30',
            '09:45' => '09:45',
            '10:00' => '10:00',
            '10:15' => '10:15',
            '10:30' => '10:30',
            '10:45' => '10:45',
            '11:00' => '11:00',
            '11:15' => '11:15',
            '11:30' => '11:30',
            '11:45' => '11:45',
            '12:00' => '12:00',
            '12:15' => '12:15',
            '12:30' => '12:30',
            '12:45' => '12:45',
            '13:00' => '13:00',
            '13:15' => '13:15',
            '13:30' => '13:30',
            '13:45' => '13:45',
            '14:00' => '14:00',
            '14:15' => '14:15',
            '14:30' => '14:30',
            '14:45' => '14:45',
            '15:00' => '15:00',
            '15:15' => '15:15',
            '15:30' => '15:30',
            '15:45' => '15:45',
            '16:00' => '16:00',
            '16:15' => '16:15',
            '16:30' => '16:30',
            '16:45' => '16:45',
            '17:00' => '17:00',
            '17:15' => '17:15',
            '17:30' => '17:30',
            '17:45' => '17:45',
            '18:00' => '18:00',
            '18:15' => '18:15',
            '18:30' => '18:30',
            '18:45' => '18:45',
            '19:00' => '19:00',
            '19:15' => '19:15',
            '19:30' => '19:30',
            '19:45' => '19:45',
            '20:00' => '20:00',
            '20:15' => '20:15',
            '20:30' => '20:30',
        ];
    }

    public function getCategoryLevel1()
    {
        $category = CatalogCategory::findOne(54);
        return ArrayHelper::map($category->children, 'name', 'name');
    }

    public function getAffiliates()
    {
        $affiliates = CatalogCategory::find()
            ->joinWith(['type'])
            ->andWhere(['=', 'key', 'affiliate'])
            ->all();
        return ArrayHelper::map($affiliates, 'name', 'name');
    }

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['name', 'required'];
        $rules[] = ['phone', 'required'];
        $rules[] = ['comment', 'required'];
        $rules[] = ['date', 'safe'];
        $rules[] = ['time', 'safe'];
        $rules[] = ['affiliate', 'safe'];
        $rules[] = ['categoryLevel1', 'safe'];
        $rules[] = ['categoryLevel2', 'safe'];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['name'] = 'Имя';
        $labels['phone'] = 'Телефон';
        $labels['comment'] = 'Комментарий';
        $labels['date'] = 'Дата';
        $labels['time'] = 'Время';
        $labels['affiliate'] = 'Филиал';
        $labels['categoryLevel1'] = 'Каталог';
        $labels['categoryLevel2'] = 'Процедура';
        return $labels;
    }
}
