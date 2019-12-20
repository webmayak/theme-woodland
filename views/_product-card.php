<?php

use yii\helpers\Html;

/**
 * @var \common\modules\shop\models\ShopProduct $model
 */
?><div class="catalog-page__item product-card">
    <div class="product-card__img-wrap">
        <a href="/shop/products/view?id=<?= $model->id ?>" _href="<?= $model->present()->getUrl() ?>">
            <img class="product-card__img" src="<?= $model->media ? $model->media->image() : 'https://via.placeholder.com/150' ?>" alt="<?= Html::encode($model->getParentWithVariantName()) ?>">
        </a>
    </div>
    <a href="/shop/products/view?id=<?= $model->id ?>" _href="<?= $model->present()->getUrl() ?>" class="product-card__title-link">
        <h3 class="product-card__title"><?= Html::encode($model->getParentWithVariantName()) ?></h3>
    </a>
    <ul class="product-card__params ul-reset">
        <li class="product-card__param">
            <div class="product-card__param-icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-address"/>
                </svg>
            </div>
            <div class="product-card__param-text">Этажность: <b>--</b></div>
        </li>
        <li class="product-card__param">
            <div class="product-card__param-icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-bed"/>
                </svg>
            </div>
            <div class="product-card__param-text">Комнат: <b>--</b></div>
        </li>
        <li class="product-card__param">
            <div class="product-card__param-icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-size"/>
                </svg>
            </div>
            <div class="product-card__param-text">Размер: <b>--</b></div>
        </li>
        <li class="product-card__param">
            <div class="product-card__param-icon-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-calendar"/>
                </svg>
            </div>
            <div class="product-card__param-text">Сроки: <b>--</b></div>
        </li>
    </ul>
    <div class="product-card__old-price">Старая цена: <del><?= number_format($model->default_price, 0, ',', ' ') ?> Руб</del></div>
    <div class="product-card__price">Цена: <b><?= number_format($model->price, 0, ',', ' ') ?> Руб</b></div>
    <div class="product-card__actions">
        <a href="/shop/products/view?id=<?= $model->id ?>" class="product-card__to-cart btn btn-primary">
            Подробнее
            <?php if (0) : ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-cart"/>
            </svg>
            <?php endif; ?>
        </a>
        <button class="product-card__to-favorites btn btn-outline-success">
            <span class="sr-only">В избранное</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-heart"/>
            </svg>
        </button>
        <button class="product-card__to-compare btn btn-outline-success">
            <span class="sr-only">Сравнить</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                <use xlink:href="/images/sprite.svg#icon-graph"/>
            </svg>
        </button>
    </div>
</div>
