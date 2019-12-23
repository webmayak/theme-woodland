<div class="contact-item contact-item--sm mb-3">
    <div class="contact-item__icon-wrap">
        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
            <use xlink:href="/images/sprite.svg#icon-tel"/>
        </svg>
    </div>
    <div>
        <div class="contact-item__key">Телефон:</div>
        <div class="contact-item__value">
            <div class="dropdown">
                <button class="contact-item__toggle dropdown-toggle" type="button" data-toggle="dropdown">8-800-775-18-13 <i class="fa fa-chevron-down"></i></button>
                <ul class="tel-dropdown dropdown-menu">
                    <li>
                        Отдел Продаж:
                        <a href="tel:+74957751813">+7-495-775-18-13</a>
                    </li>
                    <li>
                        Горячая Линия:
                        <a href="tel:89267751813">8-926-775-18-13</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="contact-item contact-item--sm mb-3">
    <div class="contact-item__icon-wrap">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
            <use xlink:href="/images/sprite.svg#icon-email"/>
        </svg>
    </div>
    <div>
        <div class="contact-item__key">Email:</div>
        <div class="contact-item__value">fortuna-les@gmail.com</div>
    </div>
</div>

<div class="contact-item contact-item--sm mb-3">
    <div class="contact-item__icon-wrap">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
            <use xlink:href="/images/sprite.svg#icon-address"/>
        </svg>
    </div>
    <div>
        <div class="contact-item__key">Адрес:</div>
        <div class="contact-item__value">г. Москва, ул. Летчика Бабушкина, д. 123, оф. 244</div>
    </div>
</div>

<div class="mmenu__social">
    <div class="mmenu__social-title">Социальные сети</div>
    <ul>
        <li>
            <a class="social-link social-link--vk" href="<?= Yii::$app->contactsManager->get('social_vkontakte') ?>" target="_blank">
                <span class="sr-only">ВКонтакте</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-vk">
                </svg>
            </a>
        </li>
        <li>
            <a class="social-link social-link--fb" href="<?= Yii::$app->contactsManager->get('social_facebook') ?>" target="_blank">
                <span class="sr-only">Facebook</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-fb">
                </svg>
            </a>
        </li>
        <li>
            <a class="social-link social-link--youtube" href="<?= Yii::$app->contactsManager->get('social_youtube') ?>" target="_blank">
                <span class="sr-only">YouTube</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-youtube">
                </svg>
            </a>
        </li>
        <li>
            <a class="social-link social-link--instargam" href="<?= Yii::$app->contactsManager->get('social_instagram') ?>" target="_blank">
                <span class="sr-only">Instargam</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-instargam">
                </svg>
            </a>
        </li>
        <li>
            <a class="social-link social-link--ok" href="#" target="_blank">
                <span class="sr-only">OK</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-ok">
                </svg>
            </a>
        </li>
        <li>
            <a class="social-link social-link--tw" href="#" target="_blank">
                <span class="sr-only">Twitter</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
                    <use xlink:href="/images/sprite.svg#icon-tw">
                </svg>
            </a>
        </li>
    </ul>
</div>

<a class="btn btn-primary btn-lg d-block m-auto ladda-button open-lead-modal" href="/leads/default/modal?key=callMe" data-target="#w2-callMe" data-toggle="modal" data-style="zoom-in">
    <span class="ladda-label">Заказать обратный звонок</span>
</a>
