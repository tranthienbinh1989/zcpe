<?php

$xmlstrings = file_get_contents('library.xml');

$library = simplexml_load_string($xmlstrings);

//print_r($library);

$library = new SimpleXMLElement('library.xml', NULL, true);

//foreach ($library->book as $book) {
//    echo $book['isbn'] . '<br>';
//    echo $book->title . '<br>';
//}
//
//echo "<h4>Xpath query</h4><br>";
//$results = $library->xpath('/library/book/title');
//
//foreach ($results as $title) {
//    echo $title . '<br>';
//}
$book = $library->addChild('book');
$book->addAttribute('isbn', 123456);
$book->addChild('title','ZEND PHP 5');
$book->addChild('author', 'Tran Thien Binh');
$book->addChild('publisher', 'Con Duong Viet Nam');
//
//header('Content-type: text/xml');
//
//echo $library->asXML();
$library->saveXML('library.xml');
var_dump($library);
        
$namespaces = $library->getDocNamespaces();

var_dump($namespaces);
foreach ($namespaces as $key => $value) {
    echo "{$key} => {$value}\n";
}