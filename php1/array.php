<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Soal Array</h1>
    <?php
    echo "<h4>Contoh Soal 1 </h4>";

    $trainer = ["Rezky", 'Budi', "Ardi", "Reza", "Abdul"];

    print_r($trainer);

    echo "<h4>Contoh Soal 2 </h4>";
    echo "Total Trainer " . count($trainer) . "<br>"; 
    echo "<ol>";
    echo "<li>" . $trainer[0] . "</li>";
    echo "<li>" . $trainer[1] . "</li>";
    echo "<li>" . $trainer[2] . "</li>";
    echo "<li>" . $trainer[3] . "</li>";
    echo "<li>" . $trainer[4] . "</li>";
    echo "</ol>";

    echo "<h4>Contoh Soal 3 </h4>";
    $bioTrainer = [
        ["id" => "001","nama" =>  "Rezky", "kelas" => "Laravel"],
        ["id" => "002","nama" =>   "Budi", "kelas" =>"ReactJS"],
        ["id" => "003","nama" =>   "Ardi", "kelas" =>"VueJS"],
        ["id" => "004","nama" =>   "Reza", "kelas" =>"NodeJS"],
        ["id" => "005","nama" =>   "Anto", "kelas" =>"React Native"],
    ];

    echo "<pre>";
    print_r($bioTrainer);
    echo "</pre>";

    ?>
</body>
</html>