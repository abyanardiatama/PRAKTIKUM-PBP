function getXMLHttpRequest() {
    if (window.XMLHttpRequest) {
        //code for modern browser
        return new XMLHttpRequest();
    } else {
        //code for old IE browser
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
}

function getUser() {
    var email = encodeURI(document.forms["daftar"]["email"].value);
    var inner = "error_email";
    var url = "get_user.php?email=" + email;

    //TODO: write ajax getUser
}

function getKabupaten(idProv) {
    var inner = "kabupaten"
    var url = "get_kabupaten.php?id_prov=" + idProv
    //TODO: write ajax getKabupaten
}