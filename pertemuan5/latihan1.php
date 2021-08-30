<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// Pasangan antara key dan value
// key-nya adalah index, yanga dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");

// cara baru 
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "tulisan", false];

// Menampilkan Array
// ver_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilakan 1 elemen pada array
// echo $arrl[0];
// echo "<br>";
// echo $bulan[1];

// menampilkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);

?>