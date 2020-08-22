<?php
//var_dump();

// проверка типа переменной

//is_array();
//is_bool();
//is_float();
//is_double();
//is_real();
//
//is_int();
//is_integer();
//is_null();
//
//is_object();
//
//is_scalar();

//isset() // проверяет определена ли переменная и отлично ли ее значение от null

//$a = 10;
//$b = null;
//
//isset($a); // true;
//isset($b); // false, переменная равна null
//isset($var); // false, такой переменной не существует

// функции для работы с массивами

function arrPrint($arr) {
    echo "<pre>";
        print_r($arr);
    echo "</pre>";
}

$arr = [
    "key1" => "value1",
    "key2" => 30
];

//var_dump(count($arr)); // выводит количество элементов в массиве

//var_dump(array_pop($arr)); // удаляет последний элемент и возвращает его.

//var_dump(array_shift($arr)); // удаляет первый элемент и возвращает его.

//?arrPrint($arr);

//array_push($arr, 'world'); // добавляет в конец массива
//
//array_unshift($arr, 'hello'); // добавляет в начало массива
//
//arrPrint($arr);

arrPrint(array_keys($arr)); // возвращает массив, в котором хранятся ключи исходного массива
