//Abyan Ardiatama
//24060120140161
//Pertemuam 01 - Praktikum PBP B2

const createCaptcha = () => {
    let captcha = '';
    for (let i = 0; i < 5; i++) {
      let random = Math.floor(Math.random() * (122 - 48 + 1) + 48);
      if (random >= 58 && random <= 64) {
        random = Math.floor(Math.random() * (90 - 65 + 1) + 65);
      }
      captcha += String.fromCharCode(random);
    }
    return captcha;
  }

  captcha = createCaptcha();
  document.getElementById('captcha').placeholder = captcha;
  captcha_answer = document.getElementById('captcha-answer').value;  
const validateCaptcha = () => {
    let captcha = document.getElementById('captcha').value;
    if (captcha === captcha_answer) {
        return true;
    } else {
        alert('Captcha yang kamu masukkan salah');
        return false;
    }
}
const createSubcategory = () => {
    let category = document.getElementById('kategori').value;
    let subkategori = document.getElementById('sub-kategori');
    subkategori.innerHTML = '';
    if (category === 'baju') {
        subkategori.innerHTML += '<option value="" selected disabled hidden>--Pilih Sub Kategori--</option>';
        subkategori.innerHTML += '<option value="2">Baju Pria</option>';
        subkategori.innerHTML += '<option value="3">Baju Wanita</option>';
        subkategori.innerHTML += '<option value="4">Baju Anak</option>';
    } else if (category === 'elektronik') {
        subkategori.innerHTML += '<option value="" selected disabled hidden>--Pilih Sub Kategori--</option>';
        subkategori.innerHTML += '<option value="2">Mesin Cuci</option>';
        subkategori.innerHTML += '<option value="3">Kulkas</option>';
        subkategori.innerHTML += '<option value="4">AC</option>';
    } else if (category === 'alat-tulis') {
        subkategori.innerHTML += '<option value="" selected disabled hidden>--Pilih Sub Kategori--</option>';
        subkategori.innerHTML += '<option value="2">Kertas</option>';
        subkategori.innerHTML += '<option value="3">Map</option>';
        subkategori.innerHTML += '<option value="4">Pulpen</option>';
    }
}
const validateGrosir = () => {
    let grosir = document.getElementById('grosir-y');
    let hargaGrosir = document.getElementById('harga-grosir');
    if (grosir.checked) {
        hargaGrosir.removeAttribute('disabled');
    } else {
        hargaGrosir.setAttribute('disabled', 'disabled');
    }
}

const jasaKirim = () => {
    var checkboxgroup = document.getElementById('checkboxgroup').getElementsByTagName("input");
    var limit = 3;
    for (var i = 0; i < checkboxgroup.length; i++) {
        checkboxgroup[i].onclick = function() {
            var checkedcount = 0;
                for (var i = 0; i < checkboxgroup.length; i++) {
                checkedcount += (checkboxgroup[i].checked) ? 1 : 0;
            }
            if (checkedcount > limit) {
                console.log("Kamu hanya bisa memilih " + limit + " jasa kirim.");
                alert("Kamu hanya bisa memilih " + limit + " jasa kirim.");
                this.checked = false;
            }
        }
    }
}
