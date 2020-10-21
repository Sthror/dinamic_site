<?php
$arCatalog = $database['product'];
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
                    <div class="preview_bytovka-content"><a class="preview_bytovka-heading" href="/bytovka.php"><?= $item['TITLE'] ?></a>
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
                        <a class="preview_bytovka-download" href="/bytovka.php" alt="" title=""></a>
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