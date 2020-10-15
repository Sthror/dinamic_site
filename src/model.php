<?php

function searchData(&$database, $url_key){ // ищем  совпадение с адресом
    foreach($database['pages'] as $key => $value){ // перебираем варианты
        if($value['url'] == $url_key){ // есть совпадение
            return $value; // вернули массив с данными
        }
    }
    return false; // ни чего не нашли
}
?>