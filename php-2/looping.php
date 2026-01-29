<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h2>Contoh Soal 1 Looping</h2>";

    
    echo "<h4>Looping 1</h4>";
    
    $i = 1;
    // While
    while($i <= 20){
        echo "$i - Berurut <br>";
        $i+=2;
    }

    echo "<h4>Looping 2</h4>";
    // Do While
    $a = 19;
    do {
        echo "$a - Menurun <br>";
        $a -=2;
    } while ($a >= 1);

    echo "<h2>Contoh Soal 2 Looping</h2>";

    $peoples= [
        [ "001", "Budi", "Laravel" ], 
        [ "002", "Ardi", "ReactJs" ], 
        [ "003", "Rahmat", "VueJS" ], 
        [ "004", "Ayu", "Golang" ], 
        [ "005", "Dwi", "UI UX" ], 
    ];

    foreach ($peoples as $peop) {
        $output = [
            "id" => $peop[0],
            "nama" => $peop[1],
            "kelas" => $peop[2],
        ];
        print_r($output);
        echo "<br>";
    }

  
    echo "<h2>Contoh Soal 3 Looping</h2>";

    // Looping j = 6


    for ($j=1; $j <=5; $j++) { 
        for ($p=$j; $p <=5 ; $p++) { 
            echo " * ";
        }
        echo "<br>";
    }


    ?>
</body>
</html>