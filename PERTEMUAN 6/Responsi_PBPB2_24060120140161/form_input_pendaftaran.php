<?php include('header.html') ?>
<?php
/*TODO: buat 
1. server side validation
2. insert new user
3. tampilkan hasilnya error/berhasil */

//1. validasi
if (isset($_POST['submit'])) {
    //nama
    $nama = test_input($_POST['nama']);
    if (empty($nama)) {
        $error_nama = "Nama harus diisi";
    }
    elseif (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
        $error_nama = "Nama hanya dapat berisi huruf dan spasi";
    }
    
    //email
    $email = test_input($_POST['email']);
    if (empty($email)) {
        $error_email = "Email harus diisi";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_email = "Format email salah";
    }
    
    //jenis_kelamin
    if (!isset($_POST['jenis_kelamin'])) {
        $error_jenis_kelamin = "Jenis kelamin harus diisi";
    }
    
    //alamat
    $alamat = test_input($_POST['alamat']);
    if (empty($alamat)) {
        $error_alamat = "Alamat harus diisi";
    }
    
    //provinsi
    if (!isset($_POST['provinsi'])) {
        $error_provinsi = "Provinsi harus diisi";
    }
    
    //kabupaten
    if (!isset($_POST['kabupaten'])) {
        $error_kabupaten = "Kabupaten harus diisi";
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
?>
<div class="card">
<div class="card-header">Form Input Pendaftaran</div>
<div class="card-body">
    <!-- /* TODO definisikan method dan actions */ -->
    <form name="daftar">
        <div method="POST" id="daftar" autocomplete="on" action="">
            <label for="name">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control">
            <div class="error text-danger"><?php if(isset($error_nama)) echo $error_nama;?></div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <!-- /* TODO buat cek email menggunakan ajax */ -->
            <input type="email" name="email" id="email" class="form-control" oninput="getUser()">
            <div class="error text-danger"><?php if(isset($error_email)) echo $error_email;?></div>
        </div>
        <label>Jenis Kelamin</label>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki">Laki-laki
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
            </label>
            <div class="error text-danger"><?php if (isset($error_jenis_kelamin)) echo $error_jenis_kelamin; ?></div>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" rows="3" class="form-control"></textarea>
            <div id="error_alamat" style="color: red;"></div>

        </div>
        <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <select name="provinsi" id="provinsi" class="form-control" onchange="getKabupaten(this.value)">
                <option value="">Pilih Provinsi</option>
                <!-- /* TODO tampilkan daftar provinsi menggunakan ajax */ -->
                <?php
                //get data provinsi from database
                require_once("./lib/db_login.php");

                $query = "SELECT * FROM provinsi";
                $result = $db->query($query);

                if (!$result) {
                    die("Could not query the database: <br />" . $db->error);
                }

                while ($row = $result->fetch_object()) {
                    echo '<option value="' . $row->id . '">' . $row->nama . '</option>';
                }

                $result->free();
                $db->close();
                ?>
            </select>
            <div id="error_provinsi" style="color: red;"></div>
        </div>
        <div class="form-group">
            <label for="kabupaten">Kabupaten</label>
            <select name="kabupaten" id="kabupaten" class="form-control" onchange="getKabupaten(this.value)" >
                <option value="">Pilih kabupaten</option>
                <!-- /* TODO tampilkan daftar kabupaten menggunakan ajax */ -->

                <!-- /* TODO tampilkan daftar kabupaten berdasarkan pilihan provinsi sebelumnya, menggunakan ajax*/ -->
            </select>
            <div id="error_kabupaten" style="color: red;"></div>
        </div>
        <br>
        <button type="submit" name="submit" value="submit" class="btn btn-primary container-fluid">Daftar</button>
    </form>
    </div>
</div>

<?php include('footer.html') ?>