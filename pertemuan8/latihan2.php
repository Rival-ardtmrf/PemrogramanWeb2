<!DOCTYPE html>
<html>
<head>
    <title>Contoh Penggunaan UDF</title>
</head>
<body>

<!-- Menentukan Form Input -->
<form method="post">
    Masukkan Bilangan Pertama : <br>
    <input type="text" name="A" size="10"><br><br>

    Masukkan Bilangan Kedua : <br>
    <input type="text" name="B" size="10"><br><br>

    <input type="submit" value="Hitung">
</form>

<!-- Membandingkan 2 buah bilangan yang diinput -->
<?php
$a = $_POST["A"] ?? 0;
$b = $_POST["B"] ?? 0;

function jumlah($A, $B) {
    return $A + $B;
}

function kurang($A, $B) {
    return $A - $B;
}

function kali($A, $B) {
    return $A * $B;
}

function bagi($A, $B) {
    return ($B != 0) ? $A / $B : 0;
}

echo "<br>";
echo "Bilangan Pertama : $a <br>";
echo "Bilangan Kedua : $b <br><br>";

echo "Hasil Penjumlahan 2 buah bilangan <br>";
$jumlahbil = jumlah($a, $b);
printf("Penjumlahan : %d + %d = %d<br>", $a, $b, $jumlahbil);

echo "<br>Hasil Pengurangan 2 buah bilangan <br>";
$kurangbil = kurang($a, $b);
printf("Pengurangan : %d - %d = %d<br>", $a, $b, $kurangbil);

echo "<br>Hasil Perkalian 2 buah bilangan <br>";
$kalibil = kali($a, $b);
printf("Perkalian : %d * %d = %d<br>", $a, $b, $kalibil);

echo "<br>Hasil Pembagian 2 buah bilangan <br>";
$bagibil = bagi($a, $b);
printf("Pembagian : %d / %d = %.2f<br>", $a, $b, $bagibil);

echo "<br>";
?>

</body>
</html>