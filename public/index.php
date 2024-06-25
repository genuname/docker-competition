<?php 

// Подключаем автозагрузчик Composer
require "vendor/autoload.php";

// Получаем доступ к классу Сarbon из пространства имен Carbon 
use Carbon\Carbon;

// С помощью статического метода now() класса carbon получаем текущую дату в отформатированном виде
$formattedCurrentDate = Carbon::now()->toDateTimeString();

// Выводим ее на экран
echo $formattedCurrentDate;
