<!--Abyan Ardiatama-->
<!--24060120140161-->
<!--Praktikum PBP B2-03-->

<html>
<head>
    <title>Tabel Nilai Mahasiswa</title>
</head>
<body>
    <?php
    echo '<table border="1">'; 
    echo '<tr>
            <td>Nama</td>
            <td>Nilai 1</td>
            <td>Nilai 2</td>
            <td>Nilai 3</td>
            <td>Nilai Rata-Rata</td>
    </tr>';
    $array_mhs = array(
        'Abdul' => array(89,90,54), 
        'Budi' => array(78,60,64), 
        'Nina' => array(67,56,84), 
        'Budi' => array(87,69,50),
        'Budi' => array(98,65,74)
    );
    function hitung_rata($array){
        $array = array_sum($array)/count($array);
        return $array;
    }
    foreach ($array_mhs as $key=>$value) {
        echo '<tr>';
        echo '<td>'.$key.'</td>';
        echo '<td>'.$value[0].'</td>';
        echo '<td>'.$value[1].'</td>';
        echo '<td>'.$value[2].'</td>';
        $array=array($value[0],$value[1],$value[2]);
        $average = hitung_rata($array);
        echo '<td>'.$average.'</td>';
        echo '</tr>';
    }
    echo '</table>';
    print_mhs($array_mhs);
    ?>
</body>
</html>