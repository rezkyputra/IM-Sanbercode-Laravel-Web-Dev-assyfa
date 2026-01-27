<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Latihan PHP</h1>
    <?php
    echo "<h4>Contoh Soal 1</h4>";
    $soal_1 = "Selamat Datang di Sanbercode";
    echo "Kalimat soal 1 : " . $soal_1 . "<br>";
    echo "Panjang String Soal 1 : " . strlen($soal_1) . "<br>";
    echo "Jumlah Kata Soal 1 : " . str_word_count($soal_1) . "<br>";

    echo "<h4>Contoh Soal 2</h4>";
    $soal_2 = "hai hello world";
    echo "Kata 1 Soal 2 : " . substr($soal_2,0,3) . "<br>";
    echo "Kata 2 Soal 2 : " . substr($soal_2,4,5) . "<br>";
    echo "Kata 3 Soal 2 : " . substr($soal_2,10,5) . "<br>";

    echo "<h4>Contoh Soal 3</h4>";
    $soal_3 = "Selamat Pagi ";
    echo "Soal 3 : " . $soal_3 . "<br>";
    echo "Ubah Soal 3 : " . str_replace("Pagi", "Siang",$soal_3);


    ?>
</body>
</html>