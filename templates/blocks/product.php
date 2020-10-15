<?php
$arProduct = [
    'IMG' => array(
        '../assets/img/preview1.png',
        '../assets/img/preview2.png',
        '../assets/img/preview3.png',
        '../assets/img/preview4.png',
        '../assets/img/preview5.png',
        '../assets/img/preview6.png'
    ),
    'TITLE' => 'Бытовка склад',
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
    'PRICE' => '6 000',
    'PRICE_3' => '5 500',    
]
?>

<div class="card_bytovka-wrapper">
    <div class="grid-container">
        <div class="card_bytovka-item">
            <div class="card_bytovka-main">
                <div class="card_bytovka-img">
                    <div class="card_bytovka-min-rent">Минимальный срок аренды - <span> 30 дней</span></div>
                    <div class="card_bytovka-for slider-dots">
                        <?php foreach ($arProduct['IMG'] as $img) : ?>
                            <a data-fancybox="sklad" href="<?= $img ?>" title="">
                                <img src="<?= $img ?>" alt="" title="">
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <div class="card_bytovka-nav">
                        <?php foreach ($arProduct['IMG'] as $img) : ?>
                            <div class="card_bytovka-nav-item">
                                <div class="card_bytovka-nav-wrap"><img src="<?= $img ?>" alt="" title=""></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="card_bytovka-content">
                    <div class="card_bytovka-price">Цена аренды:<span><?= $arProduct['PRICE'] ?> Р/мес</span></div>
                    <div class="card_bytovka-rent">Аренда от трех бытовок:<span><?= $arProduct['PRICE_3'] ?> Р/мес</span></div>
                    <div class="card_bytovka-link"><a class="btn_pink" href="#" data-open="popup_order">Заказать</a></div>
                    <div class="card_bytovka-gabarits">Размеры: <?= $arProduct['SIZE'] ?></div>
                    <div class="card_bytovka-text"><?= $arProduct['DESCRIPTION'] ?></div>
                    <div class="card_bytovka-characteristics">
                        <ul class="characteristics">
                            <?php foreach ($arProduct['OPTIONS'] as $options) : ?>
                                <li><?= $options ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="card_bytovka-advantages">
                        <ul class="adv">
                            <li>Залога нет</li>
                            <li>Предоплата от двух месяцев</li>
                        </ul>
                    </div><a class="card_bytovka-download" href="#" alt="" title="">Скачать договор аренды бытовки-склада</a>
                </div>
            </div>
            <div class="card_bytovka-info">
                <div class="card_bytovka-video">
                    <div class="video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/dNZb_KtKhTc&amp;showinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="card_bytovka-calculator">
                    <?php
                    include("./templates/blocks/delivery-calculator.php");
                    ?>
                </div>
                <?php
                include("./templates/blocks/additional.php");
                ?>
            </div>
        </div>
    </div>
</div>
</div>