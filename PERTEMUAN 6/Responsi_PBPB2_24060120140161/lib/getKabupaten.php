<?php 
  require_once("./lib/db_login.php");

  if (isset($_GET["id_provinsi"])) {
    $id_provinsi = $_GET["id_provinsi"];

    $query = "SELECT * FROM kabupaten WHERE id_provinsi='" . $id_provinsi . "'";
    $result = $db->query($query);
    if (!$result) {
      die("Could not query the database: <br />" . $db->error);
    }

    echo '<option value="" selected>Pilih Kabupaten</option>';
    
    while ($row = $result->fetch_object()) {
      echo '<option value="' . $row->id . '">' . $row->nama . '</option>';
    }

    $result->free();
    $db->close();
  }
?>