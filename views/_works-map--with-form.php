<?php

    use pantera\leads\widgets\form\LeadForm;

?>

<div class="works-map">
    <div class="container">
        <h2>Карта выполненых объектов</h2>
    </div>
    <div class="works-map__map-wrap">
        <iframe src="https://yandex.ru/map-widget/v1/-/CGXCfH1r"></iframe>
        <div class="works-map__form">
            <div class="container">
                <div class="works-map__form-block">
                    <div class="works-map__form-title">Заказать бесплатный звонок</div>
                    <?= LeadForm::widget([
                        'key' => 'order',
                        'mode' => LeadForm::MODE_INLINE,
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
