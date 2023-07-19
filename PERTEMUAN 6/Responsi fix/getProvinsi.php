<?php
//get data provinsi dari database ke dropdown
    require_once('db_login.php');
    $sql = "SELECT * FROM pbp_variasi1.provinsi";
    $result = $db->query($sql);
    if(!$result){
        echo "TidakBisa: " . $sql . "<br>" . mysqli_error($db);
    }
    else{
        while($row = mysqli_fetch_array($result)){
            //echo all data provinsi
            echo "<option value = '".$row['id_provinsi']."'>".$row['nama_provinsi']."</option>";
        }
    }
?>
