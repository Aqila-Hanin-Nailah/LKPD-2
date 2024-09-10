<?php
// Pola persegi menggunakan array index
$persegi = [
    "********",
    "********",
    "********",
    "********"    
];

// Menampilkan dua kali ke bawah
foreach (range(1, 2) as $repeat) {
    foreach ($persegi as $baris) {
        echo $baris . "<br>";
    }
    // Memisahkan dua persegi dengan baris kosong
    echo "<br>";
}
?>

