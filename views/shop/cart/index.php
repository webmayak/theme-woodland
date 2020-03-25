<?php
/**
 * @var \common\modules\shop\components\order\OrderFormInterface $model
 * @var \common\modules\shop\components\cart\CartObjectItem[] $items
 * @var \common\modules\shop\components\order\OrderFormConstructor $constructor
 */

use common\modules\shop\widgets\cart\CartAssets;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\web\View;

$this->title = "Корзина";
$this->params['breadcrumbs'][] = $this->title;

CartAssets::register($this);

/* @var $this View */
?><main class="shop-cart-index mb-5">
    
    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(['id' => 'cart']) ?>
    <?php if ($items) : ?>
        <div class="page-site-cart__total">
            <div class="row">
                <div class="col-md-6">
                    <div class="page-site-cart__added">Товар добавлен в корзину</div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="page-site-cart__total-text">
                        Итого: <b><?= Yii::$app->formatter->asCurrency($total) ?></b>
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
                                <?= Html::a(
                                    Html::img(
                                        $item->product->media ? $item->product->media->image(80, 80, false) : 'https://via.placeholder.com/80',
                                        ['alt' => Html::encode($item->product->name), 'class' => 'cart-table__product-img']
                                    ),
                                    $item->product->present()->getUrl()
                                ) ?>
                                <div class="cart-table__product-text">
                                    <div class="cart-table__title"><b><?= Html::a($item->product->name, $item->product->present()->getUrl()) ?></b></div>
                                    <div class="cart-table__availability"><i class="fa fa-check"></i> Есть в наличии</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <input class="cart-table__quantity quantity-field" type="number" value="<?= $item->count ?>" min="1" data-action="cart-change-product" data-product-id="<?= $item->product_id ?>">
                        </td>
                        <td>
                            <!--<del class="cart-table__old-price"><?= Yii::$app->formatter->asCurrency($item->price) ?></del>-->
                            <div class="cart-table__new-price"><?= Yii::$app->formatter->asCurrency($item->price * $item->count) ?></div>
                        </td>
                        <td>
                            <div class="text-right">
                                <a class="cart-table__delete" type="button" data-action="cart-delete-product" data-product-id="<?= $item->product_id ?>">
                                    <span class="sr-only">Удалить</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-3">
            <?= Html::a('Оформить заказ', ['/shop/order/index'], ['class' => 'btn btn-success btn-lg', 'data-pjax' => 0]) ?>
        </div>
    <?php else : ?>
        <p class="text-center">Вы еще ничего не добавили в корзину, перейдите в <a href="/catalog">каталог проектов</a></p>
    <?php endif; ?>
    <?php Pjax::end() ?>
</main>
