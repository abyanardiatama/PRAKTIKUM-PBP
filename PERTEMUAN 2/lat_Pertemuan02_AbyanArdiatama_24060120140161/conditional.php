<!--Abyan Ardiatama-->
<!--24060120140161-->
<!--Prak PBP B2-->
<html> 
    <head>
        <title>Hello World</title> 
    </head>
    <body>
        <?php
        //SINGLE IF-ELSE
        echo 'SINGLE IF-ELSE<br/>';
        $lulus = FALSE; 
        if ($lulus){
            echo 'Selamat Anda Lulus. <br/>'; }
        else{
            echo 'Maaf, Anda gagal. Silakan mencoba lagi. <br /> <br />'; }
        
        //MULTIPLE IF-ELSE
        echo 'MULTIPLE IF-ELSE<br/>';
        $nilai = 60;
        if ($nilai >= 80 && $nilai <= 100){
            echo 'Nilai : A <br /> <br />';
        }elseif ($nilai >= 60 && $nilai < 80){
            echo 'Nilai : B <br /><br />';
        }elseif ($nilai >= 40 && $nilai < 60){
            echo 'Nilai : C <br /><br />';
        }elseif ($nilai >= 20 && $nilai < 40){
            echo 'Nilai : D <br /><br />';
        }elseif ($nilai >= 0 && $nilai < 20){
            echo 'Nilai : E <br /><br />'; 
        }else{
            echo 'Invalid nilai <br />'; }

        //SWITCH
        echo 'SWITCH<br/>';
        $nilai = 'AB'; switch ($nilai) {
            case "A":
                echo "Sangat Baik. <br />"; 
                break;
            case "B":
                echo "Baik. <br />"; 
                break;
            case "C":
                echo "Cukup. <br />"; 
                break;
            case "D":
                echo "Kurang. <br />";
                break; 
            case "E":
                echo "Tidak Lulus. <br />";
                break; 
            default:
                echo "Invalid nilai! <br />"; 
                break;
        }
        ?> 
    </body>
</html>