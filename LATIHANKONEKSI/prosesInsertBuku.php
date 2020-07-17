<?php
require_once "koneksi.php";
$nama  = $_POST['namabuku'];
$penerbit = $_POST['namapenerbit'];
$penulis= $_POST['namapenulis'];
$tahun= $_POST['tahunterbit'];


$sql = "INSERT INTO tb_buku VALUES(null, '$nama', '$penerbit', '$penulis', '$tahun')";

if ($conn ->query($sql) === TRUE){
    echo "<script>alert('Data Berhasil Disimpan')</script> ";
    echo "<script>window.location.assign('formBuku.php')</script> ";
}else{
    echo "<script>alert('Data Gagal Disimpan $conn->error')</script>";
    echo "<script>window.location.assign('formBuku.php')</script> ";
}
?>