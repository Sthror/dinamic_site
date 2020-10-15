<div class="price">
    <div class="grid-container">
        <div class="price_heading">
            <div class="heading">Цены на аренду блок-контейнеров</div>
            <div class="link-more"><a href="/price.php">Перейти в раздел</a></div>
        </div>
        <div class="price_wrapper">
            <?php
            $itemsRent = $database['item'];
            foreach ($itemsRent as $key => $value) : // перебираем подмассивы, получаем повторяющийся html код?> 
                <div class="price_item">
                    <div class="price_img">
                        <a data-fancybox="price" href="../assets/img/price.jpg" title="">
                            <img src="../assets/img/price.jpg" alt="" title="">
                            <a class="lupa" data-fancybox="price" href="../assets/img/price.jpg">
                            </a>
                        </a>
                    </div>
                    <div class="price_content">
                        <div class="price_description">
                            <div class="price_title"><?= $value['title'] //выводим заголовок?></div>
                            <div class="price_text">
                                <div><span>Наружная обшивка: </span>металлический каркас оцинкованный профнастил С-8</div>
                                <div><span>Внутренняя отделка: </span>ДВП утепление 50 мм электрика</div>
                            </div>
                        </div>
                        <div class="price_summ"><span><?= $value['price'] //выводим цену?></span> Р/мес</div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="grid-x">
            <div class="price_link"><span class="btn_blue">Показать еще</span></div>
        </div>
    </div>
</div>