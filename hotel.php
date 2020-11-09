<?php

$response = array();
$response["hotel"] = array();
$datasingle1 = array();
$datasingle1["id"] = "1";
$datasingle1["nama"] = "Wing Hotel Kualanamu Airport";
$datasingle1["alamat"] = "Jalan Arteri Kualanamu No. 9, Medan, Deli Serdang, Sumatera Utara";
$datasingle1["nomor_telpon"] = "123456789012";
$datasingle1["kordinat"] = "3.599001, 98.830997";
$datasingle1["gambar_url"] = "http://localhost/apifemi/foto/1hotel_wing.jpeg";

$datasingle2 = array();
$datasingle2["id"] = "2";
$datasingle2["nama"] = "The Crew Hotel Kualanamu International Airport";
$datasingle2["alamat"] = "Tumpatan Nibung, Kec. Batang Kuis, Kabupaten Deli Serdang, Sumatera Utara 20552";
$datasingle2["nomor_telpon"] = "123456789012";
$datasingle2["kordinat"] = "3.597988, 98.830433";
$datasingle2["gambar_url"] = "http://localhost/apifemi/foto/2hotel_crew.jpeg";

$datasingle3 = array();
$datasingle3["id"] = "3";
$datasingle3["nama"] =  "Prime Plaza Hotel Kualanamu";
$datasingle3["alamat"] = "Jalan Arteri Kualanamu, Tumpatan Nibung, Batang Kuis, Deli Serdang, Sumatera Utara, Indonesia, 20552";
$datasingle3["nomor_telpon"] = "123456789012";
$datasingle3["kordinat"] = "3.599664, 98.833095";
$datasingle3["gambar_url"] = "http://localhost/apifemi/foto/3hotel_prime.jpeg";

$datasingle4 = array();
$datasingle4["id"] = "4";
$datasingle4["nama"] =  "Horison Sky Kualanamu";
$datasingle4["alamat"] = "Bandara International Kualanamu lantai Mezzanine, Medan, Deli Serdang, Sumatera Utara, Indonesia, 20553";
$datasingle4["nomor_telpon"] = "123456789012";
$datasingle4["kordinat"] = "3.635809, 98.879015";
$datasingle4["gambar_url"] = "http://localhost/apifemi/foto/4hotel_sky.jpeg";

$datasingle5 = array();
$datasingle5["id"] = "5";
$datasingle5["nama"] =  "Lively Hotel Kualanamu Airport Medan";
$datasingle5["alamat"] = "Jalan Arteri Kualanamu NO 9 A39 Tumpatan Nibung, Batang Kuis, Medan, Deli Serdang, Sumatera Utara, Indonesia, 20372";
$datasingle5["nomor_telpon"] = "123456789012";
$datasingle5["kordinat"] = "3.598267, 98.831614";
$datasingle5["gambar_url"] = "http://localhost/apifemi/foto/5hotel_lively.jpeg";

$datasingle6 = array();
$datasingle6["id"] = "6";
$datasingle6["nama"] =  "Travel Hub Hotel Kualanamu Airport";
$datasingle6["alamat"] = "Kompleks Hub Commercial Biz Park , Jalan Arteri Kualanamu No. 9, Tumpatan Nibung, Medan, Deli Serdang, Sumatera Utara, Indonesia, 20372";
$datasingle6["nomor_telpon"] = "123456789012";
$datasingle6["kordinat"] = "3.597620, 98.831597";
$datasingle6["gambar_url"] = "http://localhost/apifemi/foto/6hotel_travel.jpeg";


array_push($response["hotel"], $datasingle1);
array_push($response["hotel"], $datasingle2);
array_push($response["hotel"], $datasingle3);

echo json_encode($response);

?>
