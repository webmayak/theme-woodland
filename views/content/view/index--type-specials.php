<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 9/18/18
 * Time: 11:00 AM
 */

use pantera\content\models\ContentPage;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

$body = trim(html_entity_decode($model->body));
$body = trim(strip_tags($model->body));
$body = trim(str_replace('&nbsp;', '', $body));

$title = $model->title;
$description = mb_substr($body, 0, 300, 'utf-8') . (mb_strlen($body, 'utf-8') > 300 ? '...' : '');

Yii::$app->opengraph->set([
	'title' => $title,
	'description' => $description,
	'image' => $model->media ? Url::base(true) . $model->media->image(500, 400, false) : '',
]);

Yii::$app->seo->setTitle($title);
Yii::$app->seo->setDescription($description);

$this->params['breadcrumbs'][] = ['label'=>'Акции', 'url'=>Url::to(['/specials'])];
$this->params['breadcrumbs'][] = $title;

/* @var $this View */
/* @var $model ContentPage */
?><div class="specials-page">
	<h1 class="title-home">
	    <?= Yii::$app->seo->getH1() ?>
	</h1>
	<div class="specials-page__summary">
		<div class="specials-page__date"><?= Yii::$app->formatter->asDate($model->created_at) ?></div>
		<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
		<script src="https://yastatic.net/share2/share.js"></script>
		<div class="specials-page__share">
			<div class="specials-page__share-label">Рассказать друзьям</div>
			<div class="specials-page__share-buttons">
				<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter,whatsapp,telegram"></div>
			</div>
		</div>
	</div>
	<?php if ($model->media && $model->media->issetMedia()) : ?>
		<div class="specials-page__image">
		    <?= Html::img($model->media->image(500, 400, false), ['class' => 'img-thumbnail']) ?>
		</div>
	<?php endif; ?>
	<?php if ($model->body) : ?>
	    <div class="specials-page__body editor-content editor-content__page">
	        <?= $model->body ?>
	    </div>
	<?php endif; ?>
</div>
