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

<main class="page-404__content text-center">
    <h1><?= Html::encode($this->title) ?></h1>
    <img class="page-404__image" src="/images/404.png" alt="Страница не найдена">
    <div class="page-404__text">Приносим извинения, но такой страницы не существует</div>
	<a class="btn btn-lg btn-success" href="/">Вернуться на главную</a>
</main>
