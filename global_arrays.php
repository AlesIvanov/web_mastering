<?php
var_dump($_GET); // в него приходит все параметры, пришедшие через адресную строку браузера

var_dump($_POST); // в него помещаются все параметры, пришедшие от формы

var_dump($_FILES); // в нем хранится информация о файлах

var_dump($_COOKIE); // в нем хранятся куки

var_dump($_REQUEST); // в нем хранятся массивы get и post

var_dump($_SESSION); // сессия

//echo "<pre>";
//var_dump($_SERVER); // в нем хранится информация о сервере
//echo "</pre>";

$GLOBALS['my_key'] = 'global_value';

echo $GLOBALS['my_key'];