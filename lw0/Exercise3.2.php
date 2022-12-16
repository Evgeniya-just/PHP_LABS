<?php
function sumTime($firstTime, $secondTime)
{
    if ((!is_string($firstTime))  or (!is_string($firstTime))) return "Оба передаваемых параметра должны быть строками!";
    $firstTime = trim($firstTime);
    $secondTime = trim($secondTime);

    $pattern = '#^[0-2]*[0-4]:[0-5]*[0-9]:[0-5]*[0-9]$#';
    $error = "Формат времени должен быть: 00:00:00 - 24:59:59 и состоять только из цифр и двоеточий!";

    if (!preg_match($pattern, $firstTime)) return $error;
    if (!preg_match($pattern, $secondTime)) return $error;

    $list = explode(":", $secondTime);
    $SumDate = date('H:i:s', strtotime($firstTime . " +$list[0] hours $list[1] minutes $list[2] seconds"));
    return $SumDate;
}

if (count($argv) == 3) {
    echo sumTime($argv[1], $argv[2]);
}
