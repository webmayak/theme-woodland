<?php

use pantera\leads\widgets\form\LeadForm;
use pantera\faq\models\FaqCategories;
use pantera\faq\models\FaqQuestions;
use yii\helpers\Html;
use yii\web\View;

$categories = FaqCategories::find()->all();

/* @var $this View */
/* @var $links array */
?><main class="page-site-faq__content">
    <h1><?= $this->title ?></h1>
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <ul class="page-site-faq__menu">
                <?php foreach ($categories as $category) : ?>
                    <?php if ($questions = $category->getActiveFaqQuestions()->all()) : ?>
                    <li>
                        <a href="#faq-section-<?= $category->id ?>"><?= $category->title ?></a>
                    </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-xl-9 col-lg-8">
            <?php foreach ($categories as $category) : ?>
                <?php if ($questions = $category->getActiveFaqQuestions()->all()) : ?>
                <div id="faq-section-<?= $category->id ?>" class="page-site-faq__section">
                    <div class="page-site-faq__section-title"><?= $category->title ?></div>
                    <div id="accordion-<?= $category->id ?>">
                        <?php foreach ($questions as $question) : ?>
                        <div class="faq-item">
                            <div class="faq-item__question">
                                <button class="faq-item__question-btn collapsed" data-toggle="collapse" data-target="#accordion-<?= $category->id ?>-<?= $question->id ?>">
                                    <?= $question->title ?>
                                </button>
                            </div>
                            <div id="accordion-<?= $category->id ?>-<?= $question->id ?>" class="collapse" data-parent="#accordion-<?= $category->id ?>">
                                <div class="faq-item__answer">
                                    <?= $question->body ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</main>

</div><!--закрываем .container -->

<?= LeadForm::widget([
    'mode' => LeadForm::MODE_INLINE,
    'key' => 'question',
]) ?>
