<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Soal Pertama</h1>
    <?php
    $x = 8;

    for ($i = 1; $i <= $x; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
    ?>

    <h1>Contoh Soal pertama dengan function</h1>
        <?php
    function Segitigasiku($nilai) {
        for ($i = 1; $i <= $nilai; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $j;
            }
            echo "<br>";
        }
    }

    $x = 8;
    Segitigasiku($x);
    ?>



    <h2>Soal Kedua</h2> 
    <?php
    $x = 5;

    for ($i = 1; $i <= $x; $i++) {

        for ($k = $x - $i; $k > 0; $k--) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j <= (2 * $i - 1); $j++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>

    <h1>Soal Kedua dengan fungsi </h1>
    <?php
    function SegitigaSamaKaki($nilai2) {
        for ($i = 1; $i <= $nilai2; $i++) {
            for ($k = $nilai2 - $i; $k > 0; $k--) {
                echo "&nbsp;&nbsp;";
            }
            for ($j = 1; $j <= (2 * $i - 1); $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }

    $x = 5;
    SegitigaSamaKaki($x);
    ?>




</body>
</html>



