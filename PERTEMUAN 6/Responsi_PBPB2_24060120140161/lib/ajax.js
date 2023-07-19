function getXMLHttpRequest() {
    if (window.XMLHttpRequest) {
      return new XMLHttpRequest();
    } else {
      return new ActiveXObject("Microsoft.XMLHTTP");
    }
}
function callAjax(url, inner) {
    const xmlHttp = getXMLHttpRequest();
    xmlHttp.open("GET", url, true);

    xmlHttp.onreadystatechange = function () {
        document.getElementById(inner).innerHTML = '<img src="../img/ajax_loader.png" alt="ajax_loader" />';

        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        document.getElementById(inner).innerHTML = xmlHttp.responseText;
        }
        return false;
    };
    xmlHttp.send(null);
  }
  
function getKabupaten(id_provinsi) {
    const inner = "kabupaten";
    const url = `./lib/getKabupaten.php?id_provinsi=${id_provinsi}`;

    
    if (id_provinsi == "") {
        document.getElementById(inner).innerHTML = "";
    } else {
        callAjax(url, inner);
    }
}
function getUser(email) {
    const inner = "success_email";
    const url = `./lib/getUser.php?email=${email}`;
  
    if (email == "") {
      document.getElementById(inner).innerHTML = "";
    } else {
      callAjax(url, inner);
    }
  }
  