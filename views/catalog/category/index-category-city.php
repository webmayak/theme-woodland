<?php

use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\web\View;

/* @var $this View */
/* @var $links array */
$this->title = 'Домостроительная компания';

?><main class="page-site-category__content">
    <h1><?= $this->title ?></h1>

    <div class="page-site-category__text-block">
        <p>В активе компании склад круглого леса, пилорама, несколько деревообрабатывающих цехов, комплекс сушильных камер, склад готовой продукции, собственный парк автотранспорта. В цехах установлено оборудование для производства домостроительного бруса и подготовки домокомплектов , в том числе и линия для изготовления клеёного бруса. Иными словами, на производственные площади  предприятия мы поместили всё необходимое оборудование для полного технологического цикла по обработке древесины от раскроя бревна до выпуска готовых домокомплектов и другой столярной продукции.</p>
        <p>Чтобы прикоснуться к истории, мы создали домостроительную компанию «ФОРТУНА» и разместили ее в подмосковной Мещёре, в краю красивых и экологически чистых лесов, жемчужных озёр и рек, на расстоянии 140км. от Москвы, в посёлке ЦУС «Мир» Шатурского района.</p>
    </div>

    <?= $this->render('@theme/views/_filter') ?>

    <?= \yii\widgets\ListView::widget([
        'dataProvider' => new \yii\data\ActiveDataProvider([
            'query' => \common\modules\shop\models\ShopProduct::find()
        ]),
        'options' => [
            'class' => 'products-list',
        ],
        'itemView' => '@theme/views/_product-card',
        'itemOptions' => [
            'class' => 'col-xl-3 col-lg-4 col-sm-6 catalog-page__item',
        ],
        'layout' => '<div class="row">{items}</div>{pager}',
        'pager' => [
            'class' => 'yii\bootstrap4\LinkPager',
            'prevPageLabel' => '<i class="fa fa-angle-left"></i> Назад',
            'nextPageLabel' => 'Вперед <i class="fa fa-angle-right"></i>',
            'listOptions' => [
                'class' => ['page-search__pagination pagination justify-content-center align-items-center']
            ]
        ],
    ]) ?>

</main>

<?= $this->render('@theme/views/_categories') ?>

</div><!-- закрываем .container -->

<?= $this->render('@theme/views/_advantages') ?>

<?= $this->render('@theme/views/_text-block') ?>

<?= $this->render('@theme/views/_steps') ?>

<?= $this->render('@theme/views/_works-map--with-form') ?>

<?= $this->render('@theme/views/_text-block') ?>

<?= $this->render('@theme/views/_works') ?>

<div class="contact-form-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8">
                <?= LeadForm::widget([
                    'key' => 'request',
                    'mode' => LeadForm::MODE_INLINE,
                ]) ?>
            </div>
        </div>
    </div>
</div>
