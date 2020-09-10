<?php

require_once 'autoload.php';

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);

$oBook = Book::findById($id);

$oBook->title = $title;

foreach((array)$oBook as $key => $value) {
    var_dump($key);
}


var_dump($oBook);