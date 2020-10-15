<?php
$arCatalog = [
    [
        'IMG' => array(
            '../assets/img/preview1.png',
            '../assets/img/preview2.png',
            '../assets/img/preview3.png',
            '../assets/img/preview4.png',
            '../assets/img/preview5.png',
            '../assets/img/preview6.png'
        ),
        'TITLE' => 'Бытовка склад пример 1',
        'SIZE' => '2400 Х 6000',
        'DESCRIPTION' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.',
        'OPTIONS' => array(
            'Отделка оргалит',
            'Усиленный каркас',
            'Стальные решетки на окнах',
            'Электропроводка',
            'Освещение',
            'Наружная обшивка оцинкованный профнастил',
            'Металлическая дверь',
            'Пол – доска окрашенная',
            'Возможность постановки бытовки на бытовку',
        ),
        'CITY' => '&lt; город в Предложном падеже&gt;',
        'PRICE' => '6 500 руб',        
    ],
    [
        'IMG' => array(
            '../assets/img/preview1.png',
            '../assets/img/preview2.png',
            '../assets/img/preview3.png',
            '../assets/img/preview4.png',
            '../assets/img/preview5.png',
            '../assets/img/preview6.png'
        ),
        'TITLE' => 'Бытовка склад пример 2',
        'SIZE' => '2400 Х 6000',
        'DESCRIPTION' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.',
        'OPTIONS' => array(
            'Отделка оргалит',
            'Усиленный каркас',
            'Стальные решетки на окнах',
            'Электропроводка',
            'Освещение',
            'Наружная обшивка оцинкованный профнастил',
            'Металлическая дверь',
            'Пол – доска окрашенная',
            'Возможность постановки бытовки на бытовку',
        ),
        'CITY' => '&lt; город в Предложном падеже&gt;',
        'PRICE' => '6 501 руб',        
    ],
    [
        'IMG' => array(
            '../assets/img/preview1.png',
            '../assets/img/preview2.png',
            '../assets/img/preview3.png',
            '../assets/img/preview4.png',
            '../assets/img/preview5.png',
            '../assets/img/preview6.png'
        ),
        'TITLE' => 'Бытовка склад пример 3',
        'SIZE' => '2400 Х 6000',
        'DESCRIPTION' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.',
        'OPTIONS' => array(
            'Отделка оргалит',
            'Усиленный каркас',
            'Стальные решетки на окнах',
            'Электропроводка',
            'Освещение',
            'Наружная обшивка оцинкованный профнастил',
            'Металлическая дверь',
            'Пол – доска окрашенная',
            'Возможность постановки бытовки на бытовку',
        ),
        'CITY' => '&lt; город в Предложном падеже&gt;',
        'PRICE' => '6 502 руб',        
    ],
    [
        'IMG' => array(
            '../assets/img/preview1.png',
            '../assets/img/preview2.png',
            '../assets/img/preview3.png',
            '../assets/img/preview4.png',
            '../assets/img/preview5.png',
            '../assets/img/preview6.png'
        ),
        'TITLE' => 'Бытовка склад пример 4',
        'SIZE' => '2400 Х 6000',
        'DESCRIPTION' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.',
        'OPTIONS' => array(
            'Отделка оргалит',
            'Усиленный каркас',
            'Стальные решетки на окнах',
            'Электропроводка',
            'Освещение',
            'Наружная обшивка оцинкованный профнастил',
            'Металлическая дверь',
            'Пол – доска окрашенная',
            'Возможность постановки бытовки на бытовку',
        ),
        'CITY' => '&lt; город в Предложном падеже&gt;',
        'PRICE' => '6 503 руб',        
    ],
];
?>

<div class="preview_bytovka-wrapper">
    <div class="grid-container">
        <?php foreach ($arCatalog as $item) : ?>
            <div class="preview_bytovka-item">
                <div class="preview_bytovka-main">
                    <div class="preview_bytovka-img">
                        <div class="preview_bytovka-slider">
                            <?php foreach ($item['IMG'] as $img) : ?>
                                <a data-fancybox="sklad" href="<?= $img ?>">
                                    <img src="<?= $img ?>" alt="" title="">
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="preview_bytovka-content"><a class="preview_bytovka-heading" href="#"><?= $item['TITLE'] ?></a>
                        <div class="preview_bytovka-gabarits"><?= $item['SIZE'] ?></div>
                        <div class="preview_bytovka-text"><?= $item['DESCRIPTION'] ?></div>
                        <div class="preview_bytovka-characteristics">
                            <ul class="characteristics">
                                <?php foreach ($item['OPTIONS'] as $options) : ?>
                                    <li><?= $options ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div>Доступно для заказа в <?= $item['CITY'] ?></div>
                        <div class="preview_bytovka-order">
                            <div class="preview_bytovka-price">Цена: <span><?= $item['PRICE'] ?></span></div>
                            <div class="preview_bytovka-link"><a class="btn_pink" href="#" data-open="popup_order">Заказать</a></div>
                        </div>
                        <a class="preview_bytovka-download" href="#" alt="" title=""></a>
                    </div>
                </div>
                <?php
                include("./templates/blocks/additional.php");
                ?>
            </div>
        <?php endforeach; ?>
        <div class="grid-x">
            <div class="preview_bytovka-more"><span class="btn_blue">Показать еще</span></div>
        </div>
    </div>
</div>