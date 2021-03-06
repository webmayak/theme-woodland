<?php

use frontend\themes\woodland\widgets\prevNextProject\{PrevProjectLink, NextProjectLink};
use frontend\themes\woodland\widgets\shopProducts\ProductsCarousel;
use common\modules\shop\models\ShopProduct;
use common\modules\shop\widgets\cart\addToCart\AddToCartWidget;
use pantera\content\widgets\block\Block;
use pantera\leads\widgets\form\LeadForm;
use pantera\media\widgets\syncedOwls\SyncedOwls;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$productIsProject = !in_array($model->product_type_id, [4, 11]);
$isHouseOrBath = in_array($model->product_type_id, [1, 2, 3, 5, 6, 7, 9, 10, 12, 25, 26]);
$isHouse = preg_match('/dom/', Yii::$app->request->pathInfo);
$GARDEN_HOUSE = 13;

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
 * @var $model ShopProduct
 */
?><div class="product-page">
    <div class="product-page__nav">
        <?php if ($productIsProject) : ?>
            <?= PrevProjectLink::widget(['model' => $model, 'text' => '<i class="fa fa-long-arrow-left mr-3"></i> Предыдущий проект']) ?>
        <?php endif; ?>
        <h1><?= Html::encode($this->title) ?></h1>
        <?php if ($productIsProject) : ?>
            <?= NextProjectLink::widget(['model' => $model, 'text' => 'Следующий проект <i class="fa fa-long-arrow-right ml-3"></i>']) ?>
        <?php endif; ?>
    </div>
    <div class="row align-items-start">
        <div class="col-lg-8">
            <div class="product__gallery-carousel">
                <?php
                $labelStart = '<div class="product-card__label product-card__label--';
                $labelMiddle = '"><div>';
                $labelEnd = '</div></div>';
                if($model->isInSegment('discount')) echo $labelStart .'discount' . $labelMiddle . 'скидка' . $labelEnd;
                if($model->isInSegment('best-price')) echo $labelStart .'best-price' . $labelMiddle . 'лучшая цена' . $labelEnd;
                if($model->isInSegment('present')) echo $labelStart .'present' . $labelMiddle . 'подарок' . $labelEnd;
                if($model->isInSegment('bestseller')) echo $labelStart .'bestseller' . $labelMiddle . 'хит продаж' . $labelEnd;
                if($model->isInSegment('new')) echo $labelStart .'new' . $labelMiddle . 'новинка' . $labelEnd;
                ?>
                <?php
                $attachments = $model->media
                    ? ArrayHelper::merge([$model->media], $model->attachments)
                    : $model->attachments;
                ?>
                <?php if ($attachments): ?>
                <?= SyncedOwls::widget([
                    'models' => $attachments,
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
            <?php if ($model->possible_sizes) : ?>
                <div class="product-page__sizes" id="materials">
                    <div class="product-page__sizes-title">Возможные размеры и сечения профилированного бруса</div>
                    <div class="table-responsive">
                        <?= $model->possible_sizes ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-lg-4">
            <div class="product-page__sidebar">

                <?php if (!$productIsProject) : ?>
                    <div class="text-center mb-4" style="font-size: 22px; font-weight: bold;">
                        Цена:
                        <span class="position-relative">
                            <?php if ($model->default_price > $model->price): ?>
                                <del style="position: absolute; bottom: 100%; white-space: nowrap; font-size: 16px; font-weight: normal; opacity: 0.7;">
                                    <?= Yii::$app->formatter->asCurrency($model->default_price) ?>
                                </del>
                            <?php endif; ?>
                            <?= Yii::$app->formatter->asCurrency($model->price) ?>
                        </span>
                    </div>
                    <?= AddToCartWidget::widget([
                        'htmlOptions' => ['class' => 'btn btn-success btn-block product-page__order-btn text-uppercase'],
                        'content' => 'Купить '
                            . '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">'
                                . '<use xlink:href="/images/sprite.svg#icon-cart"/>'
                            . '</svg>',
                        'model' => $model
                    ]) ?>
                <?php else : ?>
                    <?= LeadForm::widget([
                        'key' => 'orderProject',
                        'text' => 'Заказать этот проект',
                        'options' => [
                            'class' => 'btn btn-success btn-block product-page__order-btn text-uppercase',
                        ],
                    ]) ?>
                    <?php if ($model->product_type_id === $GARDEN_HOUSE) : ?>
                        <?= LeadForm::widget([
                            'key' => 'orderGardenHouse',
                            'text' => 'Онлайн заказ',
                            'options' => [
                                'class' => 'btn btn-primary btn-block text-uppercase product-page__online-order',
                            ],
                        ]) ?>
                    <?php endif; ?>
                <?php endif; ?>                

                <?php if ($productIsProject) : ?>

                    <?php if ($variants = $model->getVariants()->all()): ?>
                        <?php
                        $ID_PROFILE_SIZE  = 8;   // Сечение бруса
                        $ID_VARIANT_TYPE = 9;  // Вид
                        $ID_PRICE = 10;          // Тип цены

                        $checkedFirst = false;

                        // подготовим данные
                        $variantsByPriceType = [];

                        usort($variants, function($a, $b) {
                            return $a['price'] <=> $b['price'];
                        });

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
                                        <?php if ($variant->media): ?>
                                        <img src="<?= $variant->media->image() ?>" alt="Сечение бруса <?= Html::encode($variant->present()->getAttributeValue($ID_PROFILE_SIZE)) ?>">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <span class="product-table__size"><?= Html::encode($variant->present()->getAttributeValue($ID_PROFILE_SIZE)) ?></span><br>
                                        <span class="product-table__thickness">вид: <?= Html::encode($variant->present()->getAttributeValue($ID_VARIANT_TYPE)) ?></span>
                                    </td>
                                    <td>
                                        <?php if ($variant->default_price > $variant->price): ?>
                                            <del class="product-table__old-price">
                                                <?= Yii::$app->formatter->asCurrency($variant->default_price) ?>
                                            </del>
                                        <?php endif; ?>
                                        <label class="product-table__price-wrap">
                                            <input class="sr-only" type="radio" name="product_id" value="<?= $variant->id ?>"<?php if (!$checkedFirst) { echo ' checked'; $checkedFirst = true; } ?>>
                                            <span class="product-table__price"><?= Yii::$app->formatter->asCurrency($variant->price) ?></span>
                                        </label>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </table>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    
                    <?php if ($model->similar_product_link) : ?>
                        <div class="product-page__similar-product">
                            <?= $model->similar_product_link ?>
                        </div>
                    <?php endif; ?>

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
                        <?php if ($model->equipment) : ?>
                            <a href="#product-tab-1" class="product-page__view-set-link text-uppercase">Смотреть комплектацию</a><br>
                        <?php endif; ?>
                        <?php if ($isHouseOrBath && ($delivery_tooltip = Yii::$app->settings->get('default.delivery_tooltip'))) : ?>
                        <div class="product-page__delivery-link point-with-icon">
                            <div class="point-with-icon__icon-wrap">
                                <img src="/images/icon-delivery-truck.png" alt="">
                            </div>
                            <span class="point-with-icon__text">
                                Доставка
                                <i class="fa fa-question-circle-o text-primary" data-toggle="tooltip" data-placement="top" title="<?= Html::encode($delivery_tooltip) ?>"></i>
                            </span>
                        </div>
                        <?php endif; ?>
                        <a onclick="window.print()" class="product-page__print-link point-with-icon" style="cursor: pointer;">
                            <div class="point-with-icon__icon-wrap">
                                <img src="/images/icon-printing-tool.png" alt="">
                            </div>
                            <span class="point-with-icon__text">Распечатать</span>
                        </a>
                        <?php if ($model->possible_sizes) : ?>
                            <div class="product-page__materials">Из чего строим: <a class="product-page__materials-link" href="#materials">Материалы</a></div>
                        <?php endif; ?>
                        <?php if (0) : ?>
                        <a href="#" class="product-page__calc-link btn btn-primary btn-block">
                            <img src="/images/icon-real-estate.png" alt="">
                            Расчет дома - калькулятор
                        </a>
                        <a href="#" class="product-page__calc-link btn btn-primary btn-block">
                            <img src="/images/icon-brick2gf.png" alt="">
                            Фундамент - калькулятор
                        </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="product-page__links">
                    <div class="product-page__share-title">Поделиться ссылкой (сохранить<?php if ($productIsProject) : ?> проект<?php endif; ?>)</div>
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
                    <a class="nav-link" data-toggle="tab" href="#product-tab-6">Описание</a>
                </li>
                <?php if ($model->equipment) : ?>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#product-tab-1">Комплектация</a>
                    </li>
                <?php endif; ?>
                <?php if ($model->additional_services) : ?>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#product-tab-2">Доп. услуги</a>
                    </li>
                <?php endif; ?>
                <?php if ($isHouse) : ?>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#product-tab-3">Как работаем</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-tab-4">В кредит</a>
                </li>
                <?php if (0) : ?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-tab-5">Комментарии</a>
                </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#product-tab-7">Характеристики</a>
                </li>
            </ul>
            <div class="product-page__tab-content tab-content">
                <?php if ($model->equipment) : ?>
                    <div class="tab-pane fade" id="product-tab-1">
                        <div class="table-responsive">
                            <?= $model->equipment ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($model->additional_services) : ?>
                    <div class="tab-pane fade" id="product-tab-2">
                        <div class="table-responsive">
                            <?= $model->additional_services ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($isHouse) : ?>
                    <div class="tab-pane fade" id="product-tab-3">
                        <?= Block::widget([
                            'position' => 'product_tab_how_we_work',
                        ]) ?>
                    </div>
                <?php endif; ?>
                <div class="tab-pane fade" id="product-tab-4">
                    <?= Block::widget([
                        'position' => 'product_tab_credit',
                    ]) ?>
                    <?php if (0) : ?>
                    <div class="text-center">
                        <a class="product-page__credit-btn btn btn-primary" href="#"><?= Html::encode($model->name) ?> в кредит</a>
                    </div>
                    <div class="text-center">
                        <a href="#" class="product-page__credit-link text-uppercase">подробнее об условиях кредитования</a>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if (0) : ?>
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
                <?php endif; ?>
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

<?php if ($model->smilar_products && ($similarProductIds = explode(',', $model->smilar_products))) : ?>
<div class="projects" style="margin-top: -60px;">
    <div class="container">
        <h2>Похожие проекты</h2>
        <?= ProductsCarousel::widget([
            'dataProvider' => new ActiveDataProvider([
                'query' => ShopProduct::find()->andWhere(['id' => $similarProductIds]),
                'pagination' => false,
            ]),
        ]) ?>
    </div>
</div>
<?php endif; ?>
