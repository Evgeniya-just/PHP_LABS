<?php
function calculator($str)
{
    preg_match_all('!\d+!', $str, $matches);

    if (count($matches[0]) > 5) return "Количество слагаемых не должно быть больше 5!";
    if (!is_string($str)) return "Параметр должен быть типа string!";
    $pattern = '#^[0-9+-]+$#';
    $error = "Incorrect input";
    if (!preg_match($pattern, $str)) return $error;
    $p = eval('return ' . $str . ';');
    return $p;
}

if (count($argv) == 2) {
    echo calculator($argv[1]);
}
