<?php

echo 12121;



# Принимаем запрос
$data = json_decode(file_get_contents('php://input'), TRUE);


$handle = fopen('file.txt', 'w');

// write the data to the file
fwrite($handle, $data);

// close the file handle
fclose($handle);


// file_put_contents('file.txt', '$data: '.print_r($data, 1)."\n", FILE_APPEND);


$file = "file.txt"; // указываем имя файла
$content = file_get_contents($file); // читаем содержимое файла

print_r($content);
