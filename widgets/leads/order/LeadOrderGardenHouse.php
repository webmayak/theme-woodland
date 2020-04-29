<?php

namespace frontend\themes\woodland\widgets\leads\order;

use pantera\leads\models\Lead;

class LeadOrderGardenHouse extends Lead
{
    public $equipment;
    public $painting;
    public $roofColor;
    public $city;
    public $street;
    public $house;
    public $date;
    public $name;
    public $phone;
    public $email;

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['equipment', 'required'];
        $rules[] = ['painting', 'required'];
        $rules[] = ['roofColor', 'required'];
        $rules[] = ['city', 'required'];
        $rules[] = ['street', 'required'];
        $rules[] = ['house', 'required'];
        $rules[] = ['date', 'required'];
        $rules[] = ['name', 'required'];
        $rules[] = ['phone', 'required'];
        $rules[] = ['email', 'required'];
        $rules[] = ['email', 'email'];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['equipment'] = 'Комплектация';
        $labels['painting'] = 'Покраска';
        $labels['roofColor'] = 'Цвет кровли';
        $labels['city'] = 'Населенный пункт';
        $labels['street'] = 'Улица';
        $labels['house'] = 'Номер дома';
        $labels['date'] = 'Желаемая дата доставки';
        $labels['name'] = 'ФИО';
        $labels['phone'] = 'Телефон';
        $labels['email'] = 'Email';
        return $labels;
    }
}
