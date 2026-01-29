<?php

class Car
{
    public $merk;
    public $roda = 4;
    public $spion = 2;
    public $bahan_bakar = "Bensin";

    public function __construct($nama){
        $this->merk = $nama;
    }
}

?>