<?php 
  /*
   * File : service.php
   * Deskripsi : program PHP u/ service pd. web service TANPA WSDL
   */

  //  definisi fungsi
  function tambah($a, $b) {
    return $a + $b;
  }

  // init service
  $server = new SoapServer(null, array("uri" => "urn://localhost/p11"));
  // register fungsi penjumlahan
  $server->addFunction("tambah");
  // process soap request
  $server->handle();
?>