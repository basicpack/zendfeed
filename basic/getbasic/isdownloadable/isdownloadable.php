<?php
//Criado por Anderson Ismael
//10 de abril de 2019
//http://archive.is/MAC5m

function isDownloadable($url, $method = 'HEAD') {
    if (!$fp = curl_init($url)) return false;
    return true;
}

