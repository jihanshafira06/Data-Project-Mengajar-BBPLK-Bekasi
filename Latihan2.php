<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <?php
        // $a = $_POST['angka'];
        // if ($a < 10){
        //     echo "Variable a adalah lebih kecil dari 10";
        // }else{
        //     echo "Variabel a adalah tidak lebih kecil dari 10";
        // }

        $a = $_POST['angka'];
        if($a>80){
            echo "Grade A";
        }elseif($a>70){
            echo "Grade B";
        }elseif($a>50){
            echo "Grade C";
        }else{
            echo "Grade D";
        }
    ?>
    <a href="Form_latihan.php">Kembali</a>

</body>
</html>