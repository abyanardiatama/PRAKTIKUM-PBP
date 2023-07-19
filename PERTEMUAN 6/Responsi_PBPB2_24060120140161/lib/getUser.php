<?php 
    require_once("./lib/db_login.php");
    //add user to database
    if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['jenis_kelamin']) && isset($_POST['alamat']) && isset($_POST['provinsi']) && isset($_POST['kabupaten'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $provinsi = $_POST['provinsi'];
        $kabupaten = $_POST['kabupaten'];
        $query = "INSERT INTO user (nama, email, jenis_kelamin, alamat, id_provinsi, id_kabupaten) VALUES ('" . $nama . "', '" . $email . "', '" . $jenis_kelamin . "', '" . $alamat . "', '" . $provinsi . "', '" . $kabupaten . "')";
        $result = $db->query($query);
        if (!$result) {
            die("Could not query the database: <br />" . $db->error);
            echo '<div class="alert alert-danger alert-dismissible">
            <strong>Error!</strong> Could not query the database<br>'.
            $db->error . '<br>query = ' . $query . '
            </div>';
        }
        else{
            echo '<div class="alert alert-success alert-dismissible">
            <strong>Success!</strong> Data has been added.<br>
          </div>';
        }
        $db->close();
        header('Location: form_input_pendaftaran.php');

    }
?>