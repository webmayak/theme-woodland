<?php

    use pantera\leads\widgets\form\LeadForm;

?>

<div class="works-map">
    <div class="container">
        <h2>Карта выполненных объектов</h2>
    </div>
    <div class="works-map__map-wrap">
        <div class="works-map__form">
            <div class="container">
                <div class="works-map__form-block alert alert-dismissible fade show">
                    <div class="works-map__form-title">Заказать бесплатный звонок</div>
                    <?= LeadForm::widget([
                        'key' => 'orderOnMap',
                        'mode' => LeadForm::MODE_INLINE,
                    ]) ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
        <iframe src="https://yandex.ru/map-widget/v1/-/CGXCfH1r"></iframe>
    </div>
</div>
