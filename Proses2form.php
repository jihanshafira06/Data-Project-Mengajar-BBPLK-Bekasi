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
        $totalharga = $_COOKIE['totalharga'];
        $UangBayar  = $_POST['UangBayar'];

        if($totalharga>$UangBayar){
            echo "<script>alert('Maaf Uang Bayar anda Kurang')</script>";
            echo "<script>window.history.back()</script>";
        }elseif($totalharga<$UangBayar){
            $uangkembali = number_format($UangBayar - $totalharga,0,",",".");
            echo "<script>alert('Terima kasih , Uang Kembali anda sebesar Rp.$uangkembali');</script>";
            echo "<script>window.location.assign('form_PenjualanBarang.php')</script>";
        }else{
            echo "<script>alert('Terima kasih ');</script>";
            echo "<script>window.location.assign('form_PenjualanBarang.php')</script>";
        }
        ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>  
</body>
</html>