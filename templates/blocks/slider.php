<?php
$arSlider = [
    ['SRC' => '../assets/img/bytovka1.png', 'TITLE' => 'Строительные бытовки недорого!', 'DESCRIPTION' => ''],
    ['SRC' => '../assets/img/bytovka2.png', 'TITLE' => 'Строительные бытовки недорого!', 'DESCRIPTION' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'],
    ['SRC' => '../assets/img/bytovka3.png', 'TITLE' => 'Строительные бытовки недорого!', 'DESCRIPTION' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку пост-охраны'],
    ['SRC' => '../assets/img/bytovka4.png', 'TITLE' => 'Строительные бытовки недорого!', 'DESCRIPTION' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку под склад'],
    ['SRC' => '../assets/img/bytovka5.png', 'TITLE' => 'Строительные бытовки недорого!', 'DESCRIPTION' => 'Компания "Бытовки-Сервис" предлагает взять в аренду офисную бытовку'],
    ['SRC' => '../assets/img/bytovka6.png', 'TITLE' => 'Строительные бытовки недорого!', 'DESCRIPTION' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку-раздевалку'],
];
?>
<div class="main_slider-wrapper">
    <div class="grid-container">
        <div class="grid-x">
            <div class="main_slider">
                <?php foreach ($arSlider as $slide) : ?>
                    <div class="main_slider-item"><img src="<?= $slide['SRC'] ?>" alt="" title="">
                        <div class="main_slider-substrate">
                            <div class="main_substrate-heading"><?= $slide['TITLE'] ?></div>
                            <div class="main_substrate-description"><?= $slide['DESCRIPTION'] ?></div>
                            <div class="main_substrate-button"><a class="btn_pink" href="#">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>