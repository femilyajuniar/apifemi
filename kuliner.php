<?php

$response = array();
$response["kuliner"] = array();

$datasingle1 = array();
$datasingle1["id"] = "1";
$datasingle1["nama"] = "Surabi Kedai Kota";
$datasingle1["alamat"] = "Jl. Taman Pahlawan No.2, Nagri Kaler, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41119";
$datasingle1["jam_buka_tutup"] = "setiap Hari Pukul 08.00 WIB - 22.00 WIB.";
$datasingle1["kordinat"] = "-6.478927, 107.481261";
$datasingle1["gambar_url"] = "http://localhost/apifemi/foto/hotel_harper.jpeg";
$datasingle1["kategori"] = "Kuliner Inovasi";

$datasingle2 = array();
$datasingle2["id"] = "2";
$datasingle2["nama"] = "Surabi Sei Balai";
$datasingle2["alamat"] = "Jl. Taman Pahlawan No.2, Nagri Kaler, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41119";
$datasingle2["jam_buka_tutup"] = "setiap Hari Pukul 08.00 WIB - 22.00 WIB.";
$datasingle2["kordinat"] = "-6.478927, 107.481261";
$datasingle2["gambar_url"] = "http://localhost/apifemi/foto/hotel_harper.jpeg";
$datasingle2["kategori"] = "Kuliner Inovasi";

$datasingle3 = array();
$datasingle3["id"] = "3";
$datasingle3["nama"] = "Surabi Sei Balai";
$datasingle3["alamat"] = "Jl. Taman Pahlawan No.2, Nagri Kaler, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41119";
$datasingle3["jam_buka_tutup"] = "setiap Hari Pukul 08.00 WIB - 22.00 WIB.";
$datasingle3["kordinat"] = "-6.478927, 107.481261";
$datasingle3["gambar_url"] = "http://localhost/apifemi/foto/hotel_harper.jpeg";
$datasingle3["kategori"] = "Kuliner Inovasi";

array_push($response["kuliner"], $datasingle1);
array_push($response["kuliner"], $datasingle2);
array_push($response["kuliner"], $datasingle3);

echo json_encode($response);

?>
