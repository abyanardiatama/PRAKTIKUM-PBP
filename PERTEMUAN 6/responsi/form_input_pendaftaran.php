<?php include('header.html') ?>
<?php
/*TODO: buat 
1. server side validation
2. insert new user
3. tampilkan hasilnya error/berhasil */

?>

<div class="card">
    <div class="card-header">Form Input Pendaftaran</div>
    <div class="card-body">
        <!-- /* TODO definisikan method dan actions */ -->
        <form name="daftar">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
                <div id="error_name" style="color: red;"></div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <!-- /* TODO buat cek email menggunakan ajax */ -->
                <input type="email" name="email" id="email" class="form-control" oninput="getUser()">
                <div id="error_email" style="color: red;"></div>
            </div>
            <label>Jenis Kelamin</label>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="Laki-laki">Laki-laki
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="Perempuan">Perempuan
                </label>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="form-control"></textarea>
                <div id="error_alamat" style="color: red;"></div>
            </div>
            <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <select name="provinsi" id="provinsi" class="form-control">
                    <option value="">Pilih Provinsi</option>
                    <!-- /* TODO tampilkan daftar provinsi menggunakan ajax */ -->
                </select>
                <div id="error_provinsi" style="color: red;"></div>
            </div>
            <div class="form-group">
                <label for="kabupaten">Kabupaten</label>
                <select name="kabupaten" id="kabupaten" class="form-control">
                    <option value="">Pilih kabupaten</option>
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