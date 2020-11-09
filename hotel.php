<?php

$response = array();
$response["hotel"] = array();
$datasingle1 = array();
$datasingle1["id"] = "1";
$datasingle1["nama"] = "Femilya";
$datasingle1["alamat"] = "Pagar Merbau";
$datasingle1["nomor_telpon"] = "123456789012";
$datasingle1["kordinat"] = "-6.478927, 107.481261";
$datasingle1["gambar_url"] = "http://localhost/apifemi/foto/hotel_harper.jpeg";

$datasingle2 = array();
$datasingle2["id"] = "2";
$datasingle2["nama"] = "Femilya";
$datasingle2["alamat"] = "Pagar Merbau";
$datasingle2["nomor_telpon"] = "123456789012";
$datasingle2["kordinat"] = "-6.478927, 107.481261";
$datasingle2["gambar_url"] = "http://localhost/apifemi/foto/hotel_harper.jpeg";
$datasingle3 = array();
$datasingle3["id"] = "3";
$datasingle3["nama"] =  "Femilya";
$datasingle3["alamat"] = "Pagar Merbau";
$datasingle3["nomor_telpon"] = "123456789012";
$datasingle3["kordinat"] = "-6.478927, 107.481261";
$datasingle3["gambar_url"] = "http://localhost/apifemi/foto/hotel_harper.jpeg";

array_push($response["hotel"], $datasingle1);
array_push($response["hotel"], $datasingle2);
array_push($response["hotel"], $datasingle3);

echo json_encode($response);

?>
