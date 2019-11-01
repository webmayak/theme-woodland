<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/8/18
 * Time: 12:02 PM
 */

use common\modules\catalog\models\CatalogCategory;
use pantera\leads\widgets\form\LeadForm;
use yii\helpers\Url;
use yii\web\View;

/* @var $this View */
/* @var $catalogRoot CatalogCategory */
/* @var $servicesRoot CatalogCategory */
/* @var $calculatorRoot CatalogCategory */
/* @var $category CatalogCategory */
?>
<div class="megamenu clearfix">
    <div class="container">
        <nav class="wsmenu">
            <ul class="wsmenu-list">
                <li class="hidden-xs hidden-sm">
                    <a class="navtext" href="<?= Url::to(['/']) ?>">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <?php
                $catalogIsActive = preg_match('/^(catalog|brands|documenty-certificaty-rezultaty-himicheskih-issledovanii)/', Yii::$app->request->pathInfo);
                $brandsIsActive = preg_match('/^brands/', Yii::$app->request->pathInfo);
                ?>
                <li class="<?= $catalogIsActive ? 'active' : '' ?>" id="main-menu-catalog">
                    <a href="<?= Url::to(['/catalog']) ?>" class="navtext">
                        Каталог
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?= Url::to(['/catalog/preparaty-dlya-lechenia-gepatita-c']) ?>">Препараты от Гепатита C</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/catalog/preparaty-dlya-lechenia-gepatita-b']) ?>">Препараты от Гепатита B</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/catalog/preparaty-dlya-lechenia-vich']) ?>">Препараты от ВИЧ</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/brands']) ?>">Список брендов</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/documenty-certificaty-rezultaty-himicheskih-issledovanii']) ?>">Сертификаты и документы</a>
                        </li>
                    </ul>
                    <?php if (0 && $this->beginCache('megamenu-dropdown', ['duration' => 86400])): ?>
                    <?= $this->render('_dropdown', [
                        'categories' => $catalogRoot->getChildren()->isInMenu()->all(),
                    ]) ?>
                    <?php $this->endCache(); endif; ?>
                </li>
                <?php if (0): ?>
                <li class="<?= preg_match('/^price/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/price']) ?>">
                        Цена
                    </a>
                </li>
                <?php endif; ?>
                <li class="<?= preg_match('/^article$/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/article']) ?>">
                        О гепатите и ВИЧ
                    </a>
                </li>
                <li class="<?= preg_match('/^lechenie/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/lechenie']) ?>">
                        Лечение
                    </a>
                </li>
                <li class="<?= preg_match('/^news$/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/news']) ?>">
                        Новости
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="<?= Url::to(['/news/gepatit-c']) ?>">Новости Гепатит C</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/news/gepatit-b']) ?>">Новости Гепатит B</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/news/aid']) ?>">Новости ВИЧ</a>
                        </li>
                    </ul>
                </li>
                <?php if (0): ?>
                <?php
                $okompaniiIsActive = preg_match('/^o-kompanii/', Yii::$app->request->pathInfo);
                $sotrudnikiIsActive = preg_match('/^o-kompanii\/nashi-sotrudniki/', Yii::$app->request->pathInfo);
                $docsIsActive = preg_match('/^o-kompanii\/dokumenty/', Yii::$app->request->pathInfo);
                ?>
                <li class="<?= $okompaniiIsActive || $sotrudnikiIsActive ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/o-kompanii']) ?>">
                        О нас
                    </a>
                    <ul class="sub-menu">
                        <li class="<?= $sotrudnikiIsActive ? 'active' : '' ?>">
                            <a href="<?= Url::to(['/o-kompanii/nashi-sotrudniki']) ?>">Наша команда</a>
                        </li>
                        <li class="<?= $docsIsActive ? 'active' : '' ?>">
                            <a class="navtext" href="<?= Url::to(['/o-kompanii/dokumenty']) ?>">Лицензии и сертификаты</a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <li class="<?= preg_match('/^reviews/', Yii::$app->request->pathInfo) ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/reviews']) ?>">Отзывы</a>
                </li>
                <?php
                $faqIsActive = preg_match('/^faq/', Yii::$app->request->pathInfo);
                ?>
                <li class="<?= $faqIsActive ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/faq']) ?>">Вопрос-ответ</a>
                </li>
                <li class="<?= Yii::$app->request->pathInfo === 'dostavka' ? 'active' : '' ?>">
                    <a href="<?= Url::to(['/dostavka']) ?>" class="navtext">
                        Доставка
                    </a>
                </li>
                <li class="<?= Yii::$app->request->pathInfo === 'video' ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/video']) ?>">                        
                        Видео
                    </a>
                </li>
                <li class="<?= Yii::$app->request->pathInfo === 'specials' ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/specials']) ?>">                        
                        Акции
                    </a>
                </li>
                <li class="<?= Yii::$app->request->pathInfo === 'contacts' ? 'active' : '' ?>">
                    <a class="navtext" href="<?= Url::to(['/contacts']) ?>">
                        Контакты
                    </a>
                </li>
                <li class="megamenu-search hidden-sm hidden-xs">
                    <style type="text/css">
                        #ya-site-form0,#ya-site-form0 .ya-site-form__form,#ya-site-form0 .ya-site-form__input,#ya-site-form0 .ya-site-form__input-text,#ya-site-form0 .ya-site-form__submit,#ya-site-form0 .ya-site-form__search-precise{font-size:12px!important;color:#000!important}#ya-site-form0 .ya-site-form__form-form{display:block}#ya-site-form0 .ya-site-form__form-form,#ya-site-form0 .ya-site-form__input,#ya-site-form0 .ya-site-form__search-precise,#ya-site-form0 .ya-site-form__search-precise__radio,#ya-site-form0 .ya-site-form__gap,#ya-site-form0 .ya-site-form__gap-i,#ya-site-form0 .ya-site-form__logo-img{margin:0;padding:0}#ya-site-form0{margin:0!important;padding:0!important}#ya-site-form0 .ya-site-form__logo-wrap{width:65px;vertical-align:top;border-collapse:collapse}#ya-site-form0 .ya-site-form__logo{display:block;width:52px;margin:0;padding:0 6px 0 0;text-decoration:none}#ya-site-form0 .ya-site-form__logo-img{width:52px;height:21px;border:0!important}#ya-site-form0 .ya-site-form__search-wrap{border-collapse:collapse}#ya-site-form0 .ya-site-form__search{font-size:12px!important;width:100%}#ya-site-form0 .ya-site-form__search-input,#ya-site-form0 .ya-site-form__search-precise,{border:0}#ya-site-form0 .ya-site-form__search-input{padding:6px}#ya-site-form0 .ya-site-form__search-input-layout,#ya-site-form0 .ya-site-form__search-input-layout-l,#ya-site-form0 .ya-site-form__search-input-layout-r{font-size:12px!important;padding:0;vertical-align:middle;border:0;border-collapse:collapse}#ya-site-form0 .ya-site-form__search-input-layout,#ya-site-form0 .ya-site-form__search-input-layout-l{width:100%}#ya-site-form0 .ya-site-form__search-precise{padding:0 18px 5px 6px;text-align:left;vertical-align:top}#ya-site-form0 .ya-site-form__search-precise-i{white-space:nowrap}#ya-site-form0 .ya-site-form__search-precise__radio{width:auto;margin:0 .3em 0 0;vertical-align:middle;background:none}#ya-site-form0 .ya-site-form__search-precise__label{margin:0 .4em 0 0;padding:0;vertical-align:middle}#ya-site-form0 .ya-site-form__input-text{width:100%;margin:0!important;cursor:text;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;background-color:#fff;border:1px solid #7f9db9;outline-style:none;-webkit-appearance:textfield}#ya-site-form0 .ya-site-form__input-text_type_hint{background-repeat:no-repeat;background-position:.2em 50%}#ya-site-form0 .ya-site-form__submit{display:block;width:auto;margin:0 0 0 5px}#ya-site-form0 .ya-site-form__arrow-wrap{overflow:hidden;width:30px;padding:0;vertical-align:middle}#ya-site-form0 .ya-site-form__arrow{position:relative}#ya-site-form0 .ya-site-form__arrow-a{position:absolute;top:50%;right:0;width:0;height:0;margin-top:-59px;border:solid transparent;border-width:59px 0 59px 30px;-moz-border-end-style:dotted}#ya-site-form0 .ya-site-form__wrap{width:100%;table-layout:fixed;border-collapse:collapse}#ya-site-form0 .ya-site-form__gap{border:0}#ya-site-form0 .ya-site-form__gap-i{width:9em}#ya-site-form0.ya-site-form_arrow_yes .ya-site-form__search-input{padding-right:0}#ya-site-form0.ya-site-form_logo_left .ya-site-form__logo{margin-top:4px;margin-left:5px}#ya-site-form0.ya-site-form_logo_top .ya-site-form__logo{display:block;margin:6px 0 0 6px}#ya-site-form0 .ya-site-form__submit_type_image{width:19px;height:15px;outline:none;cursor:pointer;border:0}#ya-site-form0 .ya-site-form__submit_type_image { background: url(https://site.yandex.net/v2.0/i/search.png) no-repeat }#ya-site-form0 .ya-site-form__form .ya-site-form__input-text::-webkit-input-placeholder{color:#000000;}#ya-site-form0 .ya-site-form__form .ya-site-form__input-text:-moz-placeholder{color:#000000;}#ya-site-form0 .ya-site-form__form .ya-site-form__input-text::-moz-placeholder{color:#000000;}#ya-site-form0 .ya-site-form__form .ya-site-form__input-text:-ms-input-placeholder{color:#000000;}#ya-site-form0 .ya-site-form__form * { font-size: 12px !important }#ya-site-form0 .ya-site-form__form .ya-site-form__input-text { font-style: normal!important }#ya-site-form0 .ya-site-form__form .ya-site-form__input-text { font-weight: normal!important }#ya-site-form0 .ya-site-form__form .ya-site-form__input-text { color: #000000!important }#ya-site-form0 .ya-site-form__form .ya-site-form__input-text { border-color: #7f9db9!important }#ya-site-form0 .ya-site-form__form .ya-site-form__input-text:focus { border-color: #7f9db9!important }#ya-site-form0 .ya-site-form__form .ya-site-form__input-text { background-color: #ffffff!important }#ya-site-form0 .ya-site-form__search, #ya-site-form0 .ya-site-form__search td, #ya-site-form0 .yaform__precise-i { background-color: transparent !important }#ya-site-form0 .ya-site-form__search-precise__label { color:#000000 !important }#ya-site-form0 .ya-site-form__arrow-a { border-left-color: transparent }

                        #ya-site-form0 {margin-top: 5px !important;}
                        .megamenu-search #ya-site-form0 .ya-site-form__form .ya-site-form__input-text {
                            border-color: #fff !important;
                        }
                    </style>
                    <div class="ya-site-form ya-site-form_inited_no" data-bem="{&quot;action&quot;:&quot;https://indiavir.com/search&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:12,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Поиск по indiavir.com&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_self&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:3,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2357615,&quot;input_fg&quot;:&quot;#000000&quot;,&quot;input_bg&quot;:&quot;#ffffff&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:&quot;Поиск..&quot;,&quot;input_placeholderColor&quot;:&quot;#000000&quot;,&quot;input_borderColor&quot;:&quot;#7f9db9&quot;}"><form action="https://yandex.ru/search/site/" method="get" target="_self" accept-charset="utf-8"><input type="hidden" name="searchid" value="2357615"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value=""/><input type="search" name="text" value=""/><input type="submit" value="Найти"/></form></div><style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>
                </li>
            </ul>
            <ul class="additional-list wsmenu-list visible-xs visible-sm">
                
            </ul>
        </nav>
    </div>
</div>
