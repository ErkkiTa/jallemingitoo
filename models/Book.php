<?php

require_once 'dbconnect.php';

class Book {

    public static function findById( $id ) {

        global $pdo;

        $stmt = $pdo->prepare('SELECT *  FROM books WHERE id=:id');
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Book');
        $stmt->execute(['id' => $id]);

        return $stmt->fetch();

    }

    public static function findAll() {

        global $pdo;

        $stmt = $pdo->prepare('SELECT * FROM books');
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Book');
        $stmt->execute();

        return $stmt->fetchAll();

    }

    public function delete() {

        global $pdo;

        $stmt = $pdo->prepare('DELETE FROM books WHERE id=:id');

        return $stmt->execute(['id' => $this->id]);

    }

    public function update() {

        global $pdo;

        $stmt = $pdo->prepare('UPDATE books SET title=:title WHERE id=:id');

        return $stmt->execute(['title'=>$this->title, 'id' => $this->id]);

    }
}