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
        $UserName = $_POST['UserName'];
        $Password = $_POST['Password'];
        if($UserName=="jihanshr"){
            if($Password=="shr06"){
                 echo "Berhasil Login";
            }else{
                 echo "Password anda salah"; 
            }
        }else{
             echo "UserName salah";
        }
               
    ?>
   
</body>
</html>