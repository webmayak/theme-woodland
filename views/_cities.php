<?php

use common\modules\catalog\models\CatalogCategory;

$citiesRoot = CatalogCategory::find()->andWhere(['id' => 251])->one();
$cities = $citiesRoot->childrenActive;

if ($cities) : ?>
    <div class="cities-block light-bg">
        <div class="container">
            <h2>Города</h2>
            <div class="cities-block__list">
                <ul>
                    <?php foreach ($cities as $city) : ?>
                        <li>
                            <a href="<?= $city->present()->getUrl() ?>">
                                <?= $city->name ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>
