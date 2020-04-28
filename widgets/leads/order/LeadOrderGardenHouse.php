<?php

namespace frontend\themes\woodland\widgets\leads\order;

use pantera\leads\models\Lead;

class LeadOrderGardenHouse extends Lead
{
    public $name;
    public $phone;
    public $email;
    public $comment;

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['name', 'required'];
        $rules[] = ['phone', 'required'];
        $rules[] = ['email', 'required'];
        $rules[] = ['email', 'email'];
        $rules[] = ['comment', 'string'];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['name'] = 'ФИО';
        $labels['phone'] = 'Телефон';
        $labels['email'] = 'E-mail';
        $labels['comment'] = 'Комментарий';
        return $labels;
    }
}
