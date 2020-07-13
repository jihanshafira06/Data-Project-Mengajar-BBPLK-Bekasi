<?php
include_once 'Latihan_Function1.php';

if(isset($_GET['submit'])){
    $P = $_GET['Panjang'];
    $L   =$_GET['Lebar'];
    // menghitung luas Persegi panjang
    $luaspp = hitunglahLuasPersegiPanjang ($P,$L);

    // menghitungKelilingPersegipanjang
    $kelpp = hitunglahKelilingPersegiPanjang ($P,$L);
}else{
    $luaspp = 0;
    $kelpp = 0;
}

if(isset($_GET['sisi'])){
    $s = $_GET['sisi'];

    // menghitung luas Persegi
    $luasp= hitunglahLuasPersegi($s);

    // menghitungKelilingPersegi
    $kelp= hitunglahKelilingPersegi($s);
}else{
    $luasp = 0;
    $kelp = 0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Persegi Panjang -->

    <h2> Hitung Luas dan Keliling Persegi Panjang </h2>
    <form action = "" method="">
        Panjang     : <input type="number" name="Panjang"  require><br>
        Lebar       : <input type="number" name="Lebar"  require><br>
        <input type="submit" name="submit" value="Hitung">    
    </form>
    <br>
        Luas Persegi Panjang: <?=$luaspp;?><br>
        Keliling Persegi Panjang : <?=$kelpp;?><hr>
    
    <!-- persegi -->

    <h2> Hitung Luas dan Keliling Persegi </h2>
    <form action = "" method="">
        Sisi    :  <input type="number" name="sisi"  require><br>
        <input type="submit" value="Hitung">        
    </form>
    <br>
        Luas Persegi : <?=$luasp;?><br>
        Keliling Persegi  : <?=$kelp;?>
    
</body>
</html>