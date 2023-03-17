<?php

$request = curl_init();
curl_setopt($request, CURLOPT_URL, 'https://favqs.com/api/qotd');
curl_setopt($request, CURLOPT_POST, false);
curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($request, CURLOPT_HEADER, false);
$Curl = curl_exec($request);
$Curl = json_decode($Curl);
$result = $Curl->quote->body;
echo $result;
curl_close($request);