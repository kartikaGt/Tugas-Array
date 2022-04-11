<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sorting</h1>
<?php
     $mhs = array(
        array('nama'=>"Riko",'nrp'=>"1",'ipk'=>"3.18",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),
        array('nama'=>"Mia",'nrp'=>"2",'ipk'=>"3.06",'rambut'=>array("coklat","berombak"),'bb'=>"55",'tb'=>"160",'status'=>"cuti"),
        array('nama'=>"Samsul",'nrp'=>"3",'ipk'=>"3.4",'rambut'=>array("hitam","lurus"),'bb'=>"60",'tb'=>"175",'status'=>"aktif"),
        array('nama'=>"Kartika",'nrp'=>"4",'ipk'=>"3.15",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),
        array('nama'=>"Sella",'nrp'=>"5",'ipk'=>"3.65",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"cuti"),
        array('nama'=>"Michel",'nrp'=>"6",'ipk'=>"3.70",'rambut'=>array("coklat","keriting"),'bb'=>"60",'tb'=>"150",'status'=>"aktif"),
        array('nama'=>"Tiara",'nrp'=>"7",'ipk'=>"3.14",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),
        array('nama'=>"Adim",'nrp'=>"8",'ipk'=>"3.25",'rambut'=>array("coklat","berombak"),'bb'=>"55",'tb'=>"170",'status'=>"aktif"),
        array('nama'=>"Mei Mei",'nrp'=>"9",'ipk'=>"3.10",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),
        array('nama'=>"Fizi",'nrp'=>"10",'ipk'=>"3.5",'rambut'=>array("hitam","keriting"),'bb'=>"65",'tb'=>"180",'status'=>"aktif"),
        array('nama'=>"Surya",'nrp'=>"11",'ipk'=>"3.06",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),
        array('nama'=>"Paijo",'nrp'=>"12",'ipk'=>"3.15",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),
        array('nama'=>"Jaka",'nrp'=>"13",'ipk'=>"3.8",'rambut'=>array("merah","lurus"),'bb'=>"70",'tb'=>"180",'status'=>"cuti"),
        array('nama'=>"Nirmala",'nrp'=>"14",'ipk'=>"3.3",'rambut'=>array("coklat","bergelombang"),'bb'=>"60",'tb'=>"168",'status'=>"cuti"),                   
        array('nama'=>"Bunga",'nrp'=>"15",'ipk'=>"3.5",'rambut'=>array("merah","bergelombang"),'bb'=>"40",'tb'=>"160",'status'=>"cuti"),
        array('nama'=>"Kirana",'nrp'=>"16",'ipk'=>"3.87",'rambut'=>array("hitam","bergelombang"),'bb'=>"57",'tb'=>"150",'status'=>"aktif"), 
        array('nama'=>"Satria",'nrp'=>"17",'ipk'=>"3.12",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),  
        array('nama'=>"Doni",'nrp'=>"18",'ipk'=>"3.10",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"), 
        array('nama'=>"Mela",'nrp'=>"19",'ipk'=>"3.7",'rambut'=>array("coklat","keriting"),'bb'=>"50",'tb'=>"175",'status'=>"aktif"),
        array('nama'=>"Suci",'nrp'=>"20",'ipk'=>"3.2",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"), 
        array('nama'=>"Wisnu",'nrp'=>"21",'ipk'=>"3.9",'rambut'=>array("merah","keriting"),'bb'=>"70",'tb'=>"180",'status'=>"cuti"), 
        array('nama'=>"Musa",'nrp'=>"22",'ipk'=>"3.3",'rambut'=>array("coklat","lurus"),'bb'=>"60",'tb'=>"178",'status'=>"cuti"), 
        array('nama'=>"Jesica",'nrp'=>"23",'ipk'=>"3.5",'rambut'=>array("merah","bergelombang"),'bb'=>"40",'tb'=>"160",'status'=>"cuti"),   
        array('nama'=>"Mawar",'nrp'=>"24",'ipk'=>"3.15",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),
        array('nama'=>"Mega",'nrp'=>"25",'ipk'=>"3.5",'rambut'=>array("merah","bergelombang"),'bb'=>"40",'tb'=>"160",'status'=>"cuti"),         
        
    );
    sort ($mhs);  
    $mhslenght = count($mhs);
    function dataMhs($mhs){  
        for ($i = 0;$i<$mhslenght;$i++){
        }
    }
    echo "<h2>nama soert ascending</h2>";
    echo "<table border='2'>";
    echo "<tr>";
    echo "<th>NRP</th>";
    echo "<th>Nama</th>";
    echo "<th>IPK</th>";
    echo "<th>Warna Rambut</th>";
    echo "<th>Bentuk Rambut</th>";
    echo "<th>Berat Badan</th>";
    echo "<th>Tinggi Badan</th>";
    echo "<th>Status</th>";
    echo "</tr>";
    for($i = 0;$i<$mhslenght;$i++){
        echo "<tr>";
        echo "<td>".$mhs[$i]['nrp']."</td>";
        echo "<td>".$mhs[$i]['nama']."</td>";
        echo "<td>".$mhs[$i]['ipk']."</td>";
        echo "<td>".$mhs[$i]['rambut'][0]."</td>";
        echo "<td>".$mhs[$i]['rambut'][1]."</td>";
        echo "<td>".$mhs[$i]['bb']."</td>";
        echo "<td>".$mhs[$i]['tb']."</td>";
        echo "<td>".$mhs[$i]['status']."</td>";
        echo "</tr>";
    }
    echo "</table>";

    $mhs2 = array(
        array('nrp'=>1,'nama'=>"Riko",'ipk'=>"3.18",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),
        array('nrp'=>2,'nama'=>"Mia",'ipk'=>"3.06",'rambut'=>array("coklat","berombak"),'bb'=>"55",'tb'=>"160",'status'=>"cuti"),
        array('nrp'=>3,'nama'=>"Samsul",'ipk'=>"3.4",'rambut'=>array("hitam","lurus"),'bb'=>"60",'tb'=>"175",'status'=>"aktif"),
        array('nrp'=>4,'nama'=>"Kartika",'ipk'=>"3.15",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),
        array('nrp'=>5,'nama'=>"Sella",'ipk'=>"3.65",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"cuti"),
        array('nrp'=>6,'nama'=>"Michel",'ipk'=>"3.70",'rambut'=>array("coklat","keriting"),'bb'=>"60",'tb'=>"150",'status'=>"aktif"),
        array('nrp'=>7,'nama'=>"Tiara",'ipk'=>"3.14",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),
        array('nrp'=>8,'nama'=>"Adim",'ipk'=>"3.25",'rambut'=>array("coklat","berombak"),'bb'=>"55",'tb'=>"170",'status'=>"aktif"),
        array('nrp'=>9,'nama'=>"Mei Mei",'ipk'=>"3.10",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),
        array('nrp'=>10,'nama'=>"Fizi",'ipk'=>"3.5",'rambut'=>array("hitam","keriting"),'bb'=>"65",'tb'=>"180",'status'=>"aktif"),
        array('nrp'=>11,'nama'=>"Surya",'ipk'=>"3.06",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),
        array('nrp'=>12,'nama'=>"Paijo",'ipk'=>"3.15",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),
        array('nrp'=>13,'nama'=>"Jaka",'ipk'=>"3.8",'rambut'=>array("merah","lurus"),'bb'=>"70",'tb'=>"180",'status'=>"cuti"),
        array('nrp'=>14,'nama'=>"Nirmala",'ipk'=>"3.3",'rambut'=>array("coklat","bergelombang"),'bb'=>"60",'tb'=>"168",'status'=>"cuti"),                   
        array('nrp'=>15,'nama'=>"Bunga",'ipk'=>"3.5",'rambut'=>array("merah","bergelombang"),'bb'=>"40",'tb'=>"160",'status'=>"cuti"),
        array('nrp'=>16,'nama'=>"Kirana",'ipk'=>"3.87",'rambut'=>array("hitam","bergelombang"),'bb'=>"57",'tb'=>"150",'status'=>"aktif"), 
        array('nrp'=>17,'nama'=>"Satria",'ipk'=>"3.12",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),  
        array('nrp'=>18,'nama'=>"Doni",'ipk'=>"3.10",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"), 
        array('nrp'=>19,'nama'=>"Mela",'ipk'=>"3.7",'rambut'=>array("coklat","keriting"),'bb'=>"50",'tb'=>"175",'status'=>"aktif"),
        array('nrp'=>20,'nama'=>"Suci",'ipk'=>"3.2",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"), 
        array('nrp'=>21,'nama'=>"Wisnu",'ipk'=>"3.9",'rambut'=>array("merah","keriting"),'bb'=>"70",'tb'=>"180",'status'=>"cuti"), 
        array('nrp'=>22,'nama'=>"Musa",'ipk'=>"3.3",'rambut'=>array("coklat","lurus"),'bb'=>"60",'tb'=>"178",'status'=>"cuti"), 
        array('nrp'=>23,'nama'=>"Jesica",'ipk'=>"3.5",'rambut'=>array("merah","bergelombang"),'bb'=>"40",'tb'=>"160",'status'=>"cuti"),   
        array('nrp'=>24,'nama'=>"Mawar",'ipk'=>"3.15",'rambut'=>array("hitam","lurus"),'bb'=>"50",'tb'=>"160",'status'=>"aktif"),
        array('nrp'=>25,'nama'=>"Mega",'ipk'=>"3.5",'rambut'=>array("merah","bergelombang"),'bb'=>"40",'tb'=>"160",'status'=>"cuti"),         
        
    );
    rsort ($mhs2); 
    $mhs2lenght = count($mhs2);
    function dataMhs2($mhs2){  
        for ($i = 0;$i<$mhs2lenght;$i++){
        }
    }
   
    echo "<h2>nrp sort descending</h2>";
    echo "<table border='2'>";
    echo "<tr>";
    echo "<th>NRP</th>";
    echo "<th>Nama</th>";
    echo "<th>IPK</th>";
    echo "<th>Warna Rambut</th>";
    echo "<th>Bentuk Rambut</th>";
    echo "<th>Berat Badan</th>";
    echo "<th>Tinggi Badan</th>";
    echo "<th>Status</th>";
    echo "</tr>";
    for($i = 0;$i<$mhs2lenght;$i++){
        echo "<tr>";
        echo "<td>".$mhs2[$i]['nrp']."</td>";
        echo "<td>".$mhs2[$i]['nama']."</td>";
        echo "<td>".$mhs2[$i]['ipk']."</td>";
        echo "<td>".$mhs2[$i]['rambut'][0]."</td>";
        echo "<td>".$mhs2[$i]['rambut'][1]."</td>";
        echo "<td>".$mhs2[$i]['bb']."</td>";
        echo "<td>".$mhs2[$i]['tb']."</td>";
        echo "<td>".$mhs2[$i]['status']."</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>