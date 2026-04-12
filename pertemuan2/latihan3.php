<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Sederhana PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .container {
            display: inline-block;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
        }
        .header-text {
            color: maroon;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="number"], select {
            padding: 5px;
            font-size: 16px;
        }
        .result {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            color: blue;
        }
    </style>
</head>
<body>

    <div class="container">
        <form method="POST" action="">
            <table border="0">
                <tr>
                    <td class="header-text">Nilai I</td>
                    <td></td>
                    <td class="header-text">Nilai II</td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="number" name="angka1" required value="<?php echo isset($_POST['angka1']) ? $_POST['angka1'] : ''; ?>"></td>
                    <td>
                        <select name="operasi">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                    </td>
                    <td><input type="number" name="angka2" required value="<?php echo isset($_POST['angka2']) ? $_POST['angka2'] : ''; ?>"></td>
                    <td><button type="submit" name="hitung">submit</button></td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operasi = $_POST['operasi'];
            $hasil = 0;

            switch ($operasi) {
                case '+':
                    $hasil = $angka1 + $angka2;
                    break;
                case '-':
                    $hasil = $angka1 - $angka2;
                    break;
                case '*':
                    $hasil = $angka1 * $angka2;
                    break;
                case '/':
                    if ($angka2 != 0) {
                        $hasil = $angka1 / $angka2;
                    } else {
                        $hasil = "Error (Pembagi nol)";
                    }
                    break;
            }

            echo "<div class='result'>Hasil: $angka1 $operasi $angka2 = $hasil</div>";
        }
        ?>
    </div>

</body>
</html>