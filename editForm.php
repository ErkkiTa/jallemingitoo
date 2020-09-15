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
    <title>Editing....</title>
</head>
<body>

<form action="edit.php" method="post">
    <input type="text" name="title" value='<?php echo $book->title;?>'>


    <input type="submit" name="save" value="Salvesta">

    <input type="hidden" name="id" value='<?php echo $id   ?>'>

<form>
    
</body>
</html>