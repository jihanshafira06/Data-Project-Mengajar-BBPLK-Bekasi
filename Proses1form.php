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
        setcookie("totalharga",$totalharga);
    if($JumlahBarang >=10){
        $diskon=$totalharga*0.05;
    }else{
        $diskon=0;
    }
    $GrandTotal=$totalharga-$diskon;
    ?>
    <form action="Proses2form.php" method="post">
    Total Harga  :     <input type="number" name="totalharga" min="0" style="width:300px" id="totalharga" value="<?=$totalharga;?>" readonly><hr>
    Diskon       :     <input type="number" name="diskon" min="0" style="width:300px" id="diskon" value="<?=$diskon;?>" readonly><hr>
    Grand Total  :     <input type="number" name="Grand Total" min="0" style="width:300px" id="GrandTotal" value="<?=$GrandTotal;?>" readonly><hr>
    Uang Bayar   :     <input type="number" name="UangBayar" min="0" style="width:300px" onchange="getkembali()"
                       onkeyup="getkembali()" id="bayar" required="" ><hr>
    Uang Kembali :     <input type="number" name="Uangkembali" min="0"  style="width:300px"id="kembali" readonly><hr>
                       <input type="submit" value="Bayar" >
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script> 
    <script>
        function getkembali(){
            var totalharga = document.getElementById('totalharga').value
            var UangBayar = document.getElementById('bayar').value
            var GrandTotal = document.getElementById('GrandTotal').value

            var Uangkembali = UangBayar-GrandTotal
            document.getElementById ('kembali').value =Uangkembali
            console.log(Uangkembali)
        }

    </script>
</body>
</html>