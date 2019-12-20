<?php
/**
 * @var \common\modules\shop\components\order\OrderFormInterface $model
 * @var \common\modules\shop\components\cart\CartObjectItem[] $items
 * @var \common\modules\shop\components\order\OrderFormConstructor $constructor
 */

use yii\helpers\Html;
use yii\web\View;

$this->title = "Корзина";

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => '/shop/catalog'];
$this->params['breadcrumbs'][] = $this->title;

/* @var $this View */
?><main class="page-site-cart__content">
    
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="page-site-cart__total">
        <div class="row">
            <div class="col-md-6">
                <div class="page-site-cart__added">Товар добавлен в корзину</div>
            </div>
            <div class="col-md-6 text-right">
                <div class="page-site-cart__total-text">
                    Итого: <b><?= number_format($total, 0, ',', ' ') ?> Руб.</b>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Товар</th>
                    <th>Количество</th>
                    <th>Общая стоимость</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($items as $item): ?>
                <tr data-id="<?= $item->product_id ?>">
                    <td>
                        <div class="cart-table__product">
                            <img class="cart-table__product-img" src="https://via.placeholder.com/120" alt="<?= Html::encode($item->title) ?>">
                            <div class="cart-table__product-text">
                                <div class="cart-table__title"><b><?= Html::encode($item->title) ?></b></div>
                                <div class="cart-table__availability"><i class="fa fa-check"></i> Есть в наличии</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <input class="cart-table__quantity quantity-field" type="number" value="1" min="1">
                    </td>
                    <td>
                        <del class="cart-table__old-price"><?= number_format($item->price, 0, ',', ' ') ?> Руб</del>
                        <div class="cart-table__new-price"><?= number_format($item->getSum()) ?> Руб.</div>
                    </td>
                    <td>
                        <div class="text-right">
                            <button class="cart-table__delete" type="button">
                                <span class="sr-only">Удалить</span>
                            </button>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <br/><br/>

    <div class="text-center">
        <?= Html::a('Оформить заказ', '/shop/order/checkout', ['class' => 'btn btn-success btn-lg']) ?>
    </div>
</main>
