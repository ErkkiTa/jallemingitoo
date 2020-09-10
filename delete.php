
<?php

require_once 'models/Book.php';
require_once 'models/BookAuthor.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$bookAuthors = BookAuthor::findAllByBookId($id);
var_dump($bookAuthors);
foreach ($bookAuthors as $o) {
    $o->delete();
}

$book = Book::findByID($id);

$book ->delete();

header('Location: index.php');

exit;