<?php

require_once 'models/Book.php';
    
$list = Book::findAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>
<ul>
    <?php foreach($list as $book){ ?>

    <li><a href="book.php?id=<?php echo $book->id;?>"><?php echo $book->title; ?></a></li>
    <?php } ?>
</ul>
</body>
</html>