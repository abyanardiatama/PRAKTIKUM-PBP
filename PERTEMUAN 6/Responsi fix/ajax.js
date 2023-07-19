function getKabupaten() {
    var xmlhttp = new XMLHttpRequest();
    var id = document.getElementById("id_provinsi").value;
    //alert(id);
    xmlhttp.open("GET", "getKabupaten.php?id_provinsi=" + id, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("id_kabupaten").innerHTML = this.responseText;
        }
    };
}

function getProvinsi() {
    var xmlhttp = new XMLHttpRequest();
    var inner = "id_provinsi";
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("id_provinsi").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET", "getProvinsi.php", true);
    xmlhttp.send();
}