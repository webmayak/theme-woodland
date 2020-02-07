<?php

use pantera\reviews\widgets\form\ReviewForm;
use pantera\reviews\widgets\LatestReviews;
use pantera\reviews\widgets\ReviewsList;
use pantera\content\widgets\block\Block;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

$this->title = $model->name;

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => ['/shop/catalog/index']];
if ($model->category) {
    if ($parents = $model->category->parents) {
        foreach ($parents as $key => $parent) {
            if ($key == 0) continue;
            $this->params['breadcrumbs'][] = ['label' => $parent->name, 'url' => $parent->present()->getUrl()];
        }
    }
    $this->params['breadcrumbs'][] = ['label' => $model->category->name, 'url' => $model->category->present()->getUrl()];
}
$this->params['breadcrumbs'][] = $this->title;

/**
 * @var $model \common\modules\shop\models\ShopProduct
 */
?><div class="product-page">
    <div class="product-page__nav">
        <a href="#" class="btn btn-outline-success"><i class="fa fa-long-arrow-left mr-3"></i> Предыдущий проект</a>
        <h1><?= Html::encode($this->title) ?></h1>
        <a href="#" class="btn btn-outline-success">Следующий проект <i class="fa fa-long-arrow-right ml-3"></i></a>
    </div>
    <div class="row align-items-start">
        <div class="col-lg-8">
            <div class="product__gallery-carousel">
                <?php
                $attachments = $model->media
                    ? ArrayHelper::merge([$model->media], $model->attachments)
                    : $model->attachments;
                ?>
                <?php if ($attachments): ?>
                <?= \pantera\media\widgets\syncedOwls\SyncedOwls::widget([
                    'models' => $attachments,
                    'cropImages' => true,
                    'containerOptions' => [
                        'data' => [
                            'fancyboxoptions' => [
                                'thumbs' => [
                                    'axis' => 'y'
                                ],
                            ],
                            'thumbscarouseloptions' => [
                                'items' => '5',
                            ],
                            'maincarouseloptions' => [
                                'navText'=> [
                                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.175 477.175" width="71" height="71" fill="currentColor"><path d="M145.188 238.575l215.5-215.5c5.3-5.3 5.3-13.8 0-19.1s-13.8-5.3-19.1 0l-225.1 225.1c-5.3 5.3-5.3 13.8 0 19.1l225.1 225c2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4c5.3-5.3 5.3-13.8 0-19.1l-215.4-215.5z"/></svg>',
                                    '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477.175 477.175" width="71" height="71" fill="currentColor"><path d="M145.188 238.575l215.5-215.5c5.3-5.3 5.3-13.8 0-19.1s-13.8-5.3-19.1 0l-225.1 225.1c-5.3 5.3-5.3 13.8 0 19.1l225.1 225c2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4c5.3-5.3 5.3-13.8 0-19.1l-215.4-215.5z"/></svg>'
                                ],
                                'dots' => false,
                                'dotsContainer' => '.product__gallery-carouselDots'
                            ],
                        ]
                    ]
                ]); ?>
                <div class="product__gallery-carouselDots owl-dots"></div>
                <?php else: ?>
                    <img src="https://via.placeholder.com/700x400" alt="<?= Html::encode($model->name) ?>" class="img-fluid">
                <?php endif; ?>
            </div>
            <div class="product-page__sizes">
                <div class="product-page__sizes-title">Возможные размеры и сечения профилированного бруса</div>
                <div class="row">
                    <div class="col-sm-4 col-6">
                        <span class="product-page__size-item">
                            <img class="product-page__size-img" src="/images/size-1.png" alt="">
                            <span class="product-page__size-text">90×140 мм. <br>(Прямой)</span>
                        </span>
                    </div>
                    <div class="col-sm-4 col-6">
                        <span class="product-page__size-item">
                            <img class="product-page__size-img" src="/images/size-2.png" alt="">
                            <span class="product-page__size-text">90×140 мм. <br>(Овал)</span>
                        </span>
                    </div>
                    <div class="col-sm-4 col-6">
                        <span class="product-page__size-item">
                            <img class="product-page__size-img" src="/images/size-3.png" alt="">
                            <span class="product-page__size-text">140×140 мм. <br>(Прямой)</span>
                        </span>
                    </div>
                    <div class="col-sm-4 col-6">
                        <span class="product-page__size-item">
                            <img class="product-page__size-img" src="/images/size-4.png" alt="">
                            <span class="product-page__size-text">140×140 мм. <br>(Овал)</span>
                        </span>
                    </div>
                    <div class="col-sm-4 col-6">
                        <span class="product-page__size-item">
                            <img class="product-page__size-img" src="/images/size-5.png" alt="">
                            <span class="product-page__size-text">190×140 мм. <br>(Прямой)</span>
                        </span>
                    </div>
                    <div class="col-sm-4 col-6">
                        <span class="product-page__size-item">
                            <img class="product-page__size-img" src="/images/size-6.png" alt="">
                            <span class="product-page__size-text">190×140 мм. <br>(Овал)</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-page__sidebar">
                <?=\common\modules\shop\widgets\cart\addToCart\AddToCartWidget::widget([
                    'htmlOptions' => ['class' => 'product-page__order-btn btn btn-success btn-block text-uppercase'],
                    'content' => 'Заказать этот проект',
                    'model' => $model
                ]) ?>
                <?php if ($variants = $model->getVariants()->all()): ?>

                    <?php
                    $ID_PROFILE_SIZE  = 8;   // Сечение бруса
                    $ID_WALL_THICKNESS = 9;  // Толщина стены
                    $ID_PRICE = 10;          // Тип цены

                    $checkedFirst = false;

                    // подготовим данные
                    $variantsByPriceType = [];
                    foreach ($variants as $variant) {
                        $priceType = $variant->present()->getAttributeValue($ID_PRICE);
                        $variantsByPriceType[$priceType][] = $variant;
                    }
                    ?>

                    <?php foreach ($variantsByPriceType as $priceType => $variants) : ?>
                        <div class="product-page__sidebar-title">
                            <?php if ($priceType == 'Цена под ключ') : ?>
                                <img src="/images/icon-key.png" alt="">
                            <?php else: ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="#00bbdf" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-address"/>
                                </svg>
                            <?php endif; ?>
                            <?= Html::encode($priceType) ?>
                        </div>
                        <table class="product-page__sidebar-table product-table">
                        <?php foreach ($variants as $variant) : ?>
                            <tr>
                                <td>
                                    <img src="<?= $variant->media->image() ?>" alt="Сечение бруса <?= Html::encode($variant->present()->getAttributeValue($ID_PROFILE_SIZE)) ?>">
                                </td>
                                <td>
                                    <span class="product-table__size"><?= Html::encode($variant->present()->getAttributeValue($ID_PROFILE_SIZE)) ?></span><br>
                                    <span class="product-table__thickness">толщина стены: <?= Html::encode($variant->present()->getAttributeValue($ID_WALL_THICKNESS)) ?> мм</span>
                                </td>
                                <td>
                                    <label class="product-table__price-wrap">
                                        <input class="sr-only" type="radio" name="product_id" value="<?= $variant->id ?>"<?php if (!$checkedFirst) { echo ' checked'; $checkedFirst = true; } ?>>
                                        <span class="product-table__price"><?= number_format($variant->price, 0, ',', ' ') ?> руб.</span>
                                    </label>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </table>
                    <?php endforeach; ?>
                <?php endif; ?>
                
                <a class="product-page__same-link btn btn-outline-success btn-block" href="#">Этот же проект: Каркасный</a>
                <div class="product-page__sidebar-title">Характеристики</div>
                <ul class="product-page__params list-unstyled">
                    <?php if ($attributeValue = $model->present()->getAttributeValue(3)): ?>
                    <li class="product-page__param point-with-icon">
                        <div class="point-with-icon__icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-size"></use>
                            </svg>
                        </div>
                        <div class="point-with-icon__text">Размеры <?= $attributeValue ?></div>
                    </li>
                    <?php endif; ?>
                    <?php if ($attributeValue = $model->present()->getAttributeValue(5)): ?>
                    <li class="product-page__param point-with-icon">
                        <div class="point-with-icon__icon-wrap">
                            <img src="/images/four-squares-with-frame-shape.png" alt="">
                        </div>
                        <div class="point-with-icon__text">S застройки/общая: <?= $attributeValue ?></div>
                    </li>
                    <?php endif; ?>
                    <?php if ($attributeValue = $model->present()->getAttributeValue(1)): ?>
                    <li class="product-page__param point-with-icon">
                        <div class="point-with-icon__icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-address"></use>
                            </svg>
                        </div>
                        <div class="point-with-icon__text">Этажность: <?= $attributeValue ?></div>
                    </li>
                    <?php endif; ?>
                    <?php if ($attributeValue = $model->present()->getAttributeValue(2)): ?>
                    <li class="product-page__param point-with-icon">
                        <div class="point-with-icon__icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-bed"></use>
                            </svg>
                        </div>
                        <div class="point-with-icon__text">Комнат: <?= $attributeValue ?></div>
                    </li>
                    <?php endif; ?>
                    <?php if ($attributeValue = $model->present()->getAttributeValue(6)): ?>
                    <li class="product-page__param point-with-icon">
                        <div class="point-with-icon__icon-wrap">
                            <img src="/images/advantage-2.png" alt="">
                        </div>
                        <div class="point-with-icon__text">Технология: <?= $attributeValue ?></div>
                    </li>
                    <?php endif; ?>
                </ul>
                <div class="product-page__links">
                    <a href="#product-tab-7" class="product-page__view-all-link text-uppercase">Смотреть все</a><br>
                    <a href="#product-tab-1" class="product-page__view-set-link text-uppercase">Смотреть комплектацию</a><br>
                    <a href="#" class="product-page__delivery-link point-with-icon">
                        <div class="point-with-icon__icon-wrap">
                            <img src="/images/icon-delivery-truck.png" alt="">
                        </div>
                        <span class="point-with-icon__text">Доставка</span>
                    </a>
                    <a href="#" onclick="window.print()" class="product-page__print-link point-with-icon">
                        <div class="point-with-icon__icon-wrap">
                            <img src="/images/icon-printing-tool.png" alt="">
                        </div>
                        <span class="point-with-icon__text">Распечатать</span>
                    </a>
                    <div class="product-page__materials">Из чего строим: <a class="product-page__materials-link" href="#">Материалы</a></div>
                    <a href="#" class="product-page__calc-link btn btn-primary btn-block">
                        <img src="/images/icon-real-estate.png" alt="">
                        Расчет дома - калькулятор
                    </a>
                    <a href="#" class="product-page__calc-link btn btn-primary btn-block">
                        <img src="/images/icon-brick2gf.png" alt="">
                        Фундамент - калькулятор
                    </a>
                    <div class="product-page__share-title">Поделиться (сохранить проект)</div>
                    <ul class="product-page__share list-unstyled">
                        <li>
                            <a class="social-link social-link--vk" href="#" target="_blank">
                                <span class="sr-only">ВКонтакте</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-vk">
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="social-link social-link--fb" href="#" target="_blank">
                                <span class="sr-only">Facebook</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-fb">
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="social-link social-link--ok" href="#" target="_blank">
                                <span class="sr-only">OK</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-ok">
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="social-link social-link--tw" href="#" target="_blank">
                                <span class="sr-only">Twitter</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                                    <use xlink:href="/images/sprite.svg#icon-tw">
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12">
            <ul class="product-page__nav-tabs nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#product-tab-1">Комплектация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-tab-2">Доп. услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-tab-3">Как работаем</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-tab-4">В кредит</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-tab-5">Комментарии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-tab-6">Описание</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-tab-7">Характеристики</a>
                </li>
            </ul>
            <div class="product-page__tab-content tab-content">
                <div class="tab-pane fade show active" id="product-tab-1">
                    <div class="table-responsive">
                        <table>
                        <tr>
                            <th>Наименование</th>
                            <th>Описание</th>
                            <th colspan="3">Значение</th>
                        </tr>
                        <tr>
                            <td>Обвязка:</td>
                            <td>
                                2 нижних венца  из нестроганного бруса <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td>100×150</td>
                            <td>150×150</td>
                            <td>200×150</td>
                        </tr>
                        <tr>
                            <td>Каркас внешних цен:</td>
                            <td>
                                обрезная доска на гвозди, с шагом 60 см <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td>40×100</td>
                            <td>40×150</td>
                            <td>40×200</td>
                        </tr>
                        <tr>
                            <td>Цена:</td>
                            <td>
                                стоимость в базовой комплектации <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td>
                                <span class="text-success mb-2 d-inline-block">763 000</span><br>
                                <button class="btn btn-primary">Купить</button>
                            </td>
                            <td>
                                <span class="text-success mb-2 d-inline-block">891 000</span><br>
                                <button class="btn btn-primary">Купить</button>
                            </td>
                            <td>
                                <span class="text-success mb-2 d-inline-block">990 000</span><br>
                                <button class="btn btn-primary">Купить</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Каркас внутренних стен:</td>
                            <td>
                                обрезная доска на гвозди, с шагом 60 см <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Высота потолка:</td>
                            <td>
                                1-й этаж - 2.4 м., 2-й этаж - 2.3 м. <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Пол черновой:</td>
                            <td>
                                обрезная доска 100х22 мм <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Лаги:</td>
                            <td>
                                потолочные лаги, брус 150х50 мм <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Стропильная система:</td>
                            <td>
                                стропила из доски 40х100 мм. и 40х150 мм <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Обрешетка:</td>
                            <td>
                                доска обрезная 22 мм на 100 мм <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Кровля:</td>
                            <td>
                                ондулин (красный, зеленый) <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Утепление внешних стен:</td>
                            <td>
                                плитный утеплитель <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Утепление пола, перекрытий:</td>
                            <td>
                                минеральная вата Isover или URSA <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Парогидроизоляция:</td>
                            <td>
                                утепление Изоспан <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Чистовой пол:</td>
                            <td>
                                сухая половая доска 100 мм. на 36 мм <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Внутренняя отделка:</td>
                            <td>
                                вагонка камерной сушки 88х12.5 мм <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Внешняя отделка:</td>
                            <td>
                                вагонка естественной влажности 90 мм <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Входная дверь:</td>
                            <td>
                                металлическая 8 м. на 2 м <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Внутренние двери:</td>
                            <td>
                                деревянные без фурнитуры 8 м. на 2 м <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Углы внутренние:</td>
                            <td>
                                сухой плинтус <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Лестница:</td>
                            <td>
                                ступени половая доска 36 мм <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Окна:</td>
                            <td>
                                двойное остекление 1 м. на 1,2 м <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Наличники:</td>
                            <td>
                                камерная сушка 88 мм. на 12.5 мм <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                            <td><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td>Цена:</td>
                            <td>
                                стоимость дома под ключ <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td>
                                <span class="text-success mb-2 d-inline-block">790 000</span><br>
                                <button class="btn btn-primary">Купить</button>
                            </td>
                            <td>
                                <span class="text-success mb-2 d-inline-block">850 000</span><br>
                                <button class="btn btn-primary">Купить</button>
                            </td>
                            <td>
                                <span class="text-success mb-2 d-inline-block">940 000</span><br>
                                <button class="btn btn-primary">Купить</button>
                            </td>
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="product-tab-2">
                    <div class="table-responsive">
                        <table>
                        <tr>
                            <th>Услуга</th>
                            <th>Описание</th>
                            <th>Цена</th>
                        </tr>
                        <tr>
                            <td>Замена утеплителя Isover на Rockwool</td>
                            <td>
                                более качественный вариант утеплителя <br>
                                плитный Rockwool, доплата за вычетом Isover
                            </td>
                            <td>
                                50 мм.:   + 110 руб за м2 <br>
                                100 мм.: + 220 руб за м2 <br>
                                150 мм.: + 330 руб. за м2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Утепление внутренних стен <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td>
                                Isaover или аналог во внутренние перегородки. <br>
                                Возможно использование Rockwool
                            </td>
                            <td>
                                50 мм.: 90 руб за м2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Кровля из металлочерепицы <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td>
                                кровельный материал из тонколистовой стали <br>
                                с полимерным защитным слоем
                            </td>
                            <td>
                                460 за м2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Обрабработка антисептиком <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td>
                                огнебиозащита обвязки, лаг пола и потолка
                            </td>
                            <td>
                                380 руб./м2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Внутренняя отделка имитацией бруса <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td>
                                деревянный отделочный материал под брус, <br>
                                цена за вычетом вагонки
                            </td>
                            <td>
                                + 100 руб./м2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Внутренняя отделка блок-хаусом <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td>
                                деревянный отделочный материал под бревно, <br>
                                цена за вычетом вагонки
                            </td>
                            <td>
                                + 130 руб./м2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Внешняя отделка блок-хаусом <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td>
                                деревянный отделочный материал под бревно, <br>
                                цена за вычетом вагонки
                            </td>
                            <td>
                                + 130 руб./м2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Внешняя отделка сайдингом <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td>
                                виниловый отделочный материал, цена <br>
                                за вычетом вагонки
                            </td>
                            <td>
                                + 150 руб./м2
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Замена деревянных окон на ПВХ <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td>
                                сверхпрочные пластиковые окна двойного <br>
                                остекления, цена за вычетом деревянного окна
                            </td>
                            <td>
                                5200 руб./шт.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Водосточные трубы <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td>
                                желоба из ПВХ, алюминия или меди
                            </td>
                            <td>
                                требуется детальный расчет
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Строительная бытовка <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td>
                                необходима для проживания рабочей бригады <br>
                                и хозяйственных нужд, не требуется, если на участке
                            </td>
                            <td>
                                14000 руб.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Аренда генератора <br>
                                <a href="#">Посмотреть фото</a>
                            </td>
                            <td>
                                необходим если на участке нет электроэнергии, <br>
                                топливо не входит в стоимость
                            </td>
                            <td>
                                7000 руб.
                            </td>
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="product-tab-3">
                    <?= Block::widget([
                        'position' => 'product_tab_how_we_work',
                    ]) ?>
                </div>
                <div class="tab-pane fade" id="product-tab-4">
                    <?= Block::widget([
                        'position' => 'product_tab_credit',
                    ]) ?>
                    <div class="text-center">
                        <a class="product-page__credit-btn btn btn-primary" href="#"><?= Html::encode($model->name) ?> в кредит</a>
                    </div>
                    <div class="text-center">
                        <a href="#" class="product-page__credit-link text-uppercase">подробнее об условиях кредитования</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="product-tab-5">
                    <div class="comments">
                        <ul class="comments__list ul-reset">
                            <li class="comments__item comment-item">
                                <div class="comment-item__header">
                                    <span class="comment-item__author">Татьяна Косенко</span>
                                    <span class="comment-item__rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="comment-item__date"><i class="fa fa-clock-o"></i> 07.10.19</span>
                                </div>
                                <div class="comment-item__title">Комментарий</div>
                                <div class="comment-item__content">
                                    <p>Понравился этот дом. Сколько займет по времени строительство такого дома?</p>
                                </div>
                                <ul class="comment-item__replies-list ul-reset">
                                    <li class="comment-item__reply">
                                        <div class="comment-item__title">Фортуна</div>
                                        <div class="comment-item__reply-content">
                                            <p>Рады приветствовать вас. Строительство такого дома занимает 20–25 дней.</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="comments__item comment-item">
                                <div class="comment-item__header">
                                    <span class="comment-item__author">Татьяна Косенко</span>
                                    <span class="comment-item__rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="comment-item__date"><i class="fa fa-clock-o"></i> 07.10.19</span>
                                </div>
                                <div class="comment-item__title">Комментарий</div>
                                <div class="comment-item__content">
                                    <p>Понравился этот дом. Сколько займет по времени строительство такого дома?</p>
                                </div>
                                <ul class="comment-item__replies-list ul-reset">
                                    <li class="comment-item__reply">
                                        <div class="comment-item__title">Фортуна</div>
                                        <div class="comment-item__reply-content">
                                            <p>Рады приветствовать вас. Строительство такого дома занимает 20–25 дней.</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="comments__item comment-item">
                                <div class="comment-item__header">
                                    <span class="comment-item__author">Татьяна Косенко</span>
                                    <span class="comment-item__rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="comment-item__date"><i class="fa fa-clock-o"></i> 07.10.19</span>
                                </div>
                                <div class="comment-item__title">Комментарий</div>
                                <div class="comment-item__content">
                                    <p>Понравился этот дом. Сколько займет по времени строительство такого дома?</p>
                                </div>
                                <ul class="comment-item__replies-list ul-reset">
                                    <li class="comment-item__reply">
                                        <div class="comment-item__title">Фортуна</div>
                                        <div class="comment-item__reply-content">
                                            <p>Рады приветствовать вас. Строительство такого дома занимает 20–25 дней.</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="product-tab-6">
                    <?= $model->full_description ?>
                </div>
                <div class="tab-pane fade" id="product-tab-7">
                    <div class="table-responsive">
                        <table>
                        <tr>
                            <th>Наименование</th>
                            <th>Материал</th>
                        </tr>
                        <?php foreach ($model->present()->getAttributesList() as $name => $value) : ?>
                            <tr>
                                <td><?= $name ?></td>
                                <td><?= $value ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
