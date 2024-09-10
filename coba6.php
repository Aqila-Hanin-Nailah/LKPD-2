<?php
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_barang' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000, // Harga per item
        'jumlah_barang' => 3,
    ],
    [
        'nama_barang' => 'Aloe vera Sheet Mask',
        'harga_barang' => 15000, // Harga per item
        'jumlah_barang' => 4,
    ],
];

$daftar_pembelian = 0;

// Menghitung total pembelian
foreach ($barang as $item) {
    $harga_total_item = $item['harga_barang'] * $item['jumlah_barang'];
    $daftar_pembelian += $harga_total_item;
}

// Mengubah array menjadi objek
foreach ('jumlah_barang' as $jumlah) {
    $jumlah = (object) $jumlah;
}

// Menampilkan output dalam format $nama_barang($jumlah_barang) = $harga_total_item
foreach ($barang as $item) {
    $harga_total_item = $item->harga_barang * $juml;
    // echo "{$item->nama_barang}({$item->jumlah_barang}) = {$harga_total_item}" . '<br>';
}

echo "Pasta Gigi(". $jumlah.") : 18.000";
// Menampilkan total harga yang harus dibayar
echo "Total harga yang harus dibayar adalah <b>Rp. " . number_format($daftar_pembelian, 0, ',', '.') . "</b>";
?>
