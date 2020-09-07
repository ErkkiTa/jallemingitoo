<?php

require_once 'models/Book.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$book = Book::findById($id);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $book->title;?></h1>
    <a href="delete.php?id=<?php echo($id);?>">Delete</a>
</body>
</html>