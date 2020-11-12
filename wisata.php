<?php

$response = array();
$response["wisata"] = array();
$datasingle1 = array();
$datasingle1["id"] = "1";
$datasingle1["nama"] = "Danau Linting";
$datasingle1["gambar_url"] = "http://10.0.2.2/apifemi/foto/1wisata_linting.jpg";
$datasingle1["kategori"] = "Alam";

$datasingle2 = array();
$datasingle2["id"] = "2";
$datasingle2["nama"] = "The Le Hu Garden";
$datasingle2["gambar_url"] = "http://10.0.2.2/apifemi/foto/2wisata_th.jpg";
$datasingle2["kategori"] = "Taman";

$datasingle3 = array();
$datasingle3["id"] = "3";
$datasingle3["nama"] = "Air Terjun Sampuren Putih";
$datasingle3["gambar_url"] = "http://10.0.2.2/apifemi/foto/3wisata_air.jpg";
$datasingle3["kategori"] = "Alam";

$datasingle4 = array();
$datasingle4["id"] = "4";
$datasingle4["nama"] = "Pantai Salju";
$datasingle4["gambar_url"] = "http://10.0.2.2/apifemi/foto/4wisata_salju.jpg";
$datasingle4["kategori"] = "Alam";
	
$datasingle5 = array();
$datasingle5["id"] = "5";
$datasingle5["nama"] = "Air Terjun Pelangi";
$datasingle5["gambar_url"] = "http://10.0.2.2/apifemi/foto/5wisata_pelangi.jpg";
$datasingle5["kategori"] = "Alam";

$datasingle6 = array();
$datasingle6["id"] = "6";
$datasingle6["nama"] = "Taman Pramuka Sibolangit";
$datasingle6["gambar_url"] = "http://10.0.2.2/apifemi/foto/6wisata_pramuka.jpg";
$datasingle6["kategori"] = "Taman";

$datasingle7 = array();
$datasingle7["id"] = "7";
$datasingle7["nama"] = "Kampung Ladang Outbond";
$datasingle7["gambar_url"] = "http://10.0.2.2/apifemi/foto/7wisata_ladang.jpg";
$datasingle7["kategori"] = "Taman";

$datasingle8 = array();
$datasingle8["id"] = "8";
$datasingle8["nama"] = "Pemandian Alam Sembahe";
$datasingle8["gambar_url"] = "http://10.0.2.2/apifemi/foto/8wisata_sembahe.jpg";
$datasingle8["kategori"] = "Alam";

$datasingle9 = array();
$datasingle9["id"] = "9";
$datasingle9["nama"] = "Green Hill City";
$datasingle9["gambar_url"] = "http://10.0.2.2/apifemi/foto/9wisata_green.jpg";
$datasingle9["kategori"] = "Taman";

$datasingle10 = array();
$datasingle10["id"] = "10";
$datasingle10["nama"] = "Pemandian Alam Lau Sigembur";
$datasingle10["gambar_url"] = "http://10.0.2.2/apifemi/foto/10wisata_lau.jpg";
$datasingle10["kategori"] = "Alam";

$datasingle11 = array();
$datasingle11["id"] = "11";
$datasingle11["nama"] = "Gua dan Air Panas Panen";
$datasingle11["gambar_url"] = "http://10.0.2.2/apifemi/foto/11wisata_panen.jpg";
$datasingle11["kategori"] = "Alam";

$datasingle12 = array();
$datasingle12["id"] = "12";
$datasingle12["nama"] = "Taman Rekseasi Dewi Sibolangit";
$datasingle12["gambar_url"] = "http://10.0.2.2/apifemi/foto/12wisata_dewi.jpg";
$datasingle12["kategori"] = "Taman";

array_push($response["wisata"], $datasingle1);
array_push($response["wisata"], $datasingle2);
array_push($response["wisata"], $datasingle3);
array_push($response["wisata"], $datasingle4);
array_push($response["wisata"], $datasingle5);
array_push($response["wisata"], $datasingle6);
array_push($response["wisata"], $datasingle7);

echo json_encode($response);

?>

