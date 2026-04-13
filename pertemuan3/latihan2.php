<html>
<head>
    <title>Contoh Penggunaan IF - Diskon</title>
</head>
<body>
    <form method="post">
        Besar Pembelian :
        <input type="text" name="total_beli"><br><br>
        <input type="submit" name="proses" value="Tentukan Diskon">
    </form>

    <?php
    // Mengecek apakah tombol submit sudah diklik
    if (isset($_POST['proses'])) {
        $total_beli = intval($_POST['total_beli']);
        $diskon_persen = 0;

        // Logika IF Bertingkat
        if ($total_beli >= 200000) {
            $diskon_persen = 0.1;
        } else if ($total_beli >= 100000) {
            $diskon_persen = 0.05;
        } else {
            $diskon_persen = 0.01;
        }

        $jumlah_diskon = $diskon_persen * $total_beli;
        $total_bayar = $total_beli - $jumlah_diskon;

        // Menampilkan Hasil
        echo "<h3>Hasil Perhitungan:</h3>";
        printf("Total Beli = Rp %d <br>", $total_beli);
        printf("Diskon (%d%%) = Rp %d <br>", ($diskon_persen * 100), $jumlah_diskon);
        printf("<strong>Total Bayar = Rp %d </strong><br>", $total_bayar);
    }
    ?>
</body>
</html>