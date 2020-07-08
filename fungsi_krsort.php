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
        // Memasukan nilai kedalam array
        $mobil=array("Zulka"=>"Volvo", "Ali"=>"BMW", "Ajuab"=>"Toyota");

        // Kunci atau key pada Array diurutkan secara Descending
        krsort($mobil);

        // Dengan looping menampilkan tiap nilai dari Array
        foreach ($mobil as $x => $nilai_x){
            echo "kunci=" . $x .", Nilainya=". $nilai_x;
            echo "<br/>";
        }       
        ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>  
</body>
</html>