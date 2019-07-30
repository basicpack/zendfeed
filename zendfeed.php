<?php
//Criado por Anderson Ismael
//29jul2019
//https://tinyurl.com/y4pwvus3

require __DIR__.'/vendor/autoload.php';

function zendfeed($feedXmlString){
    return Zend\Feed\Reader\Reader::importString($feedXmlString);
}
