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
      $a=1;
      while ($a<12){
          if($a!=5){
            echo "$a";
          }
          $a=$a+2;
      }           
    ?>
   
</body>
</html>