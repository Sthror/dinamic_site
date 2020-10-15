<?php

define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']); //путь до текущей папки, скрипт выполнятся файлом index.php, значит путь до корня сайта
define('PATH_SRC', ROOT_PATH.'/src/'); // путь до папки /src/
define('PATH_TPL', ROOT_PATH.'/templates/'); // путь до папки c шаблонами

$baseFiles = [];// массив файлов ядра, которые нужно подключать в программе

$baseFiles[] = PATH_SRC. 'database.php'; // в этом файле мы будем хранить контентные данные для страницы
$baseFiles[] = PATH_SRC. 'model.php'; // этот файл будет иметь функции для поиска нужной информации в database
$baseFiles[] = PATH_SRC. 'controller.php'; // этот файл будет реализовывать логику, связывать данные и шаблоны

// подключаем все файлы
foreach($baseFiles as $value){
    include_once($value);
}

?>