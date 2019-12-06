<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

//$this->title = $name;
$this->title = 'Страница не найдена';
$this->params['breadcrumbs'][] = 'Страница 404';

?>

<?php if (0): ?><h1>Упс! <?= $exception->statusCode . ' ' . Html::encode($message) ?>..</h1><?php endif; ?>
<h1><?= Html::encode($this->title) ?></h1>

<div class="text-center">

    <p>
    	<img style="max-width: 100%;" src="/images/404.png" alt="Страница не найдена" />
    </p>
    <p style="font-size: 16px; margin: 60px 0 30px;">
		Приносим извинения, но такой страницы не существует
	</p>
	<p>
	    <a class="btn btn-lg btn-success" href="/">Вернуться на главную</a>
	</p>
</div>

<br/><br/>
