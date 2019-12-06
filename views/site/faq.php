<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/31/18
 * Time: 4:40 PM
 */

use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $links array */
$this->title = 'Вопросы и ответы';
$this->params['breadcrumbs'][] = $this->title;
?><main class="page-site-faq__content">
    <h1 class="title-home"><?= $this->title ?></h1>
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <ul class="page-site-faq__menu">
                <li class="active">
                    <a href="#faq-section-1">О компании</a>
                </li>
                <li>
                    <a href="#faq-section-2">Этапы работы</a>
                </li>
                <li>
                    <a href="#faq-section-3">О гарантии</a>
                </li>
                <li>
                    <a href="#faq-section-4">О доставке</a>
                </li>
                <li>
                    <a href="#faq-section-5">О фундаменте</a>
                </li>
                <li>
                    <a href="#faq-section-6">О домах из бруса</a>
                </li>
                <li>
                    <a href="#faq-section-7">О каркасных домах</a>
                </li>
                <li>
                    <a href="#faq-section-8">О банях их бруса</a>
                </li>
            </ul>
        </div>
        <div class="col-xl-9 col-lg-8">
            <div id="faq-section-1" class="page-site-faq__section">
                <div class="page-site-faq__section-title">О компании</div>
                <div id="accordion-1">
                    <div class="faq-item">
                        <div class="faq-item__question">
                            <button class="faq-item__question-btn" data-toggle="collapse" data-target="#accordion-1-1">
                                Где находится ваша компания?
                            </button>
                        </div>
                        <div id="accordion-1-1" class="faq-item__answer collapse show" data-parent="#accordion-1">
                            <p>Наша компания основана в Росии. У нас есть офисы, расположенные в Москве, Новосибирске и Омске, чтобы обеспечить максимальный комформ для Вас, мы приглашает в наш офис, где наши менеджерыпомогут Вам выбрать проект дома. Оформить заявку можно так же по ссылке http://fortuna-les.ru/</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item__question">
                            <button class="faq-item__question-btn collapsed" data-toggle="collapse" data-target="#accordion-1-2">
                                Из какого материала строите?
                            </button>
                        </div>
                        <div id="accordion-1-2" class="faq-item__answer collapse" data-parent="#accordion-1">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item__question" >
                            <button class="faq-item__question-btn collapsed" data-toggle="collapse" data-target="#accordion-1-3">
                                Какой национальности ваши рабочие бригадиры?
                            </button>
                        </div>
                        <div id="accordion-1-3" class="faq-item__answer collapse" data-parent="#accordion-1">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="faq-section-2" class="page-site-faq__section">
                <div class="page-site-faq__section-title">Этапы работы</div>
                <div id="accordion-2">
                    <div class="faq-item">
                        <div class="faq-item__question">
                            <button class="faq-item__question-btn collapsed" data-toggle="collapse" data-target="#accordion-2-1">
                                Как будет происходить работа по моему заказу?
                            </button>
                        </div>
                        <div id="accordion-2-1" class="faq-item__answer collapse" data-parent="#accordion-2">
                            <p>Наша компания основана в Росии. У нас есть офисы, расположенные в Москве, Новосибирске и Омске, чтобы обеспечить максимальный комформ для Вас, мы приглашает в наш офис, где наши менеджерыпомогут Вам выбрать проект дома. Оформить заявку можно так же по ссылке http://fortuna-les.ru/</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item__question">
                            <button class="faq-item__question-btn collapsed" data-toggle="collapse" data-target="#accordion-2-2">
                                Каким образом будет производиться оплата?
                            </button>
                        </div>
                        <div id="accordion-2-2" class="faq-item__answer collapse" data-parent="#accordion-2">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-item__question" >
                            <button class="faq-item__question-btn collapsed" data-toggle="collapse" data-target="#accordion-2-3">
                                Требуется ли предоплата?
                            </button>
                        </div>
                        <div id="accordion-2-3" class="faq-item__answer collapse" data-parent="#accordion-2">
                            <p>
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
