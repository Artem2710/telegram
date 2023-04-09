<?php

echo 12121;

$command = "chmod 777 " . 'file.txt';
exec($command);

# Принимаем запрос
$data = json_decode(file_get_contents('php://input'), TRUE);
file_put_contents('file.txt', '$data: '.print_r($data, 1)."\n", FILE_APPEND);


$file = "file.txt"; // указываем имя файла
$content = file_get_contents($file); // читаем содержимое файла

print_r($content);
