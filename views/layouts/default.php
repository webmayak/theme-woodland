<?php

use frontend\themes\woodland\AppAsset;
use frontend\widgets\megaMenu\MegaMenu;
use frontend\widgets\twigRender\TwigRender;
use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Html;
use yii\helpers\Url;

if ((Yii::$app->controller->id === 'site' && Yii::$app->controller->action->id === 'error') === false) {
    $this->registerLinkTag([
        'rel' => 'canonical',
        'href' => Url::canonical(),
    ]);
}
$this->registerLinkTag([
    'rel' => 'icon',
    'type' => 'icon',
    'href' => '/favicon.png',
]);

AppAsset::register($this);
$this->beginPage();

/* @var $this \yii\web\View */
/* @var $content string */
?><!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#2bcd93">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        <?= Yii::$app->settings->get('css', 'default') ?>
    </style>
</head>
<body class="page-<?= $_SERVER['REQUEST_URI'] == '/' ? 'front' : str_replace('/', '-', trim($_SERVER['REQUEST_URI'], '/')) ?>">
<?php $this->beginBody() ?>
<?= $this->render('_header') ?>

<?= MegaMenu::widget() ?>

<div class="wrap">
    <?= TwigRender::widget([
        'text' => $content,
    ]) ?>
</div>

<?php if (0) : ?>
<div class="section-subcribe">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-subcribe__title">Подпишитесь на наши новости</div>
                <div class="section-subcribe__hint">Рекомендации по лечению, новые препараты, истории успешного лечения и другое!</div>
            </div>
            <div class="col-md-6">
                <?= LeadForm::widget([
                    'key' => 'subscribe',
                    'mode' => LeadForm::MODE_INLINE,
                ]) ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?= $this->render('_footer') ?>

<nav id="mmenu-nav">
    <ul>
        <?php
        $catalogIsActive = preg_match('/^catalog/', Yii::$app->request->pathInfo);
        $brandsIsActive = preg_match('/^brands/', Yii::$app->request->pathInfo);
        ?>
        <li class="<?= $catalogIsActive ? 'active' : '' ?>active" id="main-menu-catalog">
            <a href="<?= Url::to(['/shop/catalog']) ?>">
                Проекты
            </a>
            <?php if (($catalogRoot = \common\modules\shop\models\ShopCategory::findOne(1)) && ($categories = $catalogRoot->getChildren()->andWhere(['status' => 1])->all())): ?>
                <ul>
                    <?php foreach ($categories as $category): ?>
                        <li>
                            <a href="<?=$category->present()->getUrl()?>"><?= $category->name ?></a>
                            <?php if ($lvl2cats = $category->getChildren()->andWhere(['status' => 1])->all()): ?>
                                <ul>
                                    <?php foreach ($lvl2cats as $lvl2cat): ?>
                                        <li>
                                            <a href="<?= $lvl2cat->present()->getUrl() ?>"><?= $lvl2cat->name ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach;?>
                </ul>
            <?php endif; ?>
            <?php if (0 && $this->beginCache('megamenu-dropdown', ['duration' => 86400])): ?>
                <?= $this->render('_dropdown', [
                    'categories' => $catalogRoot->getChildren()->isInMenu()->all(),
                ]) ?>
                <?php $this->endCache(); endif; ?>
        </li>
        <li class="<?= false ? 'active' : '' ?>">
            <a href="<?= Url::to(['#']) ?>">
                Строительство
            </a>
            <ul>
                <li>
                    <a href="<?= Url::to(['#']) ?>">Пункт 1</a>
                </li>
                <li>
                    <a href="<?= Url::to(['#']) ?>">Пункт 2</a>
                </li>
            </ul>
        </li>
        <li class="<?= Yii::$app->request->pathInfo === 'gallery' ? 'active' : '' ?>">
            <a href="<?= Url::to(['/site/gallery']) ?>">
                Галерея
            </a>
        </li>
        <li class="<?= false ? 'active' : '' ?>">
            <a href="<?= Url::to(['#']) ?>">
                О компании
            </a>
            <ul>
                <li><a href="<?= Url::to(['/news']) ?>">Новости</a></li>
                <li><a href="<?= Url::to(['/articles']) ?>">Статьи</a></li>
                <li><a href="<?= Url::to(['/specials']) ?>">Акции</a></li>
                <li><a href="<?= Url::to(['/site/reviews']) ?>">Отзывы</a></li>
                <li><a href="<?= Url::to(['/site/search']) ?>">Поиск по сайту</a></li>
                <li><a href="<?= Url::to(['/site/faq']) ?>">FAQ</a></li>
                <li><a href="<?= Url::to(['/sitemap']) ?>">Карта сайта</a></li>
                <li><a href="<?= Url::to(['/404']) ?>">404</a></li>
                <li><a href="<?= Url::to(['/site/docs']) ?>">Документы</a></li>
            </ul>
        </li>
        <li class="<?= false ? 'active' : '' ?>">
            <a href="<?= Url::to(['#']) ?>">
                Покупателю
            </a>
            <ul>
                <li>
                    <a href="<?= Url::to(['#']) ?>">Пункт 1</a>
                </li>
                <li>
                    <a href="<?= Url::to(['#']) ?>">Пункт 2</a>
                </li>
            </ul>
        </li>
        <li class="<?= false ? 'active' : '' ?>">
            <a href="<?= Url::to(['#']) ?>">
                Услуги
            </a>
            <ul>
                <li>
                    <a href="<?= Url::to(['#']) ?>">Благоустройства</a>
                    <ul>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Газоны</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Бассейны</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Газоны</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['#']) ?>">Бассейны</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?= Url::to(['#']) ?>">Ворота</a>
                </li>
            </ul>
        </li>
        <li class="<?= Yii::$app->request->pathInfo === 'kontakty' ? 'active' : '' ?>">
            <a href="<?= Url::to(['/kontakty']) ?>">
                Контакты
            </a>
        </li>
    </ul>
</nav>

<?php $this->endBody() ?>
<script>
    const mmenu_footer = `<?= trim($this->context->renderPartial('@theme/views/_mmenu-footer')) ?>`;
</script>
<?= Yii::$app->settings->get('script', 'default') ?>
</body>
</html>
<?php $this->endPage() ?>
