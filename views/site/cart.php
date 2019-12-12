<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/31/18
 * Time: 4:40 PM
 */

use yii\helpers\Html;
use yii\web\View;
use pantera\leads\widgets\form\LeadForm;

/* @var $this View */
/* @var $links array */
$this->title = 'Корзина';
$this->params['breadcrumbs'][] = $this->title;
?><main class="page-site-cart__content">
    <h1><?= $this->title ?></h1>
    <div class="page-site-cart__total">
        <div class="row">
            <div class="col-md-6">
                <div class="page-site-cart__added">Товар добавлен в корзину</div>
            </div>
            <div class="col-md-6 text-right">
                <div class="page-site-cart__total-text">
                    Итого: <b>350 000 Руб.</b>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="cart-table">
            <tr>
                <th>Товар</th>
                <th>Количество</th>
                <th>Общая стоимость</th>
                <th></th>
            </tr>
            <tr>
                <td>
                    <div class="cart-table__product">
                        <img class="cart-table__product-img" src="/images/cart-product.jpg" alt="">
                        <div class="cart-table__product-text">
                            <div class="cart-table__title"><b>Садовые качели оазис люкс</b> (Арт. 01-970)</div>
                            <div class="cart-table__availability"><i class="fa fa-check"></i> Есть в наличии</div>
                        </div>
                    </div>
                </td>
                <td>
                    <input class="cart-table__quantity quantity-field" type="number" value="1" min="1">
                </td>
                <td>
                    <del class="cart-table__old-price">16 999 Руб</del>
                    <div class="cart-table__new-price">350 000 Руб.</div>
                </td>
                <td>
                    <div class="text-right">
                        <button class="cart-table__delete" type="button">
                            <span class="sr-only">Удалить</span>
                        </button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="cart-table__product">
                        <img class="cart-table__product-img" src="/images/cart-product.jpg" alt="">
                        <div class="cart-table__product-text">
                            <div class="cart-table__title"><b>Садовые качели оазис люкс</b> (Арт. 01-970)</div>
                            <div class="cart-table__availability"><i class="fa fa-check"></i> Есть в наличии</div>
                        </div>
                    </div>
                </td>
                <td>
                    <input class="cart-table__quantity quantity-field" type="number" value="1" min="1">
                </td>
                <td>
                    <del class="cart-table__old-price">16 999 Руб</del>
                    <div class="cart-table__new-price">350 000 Руб.</div>
                </td>
                <td>
                    <div class="text-right">
                        <button class="cart-table__delete" type="button">
                            <span class="sr-only">Удалить</span>
                        </button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="cart-table__product">
                        <img class="cart-table__product-img" src="/images/cart-product.jpg" alt="">
                        <div class="cart-table__product-text">
                            <div class="cart-table__title"><b>Садовые качели оазис люкс</b> (Арт. 01-970)</div>
                            <div class="cart-table__availability"><i class="fa fa-check"></i> Есть в наличии</div>
                        </div>
                    </div>
                </td>
                <td>
                    <input class="cart-table__quantity quantity-field" type="number" value="1" min="1">
                </td>
                <td>
                    <del class="cart-table__old-price">16 999 Руб</del>
                    <div class="cart-table__new-price">350 000 Руб.</div>
                </td>
                <td>
                    <div class="text-right">
                        <button class="cart-table__delete" type="button">
                            <span class="sr-only">Удалить</span>
                        </button>
                    </div>
                </td>
            </tr>
    </table>
    </div>
</main>
