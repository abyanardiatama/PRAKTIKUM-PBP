<!--Abyan Ardiatama-->
<!--24060120140161-->
<!--Praktikum PBP 3-->
<html>
<head>
    <meta charset="utf-8">
    <title>Form Input Siswa</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <?php
    
    /* NIS tidak boleh kosong dan harus diisi angka */ 
    if (isset($_POST['submit'])) {
        $nis = test_input($_POST['nis']);
        if (empty($nis)) {
          $error_nis = "NIS harus diisi";
        }
        elseif (!preg_match("/^[0-9]*$/", $nis)) {
          $error_nis = "NIS hanya dapat berisi angka";
        }  
        /*Nama tidak boleh kosong dan harus berisi huruf dan spasi*/
        $nama = test_input($_POST['nama']);
        if (empty($nama)) {
            $error_nama = "Nama harus diisi";
        }
        elseif (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
            $error_nama = "Nama hanya dapat berisi huruf dan spasi";
        }

        /* Jenis kelamin harus dipilih salah satu */
        if (!isset($_POST['jenis_kelamin'])) {
            $error_jenis_kelamin = "Jenis kelamin harus diisi";
        }
        /*Kelas tidak boleh kosong*/
        if (!isset($_POST['kelas'])) {
            $error_kelas = "Kelas harus diisi";
        }
        if (!isset($_POST['eskul'])) {
            $error_eskul = "Ekstrakurikuler harus diisi";
        }
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <div class="container"><br>
    <div class="card">
    <div class="card-header">Form Input Siswa</div> 
    <div class="card-body">
    
    <form method="POST" autocomplete="on" action="">
    <div class="form-group">
        <label for="nis:">NIS :</label>
        <input type="text" class="form-control" id="nis" name="nis" maxlength="10" value="<?php if(isset($nis)) {echo $nis;} ?>">
        <div class="error text-danger"><?php if(isset($error_nis)) echo $error_nis;?></div>
    </div>
    <div class="form-group">
        <label for="nama">Nama :</label>
        <input type="text" class="form-control" id="nama" name="nama" maxlength="50" value="<?php if(isset($nama)) {echo $nama;} ?>">
        <div class="error text-danger"><?php if(isset($error_nama)) echo $error_nama;?></div>
    </div>
    <label>Jenis Kelamin:</label>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" <?php if (isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == 'pria') echo 'checked' ?> name="jenis_kelamin" value="pria">Pria
        </label>
      <div class="error text-danger"><?php if (isset($error_jenis_kelamin)) echo $error_jenis_kelamin; ?></div>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="jenis_kelamin" value="wanita" <?php if (isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == 'wanita') echo 'checked' ?> name="jenis_kelamin" value="wanita">Wanita
        </label>
      <div class="error text-danger"><?php if (isset($error_jenis_kelamin)) echo $error_jenis_kelamin; ?></div>
    </div>
    <br>
    <div class="form-group">
        <label for="kelas">Kelas:</label>
        <select onchange="hideEskul()" id="kelas" name="kelas" class="form-control">
        <option value="" <?php if(!isset($_POST['kelas'])) echo 'selected' ?> disabled>-- Pilih Kelas --</option>
            <option value="X" <?php if (isset($_POST['kelas']) && ($_POST['kelas']== "X")) echo 'selected' ?>>X</option>
            <option value="XI" <?php if (isset($_POST['kelas'])&& ($_POST['kelas']== "XI")) echo 'selected' ?>>XI</option>
            <option value="XII" <?php if (isset($_POST['kelas'])&& ($_POST['kelas']== "XII")) echo 'selected' ?>>XII</option>
        </select>
        <div class="error text-danger"><?php if(isset($error_kelas)) echo $error_kelas;?></div>
    </div>
    <br>
    <div id="ekstra_container" <?php if((!isset($_POST['kelas'])) or (isset($_POST['kelas']) && $_POST['kelas'] != 'XII')) echo 'class="d-block"'; else echo 'class="d-none"' ?>>
    <label>Ekstrakurikuler:</label>
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input-eks" name="eskul[]" value="Pramuka" <?php if (isset($_POST['eskul']) && in_array('Pramuka',$_POST['eskul'])) echo 'checked'; ?>>Pramuka
        </label>
        <div class="error text-danger"><?php if(isset($error_eskul)) echo $error_eskul;?></div>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input-eks" name="eskul[]" value="Seni Tari" <?php if (isset($_POST['eskul']) && in_array('Seni Tari',$_POST['eskul'])) echo 'checked'; ?>>Seni Tari
        </label>
        <div class="error text-danger"><?php if(isset($error_eskul)) echo $error_eskul;?></div>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input-eks" name="eskul[]" value="Sinematografi" <?php if (isset($_POST['eskul']) && in_array('Sinematografi',$_POST['eskul'])) echo 'checked'; ?>>Sinematografi
        </label>
        <div class="error text-danger"><?php if(isset($error_eskul)) echo $error_eskul;?></div>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input-eks" name="eskul[]" value="Basket" <?php if (isset($_POST['eskul']) && in_array('Basket',$_POST['eskul'])) echo 'checked'; ?>>Basket
        </label>
        <div class="error text-danger"><?php if(isset($error_eskul)) echo $error_eskul;?></div>
    </div>
    </div>
    <br>
    <!--submit,reset,dan button-->
    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>
    </form>
</div>
<?php
if (isset($_POST["submit"])&& isset($_POST["nama"])&& isset($_POST["jenis_kelamin"])&& isset($_POST["kelas"])) {
    if(isset($_POST["nis"])){
        if(!preg_match("/^[0-9]*$/", $nis)){
            echo "<div class='alert alert-danger'>NIS hanya boleh berisi angka</div>";
        }
        else{
            if(isset($_POST["nama"])){
                if(!preg_match("/^[a-zA-Z ]*$/", $nama)){
                    echo "<div class='alert alert-danger'>Nama hanya boleh berisi huruf dan spasi</div>";
                }
                else{
                    //kelas X dan XI memilih 3 ekstrakurikuler
                    if ($_POST["kelas"] == "X" || $_POST["kelas"] == "XI") {
                        if(!isset($_POST["eskul"])){
                            echo "<div class='alert alert-danger'>Kelas X dan XI minimal memilih 1 ekstrakurikuler</div>";
                        }
                        else if (count($_POST["eskul"]) > 3) {
                            echo "<div class='alert alert-danger'>Kelas X dan XI maksimal memilih 3 ekstrakurikuler</div>";
                        }
                        elseif(isset($_POST["eskul"])){
                            if (count($_POST["eskul"]) >= 1 || count($_POST["eskul"]) == 3) {
                                echo "<h3>Your Input</h3>";
                                echo 'NIS : ' . $_POST['nis'] . '<br />';
                                echo 'Nama : ' . $_POST['nama'] . '<br />';
                                echo 'Jenis Kelamin : ' . $_POST['jenis_kelamin'] . '<br />';
                                echo 'Kelas : ' . $_POST['kelas'] . '<br />';
                                
                                $eskul = $_POST['eskul'];
                                if(!empty($eskul)){
                                    echo 'Ekstrakurikuler yang dipilih :';
                                    foreach($eskul as $eskul_item){
                                        echo '<br />' . $eskul_item;
                                    }
                                }
                            }
                        }
                    }
                    else if($_POST["kelas"] == "XII"){
                        //kelas XII tidak bisa memilih ekstrakurikuler
                        if (!isset($_POST["eskul"])) {
                            echo "<h3>Your Input</h3>";
                            echo 'NIS : ' . $_POST['nis'] . '<br />';
                            echo 'Nama : ' . $_POST['nama'] . '<br />';
                            echo 'Jenis Kelamin : ' . $_POST['jenis_kelamin'] . '<br />';
                            echo 'Kelas : ' . $_POST['kelas'] . '<br />';
                        } else {
                            echo "<div class='alert alert-danger'>Kelas XII tidak diperbolehkan mengikuti ekstrakurikuler</div>";
                        }
                    }
                }

            }
        }
    }    
}
?>
<script>
const hideEskul = () => {
    const kelas = document.getElementById('kelas').value;
    const ekstra_container = document.getElementById('ekstra_container');
    const checkbox = document.getElementsByClassName('form-check-input-eks');
    if (kelas != 'XII') {
        ekstra_container.classList.remove('d-none');
        ekstra_container.classList.add('d-block');
    }
    else {
        ekstra_container.classList.add('d-none');
        ekstra_container.classList.remove('d-block')
        for (let index = 0; index < checkbox.length; index++) {
            const element = checkbox[index];
            element.checked = false;
        }
    }
}
</script>
</body>
</html>