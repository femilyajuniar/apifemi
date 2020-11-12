<?php

$response = array();
$response["wisata"] = array();
$datasingle1 = array();
$datasingle1["id"] = "1";
$datasingle1["nama"] = "Danau Linting";
$datasingle1["gambar_url"] = "http://localhost/apifemi/foto/1wisata_linting.jpg";
$datasingle1["kategori"] = "Alam";

$datasingle2 = array();
$datasingle2["id"] = "2";
$datasingle2["nama"] = "The Le Hu Garden";
$datasingle2["gambar_url"] = "http://localhost/apifemi/foto/2wisata_th.jpg";
$datasingle2["kategori"] = "Taman";

$datasingle3 = array();
$datasingle3["id"] = "3";
$datasingle3["nama"] = "Air Terjun Sampuren Putih";
$datasingle3["gambar_url"] = "http://localhost/apifemi/foto/3wisata_air.jpg";
$datasingle3["kategori"] = "Alam";

$datasingle4 = array();
$datasingle4["id"] = "4";
$datasingle4["nama"] = "Pantai Salju";
$datasingle4["gambar_url"] = "http://localhost/apifemi/foto/4wisata_salju.jpg";
$datasingle4["kategori"] = "Alam";
	
$datasingle5 = array();
$datasingle5["id"] = "5";
$datasingle5["nama"] = "Air Terjun Pelangi";
$datasingle5["gambar_url"] = "http://localhost/apifemi/foto/5wisata_pelangi.jpg";
$datasingle5["kategori"] = "Alam";

$datasingle6 = array();
$datasingle6["id"] = "6";
$datasingle6["nama"] = "Taman Pramuka Sibolangit";
$datasingle6["gambar_url"] = "http://localhost/apifemi/foto/6wisata_pramuka.jpg";
$datasingle6["kategori"] = "Taman";

$datasingle7 = array();
$datasingle7["id"] = "7";
$datasingle7["nama"] = "Kampung Ladang Outbond";
$datasingle7["gambar_url"] = "http://localhost/apifemi/foto/6wisata_ladang.jpg";
$datasingle7["kategori"] = "Taman";

array_push($response["wisata"], $datasingle1);
array_push($response["wisata"], $datasingle2);
array_push($response["wisata"], $datasingle3);
array_push($response["wisata"], $datasingle4);
array_push($response["wisata"], $datasingle5);
array_push($response["wisata"], $datasingle6);
array_push($response["wisata"], $datasingle7);

echo json_encode($response);

?>

