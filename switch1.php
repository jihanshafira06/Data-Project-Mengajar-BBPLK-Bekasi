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
    // menampilkan hari
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
     echo "$hari <br>";         

    // menampilkan bulan
    $month=date('F');
    switch($month){
        case'January';
            $bulan="Januari";
            break;    
        case 'February';
            $bulan="Februari";
        break;
        case 'March';
            $bulan="Maret";
            break;
        case 'April';
            $bulan="April";
        break;
        case 'May';
            $bulan="Mei";
        break;
        case 'June';
            $bulan="Juni";
        break;
        case 'July';
            $bulan="Juli";
        break; 
        case'August';
            $bulan="Agustus";
            break;    
        case 'September';
            $bulan="September";
        break;
        case 'October';
            $bulan="Oktober";
            break;
        case 'November';
            $bulan="November";
        break;
        case 'December';
            $bulan="Desember";
        break;         
    }
    echo "$month <br>";
    echo  "$bulan <br>";

    date_default_timezone_set('Asia/Jakarta');
    echo date('H:i:s').",". $hari.$bulan.date('Y');     
    ?>   
</body>
</html>