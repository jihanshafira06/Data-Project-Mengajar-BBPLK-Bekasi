<?php
class KendaraanBermotor{
    protected $jumlahBan;
    protected $jenisMesin;
    protected $warnaKendaraan;
    protected $bahanBakar;

    function __construct($jmlBan, $jnsMesin, $wrnKendaraan, $bhnBakar){
        $this ->jumlahBan =$jmlBan;
        $this ->jenisMesin =$jnsMesin;
        $this ->warnaKendaraan =$wrnKendaraan;
        $this ->bahanBakar =$bhnBakar;

    }
    function setWarna ($warnaBaru){
        $this ->warnaKendaraan =$warnaBaru;
    }

    function getWarna (){
        return $this ->warnaKendaraan ;   
    }
    function getBan(){
        return $this ->jumlahBan;
    }

    function getjenisMesin(){
        return $this ->jenisMesin;
    }

    function getBahanBakar(){
        return $this ->bahanBakar;
    }
}

class Motor extends KendaraanBermotor{
    protected $jumlahBan = 2;
    function __construct($jnsMesin, $wrnKendaraan){
        $this ->jenisMesin =$jnsMesin;
        $this ->warnaKendaraan =$wrnKendaraan;
    }
}

class Mobil extends KendaraanBermotor{
    protected $jumlahBan =4;
    function __construct($jnsMesin, $wrnKendaraan){
        $this ->jenisMesin = $jnsMesin;
        $this ->warnaKendaraan = $wrnKendaraan;
        
    }
}

$kendaraanZae = new KendaraanBermotor(3,"2 Tak", "Orange", "solar");
$kendaraanRyan = new Mobil("4 Tak", "Pink");
$kendaraanFaris = new Motor("4 Tak", "Biru");
$kendaraanRoni = new KendaraanBermotor (3,"2 Tak", "Hitam", "premium");
$kendaraanRomi = new Mobil ("4 Tak", "Hijau");
$kendaraanRoy = new Motor ("2 Tak", "Merah");

echo " Zaenudin memiliki kendaraan terbaru daengan teknologi terkini <br> dengan
        jumlah ban sebanyak ".$kendaraanZae ->getBan ()."dengan mesin".$kendaraanZae->
        getJenisMesin ()."Berwarna ".$kendaraanZae->getWarna ()."dengan bahan bakar".$kendaraanZae
        ->getBahanBakar ()."<br>";

echo " Ryan Aldi memiliki kendaraan terbaru daengan teknologi terkini <br> dengan
        jumlah ban sebanyak ".$kendaraanRyan ->getBan ()."dengan mesin".$kendaraanRyan->
        getJenisMesin ()."Berwarna ".$kendaraanRyan->getWarna ()."dengan bahan bakar".$kendaraanRyan
        ->getBahanBakar()."<br>";

echo " Faris memiliki kendaraan terbaru daengan teknologi terkini <br> dengan
        jumlah ban sebanyak ".$kendaraanFaris ->getBan ()."dengan mesin".$kendaraanFaris->
        getJenisMesin ()."Berwarna ".$kendaraanFaris->getWarna ()."dengan bahan bakar".$kendaraanFaris
        ->getBahanBakar ()."<br>";

echo " Roni Danu memiliki kendaraan terbaru daengan teknologi terkini <br> dengan
        jumlah ban sebanyak ".$kendaraanRoni ->getBan ()."dengan mesin".$kendaraanRoni->
        getJenisMesin ()."Berwarna ".$kendaraanRoni->getWarna ()."dengan bahan bakar".$kendaraanRoni
        ->getBahanBakar ()."<br>";

echo " Romi Irawan memiliki kendaraan terbaru daengan teknologi terkini <br> dengan
        jumlah ban sebanyak ".$kendaraanRomi ->getBan ()."dengan mesin".$kendaraanRomi->
        getJenisMesin ()."Berwarna ".$kendaraanRomi->getWarna ()."dengan bahan bakar".$kendaraanRomi
        ->getBahanBakar ()."<br>";

echo " Roy memiliki kendaraan terbaru daengan teknologi terkini <br> dengan
        jumlah ban sebanyak ".$kendaraanRoy ->getBan ()."dengan mesin".$kendaraanRoy->
        getJenisMesin ()."Berwarna ".$kendaraanRoy->getWarna ()."dengan bahan bakar".$kendaraanRoy
        ->getBahanBakar ()."<br>";

?>
