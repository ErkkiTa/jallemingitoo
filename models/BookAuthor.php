<?php

require_once 'dbconnect.php';

class BookAuthor {

    public static function findAllByBookId($bookId) {

        global $pdo;

        $stmt = $pdo->prepare('SELECT * FROM book_authors WHERE book_id=:book_id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'BookAuthor');
        $stmt->execute(['book_id' => $bookId]);

        return $stmt->fetchAll();

    }

    public function delete() {

        global $pdo;

        $stmt = $pdo->prepare('DELETE FROM book_authors WHERE id=:id');

        return $stmt->execute(['id' => $this->id]);

    }
}