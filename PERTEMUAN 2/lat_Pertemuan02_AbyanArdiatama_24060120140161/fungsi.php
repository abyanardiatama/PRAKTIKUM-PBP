<!--Abyan Ardiatama-->
<!--24060120140161-->
<!--Prak PBP B2-->
<html> 
    <head>
        <title>Hello World</title> 
    </head>
    <body>
        <?php
        echo'Contoh fungsi yang tidak mengembalikan nilai (disebut juga prosedur)<br />';
        //contoh fungsi yang tidak mengembalikan nilai (disebut juga prosedur)
        function print_mhs($nama,$nim,$prodi){ 
            echo 'Nama  : '.$nama.'<br />';
            echo 'NIM   : '.$nim.'<br />';
            echo 'Prodi : '.$prodi.'<br /><br />';
        }
        print_mhs('Abyan A.','24060120140161','Informatika');

        echo'Menghitung harga setelah diskon <br />';
        //menghitung harga setelah diskon 
        echo'parameter input: harga dan diskon <br />';
        //parameter input: harga dan diskon 
        function hitung_diskon($harga,$diskon){
            $harga = $harga - ($harga*$diskon/100);
            return $harga; 
        }
        //contoh pemanggilan fungsi
        $harga = 10000;
        $diskon = 20;
        $harga_diskon = hitung_diskon($harga,$diskon);
        echo 'Harga sebelum diskon = '.$harga.'<br />';
        echo 'Harga setelah diskon = '.$harga_diskon.'<br /><br />';
        
        //menghitung harga setelah diskon
        //parameter input: harga dan diskon (nilai default=10) 
        echo'Menghitung harga setelah diskon <br />';
        echo'parameter input: harga dan diskon (nilai default=10) <br />';
        function hitung_diskon2($harga,$diskon=10){
            $harga = $harga - ($harga*$diskon/100);
            return $harga; 
        }
            //contoh pemanggilan fungsi
            $harga = 10000;
            $harga_diskon = hitung_diskon2($harga);
            echo 'Harga sebelum diskon = '.$harga.'<br />';
            echo 'Harga setelah diskon = '.$harga_diskon.'<br /><br />';

        //menghitung harga setelah diskon
        //harga sebagai parameter input dan output
        echo'Menghitung harga setelah diskon <br />';
        echo'harga sebagai parameter input dan output<br />'; 
        function hitung_diskon3(&$harga,$diskon){
            $harga = $harga - ($harga*$diskon/100);
            return $harga; 
        }
        //contoh pemanggilan fungsi
        $harga = 10000;
        $diskon = 20;
        echo 'Harga sebelum diskon = '.$harga.'<br />'; 
        hitung_diskon3($harga,$diskon);
        echo 'Harga setelah diskon = '.$harga.'<br /><br />';

        //Fungsi rekursif faktorial
        echo'Fungsi rekursif faktorial<br />';
        function faktorial($n) {
            if($n == 0){ 
                return 1;
            }
            else{
                return $n * faktorial($n-1);
            } 
        }
        require_once("funsgi.php");
        //pemanggilan fungsi hitung_diskon
        $harga = 10000;
        $diskon = 20;
        $harga_diskon = hitung_diskon($harga,$diskon);
        echo 'Harga sebelum diskon = '.$harga.'<br />';
        echo 'Harga setelah diskon = '.$harga_diskon.'<br />'; 
        //pemanggilan fungsi faktorial
        echo'Nilai dari faktorial(4) adalah ';
        print(faktorial(4));
        ?> 
    </body>
</html>