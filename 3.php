<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Bagi 90</title>
</head>
<body> -->
    <?php
        // $bilangan_target = 90;

        // looping menyiapkan angka pembagi
        for ($i = 1; $i <= 30; $i++) {
            // Cek apakah 90 dibagi habis dengan bilangan $i
            if ( 90 % $i == 0) {
                // jika iya maka 90 akan dibagi oleh angka pembagi ($i) dan hasil akan di tampilkan
                $hasil_bagi = 90 / $i;
                echo "90 : $i = $hasil_bagi <br>";
            }
        }
    ?>
<!-- </body>
</html> -->
