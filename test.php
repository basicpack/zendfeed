<?php
//0. setar as includes e as variáveis

require 'basic/basic.php';
require 'zendfeed.php';

inc([
    'download',
    'isdownloadable'
]);

$urlDoFeed='https://gizmodo.uol.com.br/feed';
$stringDoFeed='';
//1. testar se o feed é baixável
if(isdownloadable($urlDoFeed)){
    $stringDoFeed=baixarFeed($urlDoFeed);
    $feed=processarStringDoFeed($stringDoFeed);
    $items=extrairOsItemsDoFeed($feed);
    imprimirOsItemsDoFeed($items);
}else{
    print 'não é baixável'.PHP;
}
//2. baixar o feed
function baixarFeed($urlDoFeed){
    return download($urlDoFeed);
}
//3. processar a string do feed
function processarStringDoFeed($stringDoFeed){
    return zendfeed($stringDoFeed);
}
//4. extrair os items do feed
function extrairOsItemsDoFeed($feed){
    $items=[];
    foreach ($feed as $entry) {
        $data = [
            'title'        => $entry->getTitle(),
            'url'         => $entry->getLink()
        ];
        $items[] = $data;
    }
    return $items;
}
//5. imprimir a o feed
function imprimirOsItemsDoFeed($items){
    foreach ($items as $item) {
        print $item['title'].PHP_EOL;
    }
}
