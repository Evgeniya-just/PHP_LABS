<?php

require_once 'Buyer.php';

$user_one = new Buyer('Козлов', 'Сергей', 'Васильевич', 'Мира 666', 11111111, 1234);
$user_two = new Buyer('Воронцова', 'Татьяна', 'Ильинична', 'Садовая 11', 2222222, 1235);
$user_three = new Buyer('Волкова', 'Анастасия', 'Алексеевна', 'ВОВ 1', 3333333, 1235);

$arr[] = $user_one;
$arr[] = $user_two;
$arr[] = $user_three;

foreach ($arr as $key => $value) {
    $arr[$key]->getAllInformation($key);
}

foreach ($arr as $value) {
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i - 1]->getSurname()[0] > $arr[$i]->getSurname()[0]) {
            $temUser = $arr[$i - 1];
            $arr[$i - 1] = $arr[$i];
            $arr[$i] = $temUser;
        }
    }
}

echo ("") . PHP_EOL;

foreach ($arr as $key => $value) {
    $arr[$key]->getAllInformation($key);
}
