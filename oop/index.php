<?php
require_once("Car.php");
require_once("SuperCar.php");

$Avanza = new Car("avanza");

echo "Merk Kendaraan : ". $Avanza->merk . "<br>";
echo "Jumlah Roda : ". $Avanza->roda . "<br>";
echo "Jumlah Spion : ". $Avanza->spion . "<br>";
echo "Bahan Bakar : ". $Avanza->bahan_bakar . "<br> <br>";

$tesla = new SuperCar("tesla");

echo "Merk Kendaraan : ". $tesla->merk . "<br>";
echo "Jumlah Roda : ". $tesla->roda . "<br>";
echo "Jumlah Spion : ". $tesla->spion . "<br>";
echo "Bahan Bakar : ". $tesla->bahan_bakar . "<br>";
echo $tesla->jalan(200);


?>