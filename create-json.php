<?php
// Создаем ассоциативный массив данных
$config=array(
    'servername'=>"localhost",
    'user'=>"root",
    'password'=>"",
    'port'=>"3306",
    'database_name'=>"Diplom"
);

// Преобразуем массив в JSON-строку
$json_config = json_encode($config);

// Указываем имя файла для сохранения
$filename = 'config.json';

// Пишем JSON-строку в файл
file_put_contents($filename, $json_config);

echo "Файл JSON успешно создан.";

