<?php
if($_SERVER['SCRIPT_NAME'] == '/index.php'){ // получаем запрос на файл php
    printPage('/index.php', $database); // вызов функции котороая отправит запрос на подключение нужного шаблона
} elseif($_SERVER['SCRIPT_NAME'] == '/bytovka.php'){
    printPage('/bytovka.php', $database);
} elseif($_SERVER['SCRIPT_NAME'] == '/catalog.php'){
    printPage('/catalog.php', $database);
} elseif($_SERVER['SCRIPT_NAME'] == '/contacts.php'){
    printPage('/contacts.php', $database);
}

function  printPage($url_key, &$database){ // определяем функцию запроса шаблона
    $data =  searchData($database, $url_key); // получили данные для этого шаблона по адресу
    if(!empty($data) && file_exists(PATH_TPL.$data['tpl'])){ // проверка на существование      
        include_once(PATH_TPL.$data['tpl']); // подключаем искомый шаблон
    } else {
        die('в базе данных нет данных для вызываемой страницы'); // ни чего не нашли
    }
};

?>