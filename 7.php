<?php
function hitungKarakter($kalimat) {
    // menghitung jumlah karakter
    $jumlah_karakter = strlen($kalimat);
    

    if ($jumlah_karakter > 50) {
        // memotong kalimat dan diganti jadi (.....)
        $kalimat = substr($kalimat, 0, 50) . ".....";
    }

    return $kalimat;
}

$kalimat = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

echo "<b>Kalimat Awal</b> : " . $kalimat;
echo "<br>";
echo "<b>Kalimat yang sudah dipotong : </b>" . hitungKarakter("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."); 
?>
