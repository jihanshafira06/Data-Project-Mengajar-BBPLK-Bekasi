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
    $number=$_POST['number'];
     for($a=1;$a<=$number;$a++){
        for($b=1;$b<=$a;$b++){ 
             echo "*";
        }echo"<br>";
     }             
    ?>
    <a href="latihanform2.php">Kembali</a>
   
</body>
</html>