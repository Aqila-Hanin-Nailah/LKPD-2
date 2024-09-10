<?php
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_barang' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_barang' => 3,
    ],
    [
        'nama_barang' => 'Aloe vera Sheet Mask',
        'harga_barang' => 15000, // harga satuan sheet mask
        'jumlah_barang' => 4,
    ],
];

$daftar_pembelian = 0;

foreach ($barang as $item) {
    $harga_total_item = $item['harga_barang'] * $item['jumlah_barang'];
    $daftar_pembelian += $harga_total_item;
    // echo "Daftar belanjaan : " . '<br><br>';
    echo $item['nama_barang'] . "(" . $item['jumlah_barang'] . ")" . ":" . $harga_total_item . "<br>";
}

// foreach ($barang as &$item) {
//     $item = (object) $item;
// }

// foreach ($barang as $item) {
//     echo "{$item->nama_barang}({$item->jumlah_barang}) = {$item->harga_barang}" . '<br>';
// }
// echo "      1. Pasta Gigi(1) : 18.000" . '<br>';
// echo "      2. Sabun Mandi(3) : 15.000" . '<br>';
// echo "      3. Aloe Vera Sheet Mask(4) : 60.000" . '<br><br>';

echo "Total harga yang harus dibayar adalah <b> Rp. " . number_format($daftar_pembelian, 0, ',', '.') . "</b>";
?>
