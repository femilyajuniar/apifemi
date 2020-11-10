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
$datasingle3["kordinat"] = "3.436445, 98.897429";
$datasingle3["gambar_url"] = "http://10.0.2.2/apifemi/foto/3hotel_sy.jpg";

$datasingle4 = array();
$datasingle4["id"] = "4";
$datasingle4["nama"] =  "Masjid Jami' Ar-Rahman";
$datasingle4["alamat"] = "Jl. Bakaran Batu, Paluh Kemiri, Kec. Lubuk Pakam, Kabupaten Deli Serdang, Sumatera Utara 20517";
$datasingle4["kordinat"] = "3.571287, 98.869709";
$datasingle4["gambar_url"] = "http://10.0.2.2/apifemi/foto/4hotel_ar.jpg";

$datasingle5 = array();
$datasingle5["id"] = "5";
$datasingle5["nama"] =  "Masjid Ar-Ridho";
$datasingle5["alamat"] = "Jl. Mesjid No.Desa, Dalu 10 A, Tj. Morawa, Kabupaten Deli Serdang, Sumatera Utara 20362";
$datasingle5["kordinat"] = "3.549132, 98.796551";
$datasingle5["gambar_url"] = "http://10.0.2.2/apifemi/foto/5masjid_rid.jpeg";

$datasingle6 = array();
$datasingle6["id"] = "6";
$datasingle6["nama"] =  "Masjid Taqwa Muhammadiyah";
$datasingle6["alamat"] = "Jl. P. Diponegoro No.1, Tj. Garbus Satu, Kec. Lubuk Pakam, Kabupaten Deli Serdang, Sumatera Utara 20151";
$datasingle6["kordinat"] = "3.561001, 98.873507";
$datasingle6["gambar_url"] = "http://10.0.2.2/apifemi/foto/6masjid_md.jpg";

$datasingle7 = array();
$datasingle7["id"] = "7";
$datasingle7["nama"] =  "Masjid RSUD Lubuk Pakam";
$datasingle7["alamat"] = "Jl. Mh. Thamrin, Petapahan, Kec. Lubuk Pakam, Kabupaten Deli Serdang, Sumatera Utara 20517";
$datasingle7["kordinat"] = "3.556882, 98.867531";
$datasingle7["gambar_url"] = "http://10.0.2.2/apifemi/foto/7masjid_r.jpg";

$datasingle8 = array();
$datasingle8["id"] = "8";
$datasingle8["nama"] =  "Masjid Al Huda";
$datasingle8["alamat"] = "Tj. Garbus II, Kec. Pagar Merbau, Kabupaten Deli Serdang, Sumatera Utara 20551";
$datasingle8["kordinat"] = "3.513025, 98.901396";
$datasingle8["gambar_url"] = "http://10.0.2.2/apifemi/foto/8masjid_hd.jpg";

array_push($response["hotel"], $datasingle1);
array_push($response["hotel"], $datasingle2);
array_push($response["hotel"], $datasingle3);
array_push($response["hotel"], $datasingle4);
array_push($response["hotel"], $datasingle5);
array_push($response["hotel"], $datasingle6);
array_push($response["hotel"], $datasingle7);
array_push($response["hotel"], $datasingle8);

echo json_encode($response);

?>
