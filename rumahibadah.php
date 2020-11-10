<?php

$response = array();
$response["hotel"] = array();
$datasingle1 = array();
$datasingle1["id"] = "1";
$datasingle1["nama"] = "Masjid Al Ikhlas";
$datasingle1["alamat"] = "Kawasan Pemerintahan Kabupaten Deli Serdang, Jl. Negara, Tj. Garbus Satu, Kec. Lubuk Pakam, Kabupaten Deli Serdang, Sumatera Utara 20551";
$datasingle1["kordinat"] = "3.551951, 98.869607";
$datasingle1["gambar_url"] = "http://10.0.2.2/apifemi/foto/1masjid_agung.jpeg";

$datasingle2 = array();
$datasingle2["id"] = "2";
$datasingle2["nama"] = "Masjid Jami' Agung Lubuk Pakam";
$datasingle2["alamat"] = "Jl. Imam Bonjol No.17, Tj. Garbus Satu, Kec. Lubuk Pakam, Kabupaten Deli Serdang, Sumatera Utara 20518";
$datasingle2["kordinat"] = "3.558494, 98.879810";
$datasingle2["gambar_url"] = "http://10.0.2.2/apifemi/foto/2masjid_jami.jpg";

$datasingle3 = array();
$datasingle3["id"] = "3";
$datasingle3["nama"] =  "Masjid Raya Syuhada";
$datasingle3["alamat"] = "Jl. S.M. Arifin, Kel. Galang Kota";
$datasingle3["kordinat"] = "3.436477, 98.897558";
$datasingle3["gambar_url"] = "http://10.0.2.2/apifemi/foto/3hotel_sy.jpg";

$datasingle4 = array();
$datasingle4["id"] = "4";
$datasingle4["nama"] =  "Horison Sky Kualanamu";
$datasingle4["alamat"] = "Bandara International Kualanamu lantai Mezzanine, Medan, Deli Serdang, Sumatera Utara, Indonesia, 20553";
$datasingle4["kordinat"] = "3.635809, 98.879015";
$datasingle4["gambar_url"] = "http://10.0.2.2/apifemi/foto/4hotel_sky.jpg";

$datasingle5 = array();
$datasingle5["id"] = "5";
$datasingle5["nama"] =  "Lively Hotel Kualanamu Airport Medan";
$datasingle5["alamat"] = "Jalan Arteri Kualanamu NO 9 A39 Tumpatan Nibung, Batang Kuis, Medan, Deli Serdang, Sumatera Utara, Indonesia, 20372";
$datasingle5["kordinat"] = "3.598267, 98.831614";
$datasingle5["gambar_url"] = "http://10.0.2.2/apifemi/foto/5hotel_lively.jpg";

$datasingle6 = array();
$datasingle6["id"] = "6";
$datasingle6["nama"] =  "Travel Hub Hotel Kualanamu Airport";
$datasingle6["alamat"] = "Kompleks Hub Commercial Biz Park , Jalan Arteri Kualanamu No. 9, Tumpatan Nibung, Medan, Deli Serdang, Sumatera Utara, Indonesia, 20372";
$datasingle6["kordinat"] = "3.597620, 98.831597";
$datasingle6["gambar_url"] = "http://10.0.2.2/apifemi/foto/6hotel_travel.jpg";

$datasingle7 = array();
$datasingle7["id"] = "7";
$datasingle7["nama"] =  "Thong's Inn Hotel Kualanamu";
$datasingle7["alamat"] = "Jalan Pasar V Kebun Kelapa, Medan, Deli Serdang, Sumatera Utara, Indonesia, 20552";
$datasingle7["kordinat"] = "3.593010, 98.861152";
$datasingle7["gambar_url"] = "http://10.0.2.2/apifemi/foto/7hotel_inn.jpg";

$datasingle8 = array();
$datasingle8["id"] = "8";
$datasingle8["nama"] =  "Hotel Aero";
$datasingle8["alamat"] = "Jalan. Paya Pasir No. 8 B-N, Tanjung Morawa Deli Serdang. Sumatra Utara, Medan, Deli Serdang, Sumatera Utara, Indonesia, 20362";
$datasingle8["kordinat"] = "3.521169, 98.784966";
$datasingle8["gambar_url"] = "http://10.0.2.2/apifemi/foto/8hotel_aero.jpg";

$datasingle9 = array();
$datasingle9["id"] = "9";
$datasingle9["nama"] =  "My Studio Hotel Kualanamu Airport Medan";
$datasingle9["alamat"] = "Jl. Sultan Serdang, Tumpatan Nibung, Kec. Batang Kuis, Kabupaten Deli Serdang, Sumatera Utara 20372";
$datasingle9["kordinat"] = "3.598012, 98.831834";
$datasingle9["gambar_url"] = "http://10.0.2.2/apifemi/foto/9hotel_studio.jpg";

$datasingle10 = array();
$datasingle10["id"] = "10";
$datasingle10["nama"] =  "Pancur Gading Hotel & Resort";
$datasingle10["alamat"] = "Jalan Kuala Simeme No. 1 Pamah, Delitua, Medan, Deli Serdang, Sumatera Utara, Indonesia, 20356";
$datasingle10["kordinat"] = "3.473196, 98.680152";
$datasingle10["gambar_url"] = "http://10.0.2.2/apifemi/foto/10hotel_gading.jpg";

array_push($response["hotel"], $datasingle1);
array_push($response["hotel"], $datasingle2);
array_push($response["hotel"], $datasingle3);
array_push($response["hotel"], $datasingle4);
array_push($response["hotel"], $datasingle5);
array_push($response["hotel"], $datasingle6);
array_push($response["hotel"], $datasingle7);
array_push($response["hotel"], $datasingle8);
array_push($response["hotel"], $datasingle9);
array_push($response["hotel"], $datasingle10);

echo json_encode($response);

?>
