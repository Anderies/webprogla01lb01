<?php
print("Hello World");
$nama_1 = "Anderies";
$nama_2 = "Galih";
$angka_1 = 10;
$angka_2 = "10";

$array_1 = [10,20,30,40];
// Equal (==)
var_dump($angka_1 == $angka_2); // true
echo '<br>'; 
// Identical (===)
var_dump($angka_1 === $angka_2); // false
echo '<br>';
// Not Equal (!=)
var_dump($angka_1 != $angka_2); 

// !== Not Identical
var_dump($angka_1 != $angka_2);
// if($angka_1 == $angka_2)
echo '<br>';
echo '<br>';
echo '<h1>Pebedaan var_dump dan echo</h1>';
// perbedaan var_dump dan echo
var_dump($array_1);
echo $array_1;
echo $array_1[0];
?>