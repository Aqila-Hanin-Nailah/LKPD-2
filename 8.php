<?php
    // Data array awal
    $data = array("PPLG", "HTL", "KLN", "PMN", "pplg", "htl");

    // strtoupper = mengubah string menjadi huruf besar
    $data = array_unique(array_map("strtoupper", $data));
    
    // ksort($data);
    
    print_r($data);
    ?>