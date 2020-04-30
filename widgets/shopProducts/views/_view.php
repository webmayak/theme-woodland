<?php

use common\modules\shop\models\ShopProductCompare;
use common\modules\shop\models\ShopProductFavorite;
use common\modules\shop\widgets\cart\addToCart\AddToCartWidget;
use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;

$productIsProject = !in_array($model->product_type_id, [4, 11]);

/**
 * @var \common\modules\shop\models\ShopProduct $model
 * @var \frontend\themes\woodland\widgets\shopProducts\ProductsList $widget
 */
?><div class="product-card">
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
    <div class="product-card__img-wrap">
        <a href="<?=$model->present()->getUrl()?>">
            <img class="product-card__img" src="<?= $model->media ? $model->media->image(505, 283, false) : 'https://via.placeholder.com/505x283' ?>" alt="<?= Html::encode($model->name) ?>">
        </a>
    </div>
    <a href="<?=$model->present()->getUrl()?>" class="product-card__title-link">
        <h3 class="product-card__title"><?= Html::encode($model->name) ?></h3>
    </a>
    <ul class="product-card__params ul-reset">
        <?php if ($attributeValue = $model->present()->getAttributeValue(1)): ?>
        <li class="product-card__param">
            <div class="product-card__param-icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-address"/>
                </svg>
            </div>
            <div class="product-card__param-text">Этажность: <b><?= $attributeValue ?></b></div>
        </li>
        <?php endif; ?>
        <?php if ($attributeValue = $model->present()->getAttributeValue(2)): ?>
        <li class="product-card__param">
            <div class="product-card__param-icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-bed"/>
                </svg>
            </div>
            <div class="product-card__param-text">Комнат: <b><?= $attributeValue ?></b></div>
        </li>
        <?php endif; ?>
        <?php if ($attributeValue = $model->present()->getAttributeValue(3)): ?>
        <li class="product-card__param">
            <div class="product-card__param-icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-size"/>
                </svg>
            </div>
            <div class="product-card__param-text">Размер: <b><?= $attributeValue ?></b></div>
        </li>
        <?php endif; ?>
        <?php if ($attributeValue = $model->present()->getAttributeValue(4)): ?>
        <li class="product-card__param">
            <div class="product-card__param-icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-calendar"/>
                </svg>
            </div>
            <div class="product-card__param-text">Сроки: <b><?= $attributeValue ?></b></div>
        </li>
        <?php endif; ?>
    </ul>
    <?php if ($model->default_price > $model->price): ?>
    <div class="product-card__old-price">Старая цена: <del><?= Yii::$app->formatter->asCurrency($model->default_price) ?></del></div>
    <?php endif; ?>
    <div class="product-card__price">Цена: <?php if ($productIsProject) : ?>от <?php endif; ?><b><?= Yii::$app->formatter->asCurrency($model->price) ?></b></div>
    <div class="product-card__actions">
        <?php if ($productIsProject) : ?>
            <a href="<?=$model->present()->getUrl()?>" class="product-card__to-cart btn btn-primary">
                Подробнее
            </a>
        <?php else : ?>
            <?= AddToCartWidget::widget([
                'content' => 'Купить '
                    . '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">'
                        . '<use xlink:href="/images/sprite.svg#icon-cart"/>'
                    . '</svg>',
                'model' => $model,
                'htmlOptions' => ['class' => 'btn btn-primary product-card__to-cart'],
            ]) ?>
        <?php endif; ?>
        <button class="product-card__to-favorites btn <?= ShopProductFavorite::isFavorite($model->id) ? 'btn-success' : 'btn-outline-success' ?>" data-id="<?= $model->id ?>">
            <span class="sr-only">В избранное</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-heart"/>
            </svg>
        </button>
        <button class="product-card__to-compare btn <?= ShopProductCompare::isCompare($model->id) ? 'btn-success' : 'btn-outline-success' ?>" data-id="<?= $model->id ?>">
            <span class="sr-only">Сравнить</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-graph"/>
            </svg>
        </button>
    </div>
</div>

<?php if ($widget->showLeadCard) : ?>
    <?php
    // рассчитываем реальную позицию текущего элемента
    $realKey = $widget->dataProvider->pagination
        ? ($widget->dataProvider->pagination->page * $widget->dataProvider->pagination->pageSize) + $index
        : $index;

    // получаем класс обертки элемента
    $cardWrapperClass = ($widget->itemOptions && !empty($widget->itemOptions['class']))
        ? $widget->itemOptions['class']
        : '';
    ?>
    <?php if ($realKey == ($widget->dataProvider->totalCount - 1)): ?>
        </div>
        <div class="<?= $cardWrapperClass ?>">
            <div class="free-calc-card">
                <div class="free-calc-card__img-wrap">
                    <img class="free-calc-card__img" src="/images/free-calc-img.jpg" alt="">
                </div>
                <div class="free-calc-card__title">Не нашли нужного проекта?</div>
                <div class="free-calc-card__descr">Пришлите свой! <br> Расчитаем за 1 день</div>
                <div class="free-calc-card__accent-text">Бесплатно</div>
                <?= LeadForm::widget([
                    'key' => 'orderProject',
                    'text' => 'Заказать бесплатный расчет',
                    'options' => [
                        'class' => 'btn btn-lg btn-primary px-1 mt-auto',
                    ],
                ]) ?>
            </div>
        <!-- не закрываем тег-->
    <?php endif; ?>
<?php endif; ?>
