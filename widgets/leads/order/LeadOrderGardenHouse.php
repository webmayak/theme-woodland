<?php

namespace frontend\themes\woodland\widgets\leads\order;

use pantera\leads\models\Lead;
use common\modules\shop\models\ShopProduct;
use pantera\seo\models\SeoSlug;
use Yii;

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

    /**
     * Получаем товар
     */
    public function getProduct()
    {
        $referrer = parse_url(Yii::$app->request->referrer);
        $slug = trim($referrer['path'], '/');
        $referrerSeoSlug = SeoSlug::find()
            ->andWhere(['slug' => $slug])
            ->orderBy(['id' => SORT_DESC])
            ->one();
        return ShopProduct::findOne($referrerSeoSlug->model_id);
    }

    /**
     * Получаем массив вариантов комплектации из атрибутов товара
     */
    public function getAvailableEquipment()
    {
        $product = $this->getProduct();
        $priceTypes = [];
        if ($variants = $product->getVariants()->all()) {
            usort($variants, function ($a, $b) {
                return $a['price'] <=> $b['price'];
            });

            foreach ($variants as $variant) {
                $priceTypes[] = $variant->present()->getAttributeValue(10);
            }
        }
        return array_combine($priceTypes, $priceTypes);
    }

    /**
     * Получаем массив цветов покраски из настроек
     */
    public function getAvailablePainting()
    {
        $painting = preg_split(
            '/\n+/',
            Yii::$app->settings->get('gardenhouse_painting', 'default')
        );
        return array_combine($painting, $painting);
    }

    /**
     * Получаем массив цветов кровли из настроек
     */
    public function getAvailableRoofColors()
    {
        $roofColors = preg_split(
            '/\n+/',
            Yii::$app->settings->get('gardenhouse_roof_color', 'default')
        );
        return array_combine($roofColors, $roofColors);
    }
}
