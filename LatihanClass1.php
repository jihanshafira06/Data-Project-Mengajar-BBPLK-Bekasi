<?php
class mobil {
    private $warna;
    public $merk;
    
    public function setwarna ($warnaBaru){
        $this->warna = $warnaBaru;
    }
    public function getwarna (){
        return $this->warna;
    }
}

// $mobilAchmad = new mobil();
// $mobilAchmad ->setWarna("Hitam");

// echo "mobil achmad adalah berwarna ".$mobilAchmad->getWarna()."<br>";
// // echo "mobil achmad adalah berwarna ".$mobilAchmad->warna."<br>";

// $mobilAchmad->setWarna("Merah");

// echo "warna mobil Achmad yang terbaru adalah ".$mobilAchmad->getWarna()."<br>";

// 1
$mobilJihan = new mobil();
$mobilJihan ->setWarna("Biru");

echo "mobil Jihan adalah berwarna ".$mobilJihan->getWarna()."<br>";

$mobilJihan->setWarna("Kuning");

echo "warna mobil Jihan yang terbaru adalah ".$mobilJihan->getWarna()."<br>";

// 2

$mobilDoni = new mobil();
$mobilDoni ->setWarna("Silver");

echo "mobil Doni adalah berwarna ".$mobilDoni->getWarna()."<br>";

$mobilDoni->setWarna("Hijau");

echo "warna mobil Doni yang terbaru adalah ".$mobilDoni->getWarna()."<br>";

// 3

$mobilMila = new mobil();
$mobilMila ->setWarna("Pink");

echo "mobil Mila adalah berwarna ".$mobilMila->getWarna()."<br>";

$mobilMila->setWarna("Merah");

echo "warna mobil Mila yang terbaru adalah ".$mobilMila->getWarna()."<br>";

// 4
$mobilRoni = new mobil();
$mobilRoni ->setWarna("Putih");

echo "mobil Roni adalah berwarna ".$mobilRoni->getWarna()."<br>";

$mobilRoni->setWarna("Coklat");

echo "warna mobil Roni yang terbaru adalah ".$mobilRoni->getWarna()."<br>";

?>

