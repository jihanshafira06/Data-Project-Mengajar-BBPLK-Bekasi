<?php

// function perkenalan (){
//     echo "Hallo perkenalkan nama saya Toni <br>";
//     echo "Senang berkenalan dengan Anda <br>";
//     echo "Sampai berjumpa lagi <br>";
//     echo "<hr>";
// }

// // function dengan parameter
// function perkenalankedua($nama="fulan", $salam="Assalamualikum"){
//     echo "Salam,perkenalkan nama saya $nama <br>";
//     echo "Senang berkenalan dengan anda <br>";
//     echo "Sampai jumpa lagi<br>";
//     echo "<hr>";
// }

// perkenalan();
// perkenalankedua("Sony","Selamat pagi");
// perkenalankedua("Ali");
// perkenalankedua();

// function yang mengembalikan nilai
function hitungUmur($tahunlahir, $tahunSekarang){
    $umur =$tahunSekarang - $tahunlahir;
    return $umur;
}

function hitungLuasSegitiga($alas,$tinggi){
    $luas=$alas * $tinggi / 2 ;
    return $luas;
}

function hitungKelilingSegiTiga($a, $b, $c){
    $kel = $a + $b + $c;
    return $kel;
}

$tahunSekarang = date('Y');
// echo "umur saya adalah".hitung umur(2000, );
echo "Luas segitiga dengan alas sebesar 3cm dan tinggi 4cm adalah :".hitungLuasSegitiga(3,4);

?>