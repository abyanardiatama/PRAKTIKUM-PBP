<!--database pbp_variasi1 login-->
<?php 
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db_name = "pbp_variasi1";
    $db = mysqli_connect($host, $user, $pass, $db);
    if(!$db){
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    else{
        //echo "Koneksi berhasil";
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

