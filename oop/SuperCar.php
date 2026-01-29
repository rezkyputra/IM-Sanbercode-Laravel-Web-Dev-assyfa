<?php
require_once("Car.php");

class SuperCar extends Car
{
    public $bahan_bakar = "Listrik";

    public function jalan($nilai)
    {
        return "Mobil Berjalan sejauh $nilai km <br>";
    }
}

?>