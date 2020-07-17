<?php
require_once "koneksi.php";
$id    = $_POST['idbuku'];
$nama  = $_POST['namabuku'];
$penerbit = $_POST['namapenerbit'];
$penulis = $_POST['namapenulis'];
$tahun = $_POST['tahunterbit'];


$sql = "UPDATE tb_buku SET nama_buku='$nama', nama_penerbit='$penerbit', nama_penulis='$penulis', tahun_terbit='$tahun' WHERE id_buku='$id'";

if ($conn->query($sql) === TRUE){
    echo "<script>alert('Data Berhasil Disimpan')</script> ";
    echo "<script>window.location.assign('formBuku.php')</script> ";
}else{
    echo "<script>alert('Data Gagal Disimpan $conn->error')</script>";
    echo "<script>window.location.assign('formBuku.php')</script> ";
}

?>