<?php

namespace frontend\themes\woodland\widgets\leads\project;

use pantera\leads\models\Lead;

class LeadOrderProject extends Lead
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
        $rules[] = ['email', 'email'];
        $rules[] = ['comment', 'string'];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['name'] = 'Имя';
        $labels['phone'] = 'Телефон';
        $labels['email'] = 'Email';
        $labels['comment'] = 'Комментарий';
        return $labels;
    }
}
