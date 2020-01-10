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
    <meta name="theme-color" content="#49d074">
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

<nav id="mmenu-nav">
    <ul>
        <?php
        $catalogIsActive = preg_match('/catalog/', Yii::$app->request->pathInfo);
        $brandsIsActive = preg_match('/^brands/', Yii::$app->request->pathInfo);
        ?>
        <li class="<?= $catalogIsActive ? 'active' : '' ?>" id="main-menu-catalog">
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

        <?php if ($parent = \common\modules\catalog\models\CatalogCategory::findOne(241)) : ?>
            <li class="<?= Yii::$app->request->pathInfo === $parent->slug ? 'active' : '' ?>">
                <a href="<?= $parent->present()->getUrl() ?>">
                    <?= Html::encode($parent->name) ?>
                </a>
                <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                    <ul>
                        <?php foreach ($childs as $child): ?>
                            <li>
                                <?= Html::a($child->name, $child->present()->getUrl()) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endif; ?>

        <?php if ($parent = \common\modules\catalog\models\CatalogCategory::findOne(235)) : ?>
            <li class="<?= Yii::$app->request->pathInfo === $parent->slug ? 'active' : '' ?>">
                <a href="<?= $parent->present()->getUrl() ?>">
                    <?= Html::encode($parent->name) ?>
                </a>
                <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                    <ul>
                        <?php foreach ($childs as $child): ?>
                            <li>
                                <?= Html::a($child->name, $child->present()->getUrl()) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endif; ?>

        <?php if ($parent = \common\modules\catalog\models\CatalogCategory::findOne(237)) : ?>
            <li class="<?= Yii::$app->request->pathInfo === $parent->slug ? 'active' : '' ?>">
                <a href="<?= $parent->present()->getUrl() ?>">
                    <?= Html::encode($parent->name) ?>
                </a>
                <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                    <ul>
                        <?php foreach ($childs as $child): ?>
                            <li>
                                <?= Html::a($child->name, $child->present()->getUrl()) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endif; ?>

        <?php if ($parent = \common\modules\catalog\models\CatalogCategory::findOne(238)) : ?>
            <li class="<?= Yii::$app->request->pathInfo === $parent->slug ? 'active' : '' ?>">
                <a href="<?= $parent->present()->getUrl() ?>">
                    <?= Html::encode($parent->name) ?>
                </a>
                <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                    <ul>
                        <?php foreach ($childs as $child): ?>
                            <li>
                                <?= Html::a($child->name, $child->present()->getUrl()) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endif; ?>

        <?php if ($parent = \common\modules\catalog\models\CatalogCategory::findOne(234)) : ?>
            <li class="<?= Yii::$app->request->pathInfo === $parent->slug ? 'active' : '' ?>">
                <a href="<?= $parent->present()->getUrl() ?>">
                    <?= Html::encode($parent->name) ?>
                </a>
                <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                    <ul>
                        <?php foreach ($childs as $child): ?>
                            <li>
                                <?= Html::a($child->name, $child->present()->getUrl()) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endif; ?>

        <?php if ($parent = \common\modules\catalog\models\CatalogCategory::findOne(243)) : ?>
            <li class="<?= Yii::$app->request->pathInfo === $parent->slug ? 'active' : '' ?>">
                <a href="<?= $parent->present()->getUrl() ?>">
                    <?= Html::encode($parent->name) ?>
                </a>
                <?php if ($childs = $parent->getChildren()->isInMenu()->isActive()->all()) : ?>
                    <ul>
                        <?php foreach ($childs as $child): ?>
                            <li>
                                <?= Html::a($child->name, $child->present()->getUrl()) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </li>
        <?php endif; ?>
    </ul>
</nav>

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

<?php $this->endBody() ?>
<script>
    const mmenu_footer = `<?= trim($this->context->renderPartial('@theme/views/_mmenu-footer')) ?>`;
</script>
<?= Yii::$app->settings->get('script', 'default') ?>
</body>
</html>
<?php $this->endPage() ?>
