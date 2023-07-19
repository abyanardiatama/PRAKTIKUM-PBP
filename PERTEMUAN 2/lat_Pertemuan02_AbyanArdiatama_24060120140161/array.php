<!--Abyan Ardiatama-->
<!--24060120140161-->
<!--Prak PBP B2-->
<html> 
    <head>
        <title>Hello World</title> 
    </head>
    <body>
        <?php
        echo'<b>Array</b><br/><br/>';
        echo'Numeric Array<br /> ';
        //assignment melalui array identifier 
        for ($i=0;$i<10;$i++){
            $diskon[] = $i * 5; 
        }
        //$diskon = array(0,10,20,30,40,50,60,70,80,90);
        //cek apakah sebuah variabel bertipe array 
        echo 'Apakah $diskon adalah array? ';
        if (is_array($diskon))
            echo 'Array <br />'; 
        else
            echo 'Not Array <br />';
        //menampilkan isi array
        $n = sizeof($diskon); 
        for($i=0;$i<=($n-1);$i++){
            echo 'Diskon hari ke-'.($i+1).' = '.$diskon[$i].' % <br />'; 
        }

        //assignment menggunakan fungsi array
        echo'<br />Associative Array<br /> ';
        //assignment menggunakan fungsi array 
        $bulan = array('jan' => 'Januari',
                    'feb' => 'Februari', 
                    'mar' => 'Maret', 
                    'apr' => 'April', 
                    'mei' => 'Mei',
                    'jun' => 'Juni',
                    'jul' => 'Juli',
                    'agu' => 'Agustus', 
                    'sep' => 'Sepetember', 
                    'okt' => 'Oktober', 
                    'nov' => 'November', 
                    'des' => 'Desember');
        foreach($bulan as $kode_bulan => $nama_bulan){
            echo 'Kode bulan "'.$kode_bulan.'" => "'.$nama_bulan.'"<br />';
        }
        ?> 
    </body>
</html>