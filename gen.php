<?php
    $KEY = "VVIncapabeleBillie";
    $LOCALURL = "http://";
    $input = $_GET["input"];
    $base64 = base64_encode(openssl_encrypt($input,"AES-128-CBC", $KEY));
    $url = $LOCALURL . "?kamp=" . $base64;
    echo $url;
?>