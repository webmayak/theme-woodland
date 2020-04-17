<div class="contact-item contact-item--sm mb-3">
    <div class="contact-item__icon-wrap">
        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" fill="currentColor" aria-hidden="true" role="presentation" focusable="false">
            <use xlink:href="/images/sprite.svg#icon-tel"/>
        </svg>
    </div>
    <div>
        <div class="contact-item__key">Телефон:</div>
        <div class="contact-item__value">
            <?php
            $phone_sales_department = Yii::$app->contactsManager->get('phone_sales_department');
            $phone_hotline = Yii::$app->contactsManager->get('phone_hotline');
            $showDropdown = $phone_sales_department || $phone_hotline;
            ?>
            <div class="dropdown">
                <button class="contact-item__toggle<?php if ($showDropdown) : ?> dropdown-toggle<?php endif; ?>" type="button"<?php if ($showDropdown) : ?> data-toggle="dropdown"<?php endif; ?>>
                    <?= Yii::$app->contactsManager->get('phone_main') ?><?php if ($showDropdown) : ?> <i class="fa fa-chevron-down"></i><?php endif; ?>
                </button>
                <?php if ($showDropdown) : ?>
                    <ul class="tel-dropdown dropdown-menu">
                        <?php if ($phone_sales_department) : ?>
                            <li>
                                Отдел Продаж:
                                <a href="tel:<?= $phone_sales_department ?>"><?= $phone_sales_department ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if ($phone_hotline) : ?>
                            <li>
                                Горячая Линия:
                                <a href="tel:<?= $phone_hotline ?>"><?= $phone_hotline ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>
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
        <div class="contact-item__value"><?= Yii::$app->contactsManager->get('email') ?></div>
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
        <div class="contact-item__value"><?= Yii::$app->contactsManager->get('address') ?></div>
    </div>
</div>

<a class="btn btn-primary btn-lg d-block m-auto ladda-button open-lead-modal" href="/leads/default/modal?key=callMe" data-target="#w2-callMe" data-toggle="modal" data-style="zoom-in">
    <span class="ladda-label">Заказать обратный звонок</span>
</a>
