<?php
require_once "koneksi.php";
if(isset($_POST['submitTemp'])){
$idBarang  = $_POST['idBarang'];

$sql ="SELECT*FROM tb_barang WHERE id_barang='$idBarang'";
$result =$conn->query($sql);
while($row=$result->fetch_assocs()) { ?>
$jumlah = $_POST['jumlahBeli'];

$sql = "INSERT INTO tb_barang VALUES (null, '$nama', '$satuan', '$harga') ";

if ($conn -> query($sql) === TRUE){
    echo "<script>alert('Data Berhasil Disimpan')</script> ";
    echo "<script>window.location.assign('formBarang.php')</script> ";
}else{
    echo "<script>alert('Data Gagal Disimpan $conn->error')</script>";
    echo "<script>window.location.assign('formBarang.php')</script> ";
}

