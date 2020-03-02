<?php

namespace frontend\themes\woodland\widgets\leads\review;

use pantera\leads\models\Lead;

class LeadReview extends Lead
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
        $rules[] = ['comment', 'required'];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels['name'] = 'Ваше имя';
        $labels['phone'] = 'Ваш номер телефона';
        $labels['email'] = 'Ваш Email';
        $labels['comment'] = 'Ваш комментарий';
        return $labels;
    }
}
