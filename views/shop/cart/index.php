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
use frontend\themes\woodland\widgets\shopCategories\Categories as CategoriesList;

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

        <div class="text-center mt-3">
            <?= Html::a('Оформить заказ', ['/shop/order/index'], ['class' => 'btn btn-success btn-lg', 'data-pjax' => 0]) ?>
        </div>

        <?php if (0): ?>
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
                    <div class="form-group field-date row align-items-center">
                        <span class="col-lg-2 col-form-label font-weight-bold">Дата доставки:</span>
                        <div class="col-lg-3">
                            <input type="date" class="form-control" value="<?= date("Y-m-d") ?>" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <span class="col-lg-2 col-form-label font-weight-bold">Время доставки:</span>
                        <div class="col-lg-3">
                            <select class="form-control" required>
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
                                <div class="form-group field-name">
                                    <label class="control-label">Ваше имя</label>
                                    <input type="text" class="form-control" placeholder="Ваше имя" required>
                                </div>
                                <div class="form-group field-phone">
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
                                <p class="fs-16 mt-5">
                                    <span class="text-primary">14 дней на возврат денег</span> без вопросов
                                    <br>если товар не подошел</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="checkout__tab-pane p-3 p-sm-4 p-lg-5 tab-pane fade" id="tab-2">
                <form>
                    <fieldset class="mb-4">
                        <legend><span class="text-success">Шаг 1.</span> Регион доставки:</legend>
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
                    </fieldset>
                    <fieldset class="mb-4">
                        <legend><span class="text-success">Шаг 2.</span> Контактная информация:</legend>
                        <div class="row">
                            <div class="col-xl-4 col-lg-5">
                                <div class="form-group field-name">
                                    <label class="control-label">Ваше имя</label>
                                    <input type="text" class="form-control" placeholder="Ваше имя" required>
                                </div>
                                <div class="form-group field-phone">
                                    <label class="control-label">Ваш телефон</label>
                                    <input type="text" class="form-control" placeholder="Ваш телефон" required>
                                </div>
                                <div class="form-group field-email">
                                    <label class="control-label">Ваш email</label>
                                    <input type="email" class="form-control" placeholder="Ваш email" required>
                                </div>
                                <div class="form-group field-address">
                                    <label class="control-label">Ваш адрес</label>
                                    <input type="text" class="form-control" placeholder="Ваш адрес" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Ваш комментарий</label>
                                    <textarea class="form-control" rows="5" placeholder="Ваш комментарий"></textarea>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="mb-4">
                        <legend><span class="text-success">Шаг 3.</span> Доставка:</legend>
                        <div class="row align-items-baseline">
                            <div class="col-auto">
                                <div class="form-check">
                                    <input type="checkbox" class="sr-only" id="delivery-courier" checked required>
                                    <label class="form-check-label mb-2" for="delivery-courier">
                                        <span class="font-weight-600 mr-3">Доставка курьером</span>
                                        <span>Доставка курьером для Москвы и Московской области</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <label class="mr-2">Дата доставки:</label>
                                <input type="date" class="form-control d-inline-block w-auto py-2 mr-2" value="<?= date("Y-m-d") ?>" required>
                            </div>
                            <div class="col-auto">
                                <span class="text-primary font-weight-600">300 Руб</span>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="mb-4">
                        <legend><span class="text-success">Шаг 4.</span> Оплата:</legend>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="sr-only" id="payment-1" checked required>
                            <label class="form-check-label" for="payment-1">
                                <span class="font-weight-600 mr-3">Оплата наличными при получении</span>
                                <span>Вы можете расплатиться наличными при получении товара. Картой расплатиться будет уже нельзя.</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="sr-only" id="payment-2" checked required>
                            <label class="form-check-label" for="payment-2">
                                <span class="font-weight-600 mr-3">Оплата по счету (р/с в Сбербанке)</span>
                                <span>Выставим счет для оплаты от физических и юридических лиц. Наш р/с открыт в Сбербанке г. Москва.</span>
                            </label>
                        </div>
                    </fieldset>
                    <div class="row mt-5">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="form-alert mh-100">
                                <div class="row align-items-baseline font-weight-600 fs-18 mb-1">
                                    <div class="col-sm-3 col-auto">Скидка:</div>
                                    <div class="col-sm-9 col-auto">
                                        <span class="text-primary">-754 Руб</span>
                                    </div>
                                </div>
                                <div class="row align-items-baseline font-weight-600 fs-18 mb-5">
                                    <div class="col-sm-3 col-auto">Итого:</div>
                                    <div class="col-sm-9 col-auto">
                                        <span class="text-success fs-24">31 990 Руб</span>
                                    </div>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="sr-only" id="acception-2" checked required>
                                    <label class="form-check-label" for="acception-2">Даю свое согласие на обработку персональных данных</label>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg d-block m-auto">Оформить заказ</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-alert mh-100 text-center">
                                <img src="/images/icon-shield.png" alt="">
                                <p class="fs-16 mt-3 mb-0">
                                    <span class="text-primary">14 дней на возврат денег</span> без вопросов
                                    <br>если товар не подошел</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    	<?php endif; ?>

    <?php else : ?>
        <p class="text-center fs-18">Вы еще ничего не добавили в корзину, перейдите в <a href="/catalog">каталог проектов</a>
        </p>
    <?php endif; ?>
    <?php Pjax::end() ?>
</main>

<div class="shop-order-complete mb-5">
    <?php if (0) : ?>
        <a href="#" class="btn btn-primary btn-lg mb-4"><i class="fa fa-chevron-left mr-2"></i> Вернуться к покупкам</a>
        <h1><i class="fa fa-check text-success"></i> Спасибо! Ваш заказ № 161709 уже получен нами!</h1>
        <p>Наш менеджер свяжется с Вами в течение ближайшего времени, ответит на оставшиеся вопросы и согласует детали доставки.</p>
        <p>Пожалуйста, сохраните номер Вашего заказа.</p>
        <p>Для решения всех срочных вопросов - позвоните нам 8-495-662-95-65.</p>
        <p>Полный список наших контактов (все телефоны, адрес офиса, карта проезда до склада) вы найдете
            <a href="#">здесь</a>.
        </p>
    <?php endif; ?>
    <h2>Точно ничего не забыли?</h2>
    <?= CategoriesList::widget() ?>
</div>
