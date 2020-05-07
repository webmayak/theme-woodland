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
?>
<main class="shop-cart-index mb-5">

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
                                        $item->product->media ? $item->product->media->image(80, 80,
                                            false) : 'https://via.placeholder.com/80',
                                        [
                                            'alt' => Html::encode($item->product->name),
                                            'class' => 'cart-table__product-img'
                                        ]
                                    ),
                                    $item->product->present()->getUrl()
                                ) ?>
                                <div class="cart-table__product-text">
                                    <div class="cart-table__title"><b><?= Html::a($item->product->name,
                                                $item->product->present()->getUrl()) ?></b></div>
                                    <div class="cart-table__availability"><i class="fa fa-check"></i> Есть в наличии
                                    </div>
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

        <ul class="checkout__nav-tabs nav nav-tabs mt-5" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab-1">Быстрое оформление заказа</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Полное оформление заказа</a>
            </li>
        </ul>
        <div class="tab-content mt-4">
            <div class="checkout__tab-pane p-3 p-sm-4 p-lg-5 tab-pane fade show active" id="tab-1">
                <form>
                    <div class="form-group row align-items-center">
                        <span class="col-lg-2 col-form-label font-weight-bold">Регион доставки:</span>
                        <div class="col-lg-10">
                            <div class="btn-group-toggle mb-n2" data-toggle="buttons">
                                <label class="btn btn-outline-success active mb-2">
                                    <input type="radio" name="region" checked>
                                    Москва
                                </label>
                                <label class="btn btn-outline-success mb-2">
                                    <input type="radio" name="region">
                                    Московская область
                                </label>
                                <label class="btn btn-outline-success mb-2">
                                    <input type="radio" name="region">
                                    Другой регион России
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <span class="col-lg-2 col-form-label font-weight-bold">Цена доставки:</span>
                        <div class="col-lg-10">
                            <span class="text-primary">Бесплатно</span>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <span class="col-lg-2 col-form-label font-weight-bold">Дата доставки:</span>
                        <div class="col-lg-10">
                            <input type="date" class="form-control w-auto" value="<?= date("Y-m-d") ?>">
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <span class="col-lg-2 col-form-label font-weight-bold">Время доставки:</span>
                        <div class="col-lg-10">
                            <select class="form-control w-auto">
                                <option>Весь день</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <span class="col-lg-2 col-form-label font-weight-bold">Оплата:</span>
                        <div class="col-lg-10">
                            <div class="btn-group-toggle mb-n2" data-toggle="buttons">
                                <label class="btn btn-outline-success active mb-2">
                                    <input type="radio" name="payment" checked>
                                    Наличными при получении
                                </label>
                                <label class="btn btn-outline-success mb-2">
                                    <input type="radio" name="payment">
                                    Картой
                                </label>
                                <label class="btn btn-outline-success mb-2">
                                    <input type="radio" name="payment">
                                    Счет в банке
                                </label>
                                <label class="btn btn-outline-success mb-2">
                                    <input type="radio" name="payment">
                                    Электронными деньгами
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="form-alert mh-100">
                                <div class="form-alert__title">Заполните данные</div>
                                <div class="form-group">
                                    <label class="control-label">Ваше имя</label>
                                    <input type="text" class="form-control" placeholder="Ваше имя" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Ваш телефон</label>
                                    <input type="text" class="form-control" placeholder="Ваш телефон" required>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="sr-only" id="acception" checked required>
                                    <label class="form-check-label" for="acception">Даю свое согласие на обработку персональных данных</label>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg d-block m-auto">Оформить заказ</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-alert mh-100 text-center">
                                <div class="form-alert__title">Наши гарантии</div>
                                <img class="mt-5" src="/images/icon-shield.png" alt="">
                                <p class="fs-16 mt-5"><span class="text-primary">14 дней на возврат денег</span> без вопросов
                                    <br>если товар не подошел</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="checkout__tab-pane p-3 p-sm-4 p-lg-5 tab-pane fade" id="tab-2">
                456
            </div>
        </div>

    <?php else : ?>
        <p class="text-center">Вы еще ничего не добавили в корзину, перейдите в <a href="/catalog">каталог проектов</a>
        </p>
    <?php endif; ?>
    <?php Pjax::end() ?>
</main>
