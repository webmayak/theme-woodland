<?php

namespace frontend\themes\woodland\widgets\leads\order;

use pantera\leads\models\Lead;

class LeadSmallOrder extends Lead
{
    public $name;
    public $phone;
    public $detail;

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['name', 'required'];
        $rules[] = ['phone', 'required'];
        $rules[] = ['detail', 'string'];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['name'] = 'Ваше имя';
        $labels['phone'] = 'Ваш номер телефона';
        $labels['detail'] = 'Детали заказа';
        return $labels;
    }
}
