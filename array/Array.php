<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tampilan Nama dan NRP Mahasiswa</h1>
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
        $mhslenght = count($mhs);
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
        
        echo "<h2>Nama dan NRP 4 Konndisi</h2>";
        echo "<p>1. IPK Mahasiswa >3.00 dan <3.25</p>";
        echo "<p>2. Mahasiswa berambut hitam dan lurue</p>";
        echo "<p>3. Mahasiswa memiliki berat badan 50kg dan tinggi badan 160cm</p>";
        echo "<p>4. Mahasiswa tidak sedang menjalani cuti</p>";
        echo "<h3>if else</h3>";
        for($i = 0;$i<$mhslenght;$i++)
        if($mhs[$i]['nrp']>=1 && $mhs[$i]['nrp']<=5)
             if($mhs[$i]['ipk']>3 && $mhs[$i]['ipk']<3.25)
                if($mhs[$i]['rambut'][0]=="hitam" && $mhs[$i]['rambut'][1]=="lurus")
                    if($mhs[$i]['bb']==50 && $mhs[$i]['tb']==160)
                        if($mhs[$i]['status']!="cuti")
                            echo "Nama : ".$mhs[$i]['nama']." "."<br/>NRP : ".$mhs[$i]['nrp']."<hr/>";

        echo "<h3>switch case</h3>";
        for($i = 0;$i<$mhslenght;$i++){
            switch($mhs){
                case (($mhs[$i]['nrp']>=6 && $mhs[$i]['nrp']<=10) &&
                ($mhs[$i]['ipk']>3 && $mhs[$i]['ipk']<3.25) &&
                ($mhs[$i]['rambut'][0]=="hitam" && $mhs[$i]['rambut'][1]=="lurus") &&
                ($mhs[$i]['bb']==50 && $mhs[$i]['tb']==160) &&
                ($mhs[$i]['status']!="cuti")):
                    echo "Nama : ".$mhs[$i]['nama']." "."<br/>NRP : ".$mhs[$i]['nrp']."<hr/>";
                    break;
            }
        }

        echo "<h3>do while</h3>";
        $i = 0;
        do{
            if($mhs[$i]['nrp']>=11 && $mhs[$i]['nrp']<=15){
                if($mhs[$i]['ipk']>3 && $mhs[$i]['ipk']<3.25){
                    if($mhs[$i]['rambut'][0]=="hitam" && $mhs[$i]['rambut'][1]=="lurus"){
                        if($mhs[$i]['bb']==50 && $mhs[$i]['tb']==160){
                            if($mhs[$i]['status']!="cuti"){
                                echo "Nama : ".$mhs[$i]['nama']." "."<br/>NRP : ".$mhs[$i]['nrp']."<hr/>";
                            }    
                        }
                    }
                }   
            }
            $i++; 
        }while ($i<sizeof($mhs));

        echo "<h3>for loop</h3>";
        for($i = 0;$i<$mhslenght;$i++){
            if($mhs[$i]['nrp']>=16 && $mhs[$i]['nrp']<=20){
                if($mhs[$i]['ipk']>3 && $mhs[$i]['ipk']<3.25){
                    if($mhs[$i]['rambut'][0]=="hitam" && $mhs[$i]['rambut'][1]=="lurus"){
                        if($mhs[$i]['bb']==50 && $mhs[$i]['tb']==160){
                            if($mhs[$i]['status']!="cuti"){
                                echo "Nama : ".$mhs[$i]['nama']." "."<br/>NRP : ".$mhs[$i]['nrp']."<hr/>";
                            }    
                        }
                    }
                }   
            }
        }

        echo "<h3>while</h3>";
        while($i<sizeof($mhs)){
            if($mhs[$i]['nrp']>=21 && $mhs[$i]['nrp']<=30){
                if($mhs[$i]['ipk']>3 && $mhs[$i]['ipk']<3.25){
                    if($mhs[$i]['rambut'][0]=="hitam" && $mhs[$i]['rambut'][1]=="lurus"){
                        if($mhs[$i]['bb']==50 && $mhs[$i]['tb']==160){
                            if($mhs[$i]['status']!="cuti"){
                                echo "Nama : ".$mhs[$i]['nama']." "."<br/>NRP : ".$mhs[$i]['nrp']."<hr/>";
                            }    
                        }
                    }
                }   
            }$i++;
        };
    ?>
</body>
</html>