<!--Abyan Ardiatama-->
<!--24060120140161-->
<!--Prak PBP B2-->
<html> 
    <head>
        <title>Hello World</title> 
    </head>
    <body>
        <?php
        //assign nilai ke variabel
        echo 'ASSIGN NILAI KE VARIABEL<br/>';
        $a = 15;
        echo 'Variabel a berisi : '.$a.'<br />'; 
        $a = 'Pemrograman Web dan Internet'; 
        echo 'Variabel a berisi : '.$a.'<br /><br />';
        
        //VARIABEL LOKAL
        echo 'VARIABEL LOKAL<br/>';
        // Define a function 
        function diskon( ){
            $harga = 1000;
            $harga = 0.2 * $harga;
        }
        $harga = 2000;
        diskon();
        echo 'harga = '.$harga.'<br /><br />';
        
        //VARIABEL GLOBAL
        echo 'VARIABEL GLOBAL<br/>';  
        // Define a function 
        function diskon1( ){
            // Define harga as a global variable 
            global $harga;
            // Multiple harga by 0.8
            $harga = 0.8 * $harga;
        }
        // Set harga
        $harga = 2000;
        // Call the function
        diskon1( );
        // Display the age
        echo 'harga = '.$harga.'<br /><br />';
        
        //VARIABEL STATIK
        echo 'VARIABEL STATIK<br/>';
        // Define the function 
        function diskon2( ){
            // Define harga as a static variable 
                static $harga = 1000;
            $harga = 0.8 * $harga;
            echo 'harga = '.$harga.'<br />'; 
        }
        // Set harga to 2000
        $harga = 30;
        // Call the function twice 
        diskon2();
        diskon2();
        // Display the harga
        echo 'harga = '.$harga.'<br /><br />';

        //VARIABEL SUPERGLOBAL
        echo 'VARIABEL SUPERGLOBAL<br/>';
        echo htmlentities($_SERVER["PHP_SELF"]);
        define("PBP", "Permograman Berbasis Platform");
        echo 'Hari ini sedang praktikum '.PWI.'<br />';
        $constant_name = "PWI";
        echo 'Hari ini sedang praktikum '.constant($constant_name).'<br />';
        //konstanta bawaan PHP
        echo 'File yang sedang diproses "'. __FILE__ .' pada baris "'. __LINE__ .'"<br />';
        ?> 
    </body>
</html>

