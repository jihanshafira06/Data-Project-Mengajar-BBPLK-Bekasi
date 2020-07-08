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
        $day=date('l');
        switch($day){
            case'Sunday';
                $hari="Minggu";
                break;    
            case 'Monday';
                $hari="Senin";
            break;
            case 'Tuesday';
                $hari="Selasa";
                break;
            case 'Wednesday';
                $hari="Rabu";
            break;
            case 'Thursday';
                $hari="Kamis";
            break;
            case 'Friday';
                $hari="Jum'at";
            break;
            case 'Saturday';
                $hari="Sabtu";
            break;        
        }
        echo "$day <br>";
        echo $hari;         
    ?>   
</body>
</html>