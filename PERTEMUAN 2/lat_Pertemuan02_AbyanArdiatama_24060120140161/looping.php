<!--Abyan Ardiatama-->
<!--24060120140161-->
<!--Prak PBP B2-->
<html> 
    <head>
        <title>Hello World</title> 
    </head>
    <body>
        <?php
        //FOR LOOP
        echo 'FOR-LOOP<br/>';
        $harga = 1000;
        echo '<table border="1">'; 
        echo '<tr>
                <td>No</td>
                <td>Diskon</td>
                <td>Harga Setelah Diskon</td>
            </tr>';
        for ($i=1;$i<=10;$i++){
            echo '<tr>';
            echo '<td>'.$i.'</td>';
            $diskon = $i * 0.1;
            echo '<td>'.($diskon*100).' % </td>'; $harga_diskon = $harga - ($harga * $diskon); echo '<td>'.$harga_diskon.'</td>';
            echo '</tr>'; 
        }
        echo '</table>';
        ?> 
    </body>
</html>