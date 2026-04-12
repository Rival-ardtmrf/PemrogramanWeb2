<?php
//Ini adalah komentar satu baris
/*
Kalau yang ini, komentar banyak baris, yang baru akan selesai 
kalau diakhiri dengan ini
*/

?>

<html>
    <head>
        <title>Test Penyisipan PHP pada HTMl</title>
    </head>
    <body>
        <p>Kapal asing, silahkan identifikasikan diri anda!</p><br>

        <?php
        //Berikut ini adalah inisiasi beberapa variabel
        $namad = "Jean";
        $namat = "Luc";
        $namab = "Picard";
        $nilai1 = 25;
        $nilai2 = 50;
        $hasil = $nilai1*$nilai2;
        $a = 2;
        $b = 3;
        $hsl = pow($a, $b);
        ?>

        <?php
        echo "Saya $namab, $namad$namat$namab, Kapten kapal.</b><br>";
        echo "$nilai1 x $nilai2 = $hasil<br>";
        echo "$a ^ $b = $hsl";
        ?>
    </body>
</html>