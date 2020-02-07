<?php

use pantera\content\widgets\block\Block;
use pantera\reviews\widgets\LatestReviews;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

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
            <?php
            if ($model->possible_sizes) {
                echo $model->possible_sizes;
            }
            ?>
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
                    $productTypes = [];
                    $productVariantsByType = [];
                    $checkedFirst = false;
                    foreach ($variants as $variant) {
                        // тут храним типы
                        $productTypes[$variant->productType->id] = $variant->productType;
                        // тут храним варианты товаров для кажого типа
                        $productVariantsByType[$variant->productType->id][] = $variant;
                    }
                    ?>

                    <?php foreach ($productVariantsByType as $type_id => $variants): ?>
                        <div class="product-page__sidebar-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="#00bbdf" aria-hidden="true" role="presentation" focusable="false">
                                <use xlink:href="/images/sprite.svg#icon-address"/>
                            </svg>
                            <?= $productTypes[$type_id]->name ?>
                        </div>
                        <table class="product-page__sidebar-table product-table">
                        <?php foreach ($variants as $variant) : ?>
                            <tr>
                                <td>
                                    <img src="<?= $variant->media->image() ?>" alt="Сечение бруса <?= $variant->present()->getAttributeValue(8) ?>">
                                </td>
                                <td>
                                    <span class="product-table__size"><?= $variant->present()->getAttributeValue(8) ?></span><br>
                                    <span class="product-table__thickness">толщина стены: <?= $variant->present()->getAttributeValue(9) ?> мм</span>
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

                <?php if (0): ?>
                <div class="product-page__sidebar-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="#00bbdf" aria-hidden="true" role="presentation" focusable="false">
                        <use xlink:href="/images/sprite.svg#icon-address"/>
                    </svg>
                    Цена под усадку
                </div>
                <table class="product-page__sidebar-table product-table">
                    <tr>
                        <td>
                            <img src="/images/table-size-1.png" alt="">
                        </td>
                        <td>
                            <span class="product-table__size">90×140 мм</span><br>
                            <span class="product-table__thickness">толщина стены: 90 мм</span>
                        </td>
                        <td>
                            <label class="product-table__price-wrap">
                                <input class="sr-only" type="radio" name="product-options-1" checked>
                                <span class="product-table__price"><?= number_format($model->price, 0, ',', ' ') ?> руб.</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="/images/table-size-2.png" alt="">
                        </td>
                        <td>
                            <span class="product-table__size">140×140 мм</span><br>
                            <span class="product-table__thickness">толщина стены: 140 мм</span>
                        </td>
                        <td>
                            <label class="product-table__price-wrap">
                                <input class="sr-only" type="radio" name="product-options-1">
                                <span class="product-table__price"><?= number_format($model->price, 0, ',', ' ') ?> руб.</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="/images/table-size-3.png" alt="">
                        </td>
                        <td>
                            <span class="product-table__size">190×140 мм</span><br>
                            <span class="product-table__thickness">толщина стены: 190 мм</span>
                        </td>
                        <td>
                            <label class="product-table__price-wrap">
                                <input class="sr-only" type="radio" name="product-options-1">
                                <span class="product-table__price"><?= number_format($model->price, 0, ',', ' ') ?> руб.</span>
                            </label>
                        </td>
                    </tr>
                </table>
                <hr>
                <div class="product-page__sidebar-title">
                    <img src="/images/icon-key.png" alt="">
                    Цена под ключ
                </div>
                <table class="product-page__sidebar-table product-table">
                    <tr>
                        <td>
                            <img src="/images/table-size-1.png" alt="">
                        </td>
                        <td>
                            <span class="product-table__size">90×140 мм</span><br>
                            <span class="product-table__thickness">толщина стены: 90 мм</span>
                        </td>
                        <td>
                            <label class="product-table__price-wrap">
                                <input class="sr-only" type="radio" name="product-options-2" checked>
                                <span class="product-table__price"><?= number_format($model->price, 0, ',', ' ') ?> руб.</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="/images/table-size-2.png" alt="">
                        </td>
                        <td>
                            <span class="product-table__size">140×140 мм</span><br>
                            <span class="product-table__thickness">толщина стены: 140 мм</span>
                        </td>
                        <td>
                            <label class="product-table__price-wrap">
                                <input class="sr-only" type="radio" name="product-options-2">
                                <span class="product-table__price"><?= number_format($model->price, 0, ',', ' ') ?> руб.</span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="/images/table-size-3.png" alt="">
                        </td>
                        <td>
                            <span class="product-table__size">190×140 мм</span><br>
                            <span class="product-table__thickness">толщина стены: 190 мм</span>
                        </td>
                        <td>
                            <label class="product-table__price-wrap">
                                <input class="sr-only" type="radio" name="product-options-2">
                                <span class="product-table__price"><?= number_format($model->price, 0, ',', ' ') ?> руб.</span>
                            </label>
                        </td>
                    </tr>
                </table>
                <?php endif; ?>
                
                <?php
                if ($model->similar_product_link) {
                    echo $model->similar_product_link;
                }
                ?>
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
                <?php if ($model->equipment) : ?>
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#product-tab-1">
                            Комплектация
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($model->additional_services) : ?>
                    <li class="nav-item">
                        <a class="nav-link <?= !$model->equipment ? 'active' : '' ?>" data-toggle="tab" href="#product-tab-2">
                            Доп. услуги
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link <?= !$model->equipment && !$model->additional_services ? 'active' : '' ?>"
                       data-toggle="tab" href="#product-tab-3">
                        Как работаем
                    </a>
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
                <?php if ($model->equipment) : ?>
                    <div class="tab-pane fade show active" id="product-tab-1">
                        <div class="table-responsive">
                            <?= $model->equipment ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($model->additional_services) : ?>
                    <div class="tab-pane fade <?= !$model->equipment ? 'show active' : '' ?>" id="product-tab-2">
                        <div class="table-responsive">
                            <?= $model->additional_services ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="tab-pane fade <?= !$model->equipment && !$model->additional_services ? 'show active' : '' ?>"
                     id="product-tab-3">
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
