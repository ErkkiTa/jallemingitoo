<?php

class Browser {

    public $browser;

    public function __construct($b) {
        $this->browser = $b;
    } 

}

$brow = new Browser('Chrome');
$brow2 = new Browser('Edge');


var_dump($brow->browser);
var_dump($brow2->browser);


echo "\n";