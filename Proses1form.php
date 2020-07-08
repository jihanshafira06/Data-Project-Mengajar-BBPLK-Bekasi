<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Barang</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <?php
    $NamaBarang=$_POST['NamaBarang'];
        echo "Nama : $NamaBarang <br>";
    $HargaBarang=$_POST['HargaBarang'];
        echo "Harga : $HargaBarang <br>";
    $JumlahBarang=$_POST['JumlahBarang'];
        echo "Jumlah : $JumlahBarang <br>";
    $totalharga=$HargaBarang*$JumlahBarang;
        echo "TotalHarga : $totalharga <br>";
        setcookie("totalharga",$totalharga);
    ?>
    <form action="Proses2form.php" method="post">
    UangBayar:      <input type="number" name="UangBayar" min="0" style="width:300px" onchange="getkembali()"
                    onkeyup="getkembali()" id="bayar" placeholder="masukan jumlah uang bayar" required ><hr>
    UangKembali:    <input type="number" name="Uangkembali" min="0"  style="width:300px"><hr>
                    <input type="submit" value="Bayar" >
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script> 
    <script>
        function getkembali(){
            var totalharga = document.getElementById('totalharga').value
            var UangBayar = document.getElementById('bayar').value

            var Uangkembali = UangBayar-totalharga
            document.getElementById ('kembali').value =Uangkembali
            console.log(Uangkembali)
        }

    </script>
</body>
</html>