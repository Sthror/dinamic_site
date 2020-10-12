<?php

/*
Задание 1: Задания с массивами
1a. Создайте массив $arr=['a', 'b', 'c']. Выведите значение массива на экран с помощью функции var_dump().
*/

$arr = ['a', 'b', 'c'];
var_dump($arr);



/*
1b. Выведите на экран содержимое первого, второго и третьего элементов массива $arr из предыдущего пункта.
*/

echo $arr[0], $arr[1], $arr[2];



/*
1c. Создайте массив $arr=['a', 'b', 'c', 'd'] и с его помощью выведите на экран строку 'a+b, c+d'.
*/

$arr = ['a', 'b', 'c', 'd'];
echo "<p>$arr[0] + $arr[1], $arr[2]+$arr[3]</p>";



/*
1d. Создайте массив $arr с элементами 2, 5, 3, 9. 
Умножьте первый элемент массива на второй, а третий элемент на четвертый. 
Результаты сложите, присвойте переменной $result. 
Выведите на экран значение этой переменной.
*/

$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result;



/*
1e. Заполните массив $arr числами от 1 до 5. Не объявляйте массив, а просто заполните его присваиванием $arr[] = новое значение.
*/

for ($i = 1; $i < 6; $i++) {
	$arr[] = $i;
}



/*
1f. Создайте массив $arr. Выведите на экран элемент с ключом 'c'. $arr = ['a'=>1, 'b'=>2, 'c'=>3];
*/

$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo $arr['c'];



/*
1g. Создайте массив $arr. Найдите сумму элементов этого массива. $arr = ['a'=>1, 'b'=>2, 'c'=>3];
*/

$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$result = 0;
foreach ($arr as $value) {
	$result += $value;
}
echo "<p>$result</p>";



/*
1h. Создайте массив заработных плат $arr. Выведите на экран зарплату Пети и Коли. 
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
*/

$arr = ['Коля' => '1000$', 'Вася' => '500$', 'Петя' => '200$'];
echo "<p>Зарплата Пети - " . $arr['Петя'] . ", Коли - " . $arr['Коля'] . "</p>";



/*
1i. Создайте ассоциативный массив дней недели. 
Ключами в нем должны служить номера дней от начала недели (понедельник - должен иметь ключ 1, вторник - 2 и т.д.). 
Выведите на экран текущий день недели.
*/

$curDay = 7;
$arNameDay = [
	1 => 'Понедельник',
	2 => 'Вторник',
	3 => 'Среда',
	4 => 'Четверг',
	5 => 'Пятница',
	6 => 'Суббота',
	7 => 'Воскресенье',
];
echo "<p>$arNameDay[$curDay]</p>";



/*
1j. Пусть теперь номер дня недели хранится в переменной $day, например там лежит число 3. 
Выведите день недели, соответствующий значению переменной $day.
*/

$day = 3;
$arNameDay = [
	1 => 'Понедельник',
	2 => 'Вторник',
	3 => 'Среда',
	4 => 'Четверг',
	5 => 'Пятница',
	6 => 'Суббота',
	7 => 'Воскресенье',
];
echo "<p>$arNameDay[$day]</p>";




/*
1k. Создайте многомерный массив $arr. С его помощью выведите на экран слова 'joomla', 'drupal', 'зеленый', 'красный'.
$arr = [
	'cms'=>['joomla', 'wordpress', 'drupal'],
	'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
*/

$arr = [
	'cms' => ['joomla', 'wordpress', 'drupal'],
	'colors' => ['blue' => 'голубой', 'red' => 'красный', 'green' => 'зеленый']
];

echo "<p>" . $arr['cms'][0] . ", " . $arr['cms'][2] . ", " . $arr['colors']['green'] . ", " . $arr['colors']['red'] . "</p>";



/*
1l. Создайте двумерный массив. 
Первые два ключа - это 'ru' и 'en'. 
Пусть первый ключ содержит элемент, являющийся массивом названий дней недели по-русски, а второй - по-английски. 
Выведите с помощью этого массива понедельник по-русски и среду по английски (пусть понедельник - это первый день).
*/

$arr = [
	'ru' => ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'],
	'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
];
echo "<p>" . $arr['ru'][0] . " и " . $arr['en'][2] . "</p>";



/*
1m. Пусть теперь в переменной $lang хранится язык (она принимает одно из значений или 'ru', или 'en' - либо то, либо то), а в переменной $day - номер дня. 
Выведите словом день недели, соответствующий переменным $lang и $day. То есть: если, к примеру, $lang = 'ru' и $day = 3 - то выведем 'среда'.
*/

$lang = 'ru';
$day = 3;
echo "<p>" . $arr[$lang][$day - 1] . "</p>";



/*
1n. Используя массивы и пользовательские функции переделать задачи 5.b и 5.c из первого занятия. 
Учитывая что длина пароля может быть любая, например 100 цифр. 
Использовать рекурсивный вызов функции.
*/

$password = '06';
hackOneSimbol($password);
function hackOneSimbol($pass)
{
	static $hack_pass;
	static $wordPass;
	if (is_string($pass)) {
		$wordPass = $pass;
		$pass = strlen($pass);
	}
	for ($i = 0; $i < 10; $i++) {
		if ($pass > 0) {
			$hack_pass[$pass] = $i;
			hackOneSimbol($pass - 1);
		}
	}
	if (implode("", $hack_pass) == $wordPass) {
		echo "Взломали пароль - это: " . implode("", $hack_pass) . "<br>";
	}
}



/*
Задание 2: Задания с функциями:
2a. Воспроизвести весь код из ролика Изучение PHP для начинающих | Урок #14 - Функции и написать пояснения к каждой строчке кода.
*/

function printWords($word, $x, $y)
{ // функция вывода на экран
	$word = math($x, $y); //вызов функции сложения
	echo $word; // выводим на экран
}

function math($first, $second)
{ // функция сложения двух чисел
	$summa = $first + $second; //получаем сумму 2 аргументов
	return $summa; //возвращаем сумму кк значение всей функции
}
$x = 12; //параметр 1
$y = 35; // параметр 2

printWords($sum, $x, $y); // выводим на экран результат сложения



/*
2b. Есть двумерный массив в котором хранятся числа. 
Каждая строка это вложения/съем в банк сумм денег одним человеком (если съем, то число отрицательное), каждый взнос/съем хранится в отдельной ячейке. 
Посчитать сумму денег которая есть у каждого человека и вывести на экран список сумм отсортировав его от большей суммы к меньшей. 
Значения для демонстрации расчетов задать самостоятельно.
*/

$arr = [
	'1-й клиент' => [1, 2, 3, 5, -9, 1],
	'2-й клиент' => [1, 2, -4, 5, -1, 8],
	'3-й клиент' => [1, 8, 3, 5, 29, -5],
	'4-й клиент' => [1, 2, -3, 5, 3, 10],
];
foreach ($arr as $klient => $value) {
	$sum = 0;
	foreach ($value as $transaction) {
		$sum += $transaction;
	}
	$debet[$klient] = $sum;
	unset($sum);
}
asort($debet);
foreach ($debet as $name => $value) {
	echo "$name имеет $value<br>";
}



/*
2c. Написать функцию которая выводит на экран простые числа (в математике числа называются простыми которые целочисленно делятся только на себя и на единицу) в заданном диапазоне. 
Диапазон передается в функцию в качестве массива(пример такого диапазона: $range = [1,50]). 
Так же вывести на экран отдельным блоком все составные числа (не простые).
*/
$range = [1,50];
searchSimpleNumbers($range);
function searchSimpleNumbers($range)
{
	$n =  $range[1]; //до какого числа искать
	$arSimpleNubers = array(1, 2, 3); //начальное массив с простыми числами
	for ($i = 4; $i <= $n; $i++) { // перебираем число от 4 до n
		$control = 0; //это контрольная переменная если ниже не изменится, то будет добавлено простое число в начальный массив простых чисел
		for ($int = 1; $int < count($arSimpleNubers); $int++) { // перебираем все простые числа в нашем массиве простых чисел
			if ($arSimpleNubers[$int] !== $i && $i % $arSimpleNubers[$int] == 0) { // получаем модальное деление числа на все имеющеюся простые чила
				$control = 1; //переменная изменена, это не простое число
				$arNotSimpleNubers[] = $i;
				continue;
			}
			if ($arSimpleNubers[$int] * $arSimpleNubers[$int] > $i) { // не имеет смысла делить по модулю на простое число, которое больше квадратного корня от проверяемого значения $i
				continue;
			}
		}
		if ($control == 0) {
			$arSimpleNubers[] = $i;	//получили простое число, добавляем в массив
		}
	}
	?><pre><?php print_r($arSimpleNubers);?></pre><pre><?php print_r($arNotSimpleNubers);?></pre><?php
}



/*
Задание 3: Задания на изменение обработки ошибок в php:
3a. Сделать настройки вашего php которые позволят выводить на экран ошибки уровня notice и deprecated.
*/





/*
3b. Продемонстрировать результат ошибок всех типов ломая свой скрипт (fatal, error, notice и deprecated).
*/

