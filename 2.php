<?php
$hari_ini = date('l'); // mengubah tanggal menjadi hari dalam bahasa Inggris 

// total pembelian bisa5 diubah
$total_pembelanjaan = 130000;

$diskon = 0;

if ($hari_ini == 'Tuesday') {
    $diskon += 5; // Diskon 5% setiap hari Selasa
} elseif ($total_pembelanjaan > 100000) {
    $diskon += 7; // Diskon 7% setiap pmbelian diatas 100rb
}

// hitung total diskon ke uang 
$total_diskon = ($diskon / 100) * $total_pembelanjaan;

// total yg harus di bayar 
$total_yang_harus_dibayar = $total_pembelanjaan - $total_diskon;

// angka ke rupiah
function format_rupiah($angka) {
    return "Rp. " . number_format($angka, 0, ',', '.');
}

// Menampilkan hasil
echo "Hari ini hari: " . "<b>" .  $hari_ini . "</b><br>";
echo "Total pembelanjaan: " . "<b>" . format_rupiah($total_pembelanjaan) . "</b><br>";
echo "Total yang harus dibayar: " . "<b>" . format_rupiah($total_yang_harus_dibayar) . "</b><br>";
?>
