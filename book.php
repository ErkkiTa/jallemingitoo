<?php

class Book {

    protected $title;
    protected $inStock = true;
    public $stockSaldo = 0;

    public function __construct($t) {
        $this->title = $t;
    } 

    public function getStockSaldo() {
        return $this->stockSaldo;
    }

    public function setStockSaldo($v){
        if ( $v < 0 ) {
            throw new Exception('Value should not be negative!');
        }   else {
            $this->stockSaldo = $v;
        }
        $this->stockSaldo = $v;
    }

    public function soldOut(){
        $this->inStock = false;
    }

}

$book = new Book('Kalevipoeg');
$book2 = new Book('Rehepapp');

$book->setStockSaldo(-5);
$book2->soldOut();


var_dump($book);
var_dump($book2);
var_dump($book->getStockSaldo());


echo "\n";
