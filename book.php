<?php

require_once 'models/Book.php';


$book = Book::findById(3);


var_dump($book);