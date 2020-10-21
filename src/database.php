<?php
$database = array(
    'pages' => array(// блок данных страниц
        array(
            'url' => '/index.php',// адрес (урл)
            'tpl' => 'main.php', // файл который формирует шаблон
            'title' => 'Главная страница сайта бытовок', // тайтл старницы
            'text' => 'тут может быть какой-то текст для размещения на главной странице', // текст )
        ),
        array(
            'url' => '/contacts.php',
            'tpl' => 'contacts.php',
            'title' => 'Контакты',
            'text' => 'тут может быть какой-то текст для размещения на странице контактов',
        ),
        array(
            'url' => '/catalog.php',
            'tpl' => 'catalog.php',
            'title' => 'Наш каталог бытовок',
            'text' => 'тут может быть какой-то текст для размещения на странице каталога бытовок',
        ),
        array(
            'url' => '/bytovka.php',
            'tpl' => 'bytovka.php',
            'title' => 'Какая-то бытовка',
            'text' => 'тут может быть какой-то текст для размещения на странице продукта',
        ),
    ),
    'category' => array(// данные отдельных категорий
        array(
            'id' => 1,     // id отдельной категории       
            'title' => 'Аренда бытовок в Видном',  // тайтл старницы
            'name' => 'Аренда бытовок в Видном', // h1 старницы
        ),
        array(
            'id' => 2,            
            'title' => 'Аренда бытовок в Домодедово',
            'name' => 'Аренда бытовок в Домодедово',
        ),
    ),
    'item' => array(//данные по размеру
        array(
            'id' => 1,            
            'title' => 'Блок контейнер 2,5 x 6 м',
            'name' => 'Блок контейнер 2,5 x 6 м',
            'price' => '452', // цена контейнера таких размеров
        ),
        array(
            'id' => 2,            
            'title' => 'Блок контейнер 2 x 3 м',
            'name' => 'Блок контейнер 2 x 3 м',
            'price' => '52342',
        ),
    ),
    'product' => array(
        array(
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
            'PRICE_3' => '5 500',       
        ),
        array(
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
            'PRICE_3' => '5 500',        
        ),
        array(
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
            'PRICE_3' => '5 500',        
        ),
        array(
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
            'PRICE_3' => '5 500',        
        ),
    ),
);
