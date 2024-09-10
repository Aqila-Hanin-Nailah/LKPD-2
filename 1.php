<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        
    </form>
<?php
        $Teks1 = "Selamat Ulang Tahun yang ke-17!";
        // $specialchara = preg_replace('/[\w\s]/', '', $Teks1);
        
        // if ($specialchara) {
        //     // Tampilkan simbol yang ditemukan
        //     echo  implode(', ', str_split($specialchara, '', $Teks1));
        // } else {
        //     echo "Teks tidak mengandung simbol.";
        // }k
        
        // preg_replace berfungsi sebagai mencari dan mengganti teks 
        // parameter preg_replace adalah (pattern(regex)(w mewakili alfanumerik dan _, s mewakili spasi))
        if (preg_replace('/[\w\s]/', '', $Teks1)) {
            echo "<b>Teks : " . $Teks1 . "</b><br>";
        // str_split mengganti string menjadi array, implode mengganti array menjadi string 
            echo "Kalimat mengandung simbol :" . implode(', ', str_split(preg_replace('/[\w\s]/', '', $Teks1)));
        } else {
            echo "<b> Teks : " . $Teks1 . "</b>";
            echo "Kalimat tidak mengandung Simbol";
        }
?>
</body>
</html>

