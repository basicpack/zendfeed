<?php
//Criado por Anderson Ismael
//10 de abril de 2019
//https://tinyurl.com/y6m8vuvp

function isDownloadable($url) {
    $file_headers = @get_headers($url);
    if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
        $exists = false;
    }
    else {
        $exists = true;
    }
    return $exists;
}

