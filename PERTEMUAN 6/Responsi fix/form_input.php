<?php include('header.html') ?>
<?php
/*TODO: buat 
1. server side validation
2. insert new user
3. tampilkan hasilnya error/berhasil */
?>
<?php include('footer.html') ?>

<div class = "card">
    <div class = "card-header">
        <h5>Form Input</h5>
    </div>
    <div class = "card-body">
        <form action = "form_input.php" method = "POST">
            <!--Id Provinsi in database variasi1-->
            <div class = "form-group">
                <label for = "id_provinsi">Provinsi</label>
                <!--TODO: ambil data dari pbp_variasi1-->
                <select class = "form-control" name = "id_provinsi" id = "id_provinsi" onchange="getKabupaten()">
                    <!--TODO: ambil data dari pbp_variasi1-->
                    <option value="0">Pilih Provinsi</option>
                    <?php
                    include('db_login.php');
                    $sql = "SELECT * FROM pbp_variasi1.provinsi";
                    $result = mysqli_query($db, $sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value = '".$row['id_provinsi']."'>".$row['nama_provinsi']."</option>";
                    }
                    ?>
                </select>

                <label for="id_kabupaten">Kabupaten</label>
                <select class="form-control" name="id_kabupaten" id="id_kabupaten"">
                    <option value="0">Pilih Kabupaten</option>
                    <!-- get data Kabupaten from id provinsi -->
                    <?php
                        require_once'db_login.php';
                        $id_provinsi = $_GET['id_provinsi'];
                        $sql = "SELECT * FROM pbp_variasi1.kabupaten WHERE id_provinsi = '$id_provinsi'";
                        $result = mysqli_query($db, $sql);
                        while($row = mysqli_fetch_array($result)){
                            echo "<option value = '".$row['id_kabupaten']."'>".$row['nama_kabupaten']."</option>";
                        }
                    ?>
                </select>
            </div>
            
            




