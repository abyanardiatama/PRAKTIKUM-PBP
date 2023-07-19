<?php 
    //getKabupaten.php for id_provinsi = 2
    require_once 'db_login.php';
    //get id provinsi from form_input.php
    // $id_provinsi = $_GET['id_provinsi'];
    $id_provinsi = $_GET['id_provinsi'];
    //cant echo id provinsi
    echo $id_provinsi;


    //get data kabupaten from id provinsi selected
    $sql = "SELECT * FROM pbp_variasi1.kabupaten WHERE id_provinsi = '$id_provinsi'";
    $result = $db->query($sql);
    if(!$result){
        echo "TidakBisa: " . $sql . "<br>" . mysqli_error($db);
    }
    else{
        while($row = mysqli_fetch_array($result)){
            //echo all data kabupaten from id provinsi selected
            //echo $row['nama_kabupaten'];
            echo "<option value = '".$row['id_kabupaten']."'>".$row['nama_kabupaten']."</option>";
        }
    }


    // $query = "SELECT * FROM pbp_variasi1.kabupaten WHERE id_provinsi = '$id_provinsi'";
    // $result = $db ->query($query);
    
    // if(!$result){
    //     die("Could not query the database: <br />". $db->error);
    // }
    // else{
    //     echo " Berhasil";
    // }
    // while($row = mysqli_fetch_array($result)){
    //     //echo all data kabupaten from id provinsi selected
    //     echo $result;

    // }
    // mysqli_close($conn);
?>
    
