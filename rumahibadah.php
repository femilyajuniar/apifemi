<?php

$response = array();
$response["tempat_ibadah"] = array();
$datasingle1 = array();
$datasingle1["id"] = "1";
$datasingle1["nama"] = "Masjid Al Ikhlas";
$datasingle1["jenis"] = "masjid";
$datasingle1["latitude"] = "3.551951";
$datasingle1["longitude"] = "98.869607";

$datasingle2 = array();
$datasingle2["id"] = "2";
$datasingle2["nama"] = "Masjid Jami' Agung Lubuk Pakam";
$datasingle2["jenis"] = "masjid";
$datasingle2["latitude"] = "3.558494";
$datasingle2["longitude"] = "98.879810";

$datasingle3 = array();
$datasingle3["id"] = "3";
$datasingle3["nama"] =  "Masjid Raya Syuhada";
$datasingle3["jenis"] = "masjid";
$datasingle3["latitude"] = "3.436445";
$datasingle3["longitude"] = "98.897429";

$datasingle4 = array();
$datasingle4["id"] = "4";
$datasingle4["nama"] =  "Masjid Jami' Ar-Rahman";
$datasingle4["jenis"] = "masjid";
$datasingle4["latitude"] = "3.571287";
$datasingle4["longitude"] = "98.869709";

$datasingle5 = array();
$datasingle5["id"] = "5";
$datasingle5["nama"] =  "Masjid Ar-Ridho";
$datasingle5["jenis"] = "masjid";
$datasingle5["latitude"] = "3.549132";
$datasingle5["longitude"] = "98.796551";

$datasingle6 = array();
$datasingle6["id"] = "6";
$datasingle6["nama"] =  "Masjid Taqwa Muhammadiyah";
$datasingle6["jenis"] = "masjid";
$datasingle6["latitude"] = "3.561001";
$datasingle6["longitude"] = "98.873507";

$datasingle7 = array();
$datasingle7["id"] = "7";
$datasingle7["nama"] =  "Masjid RSUD Lubuk Pakam";
$datasingle7["jenis"] = "masjid";
$datasingle7["latitude"] = "3.556882";
$datasingle7["longitude"] = "98.867531";

$datasingle8 = array();
$datasingle8["id"] = "8";
$datasingle8["nama"] =  "Masjid Al Huda";
$datasingle8["jenis"] = "masjid";
$datasingle8["latitude"] = "3.513025";
$datasingle8["longitude"] = "98.901396";

array_push($response["tempat_ibadah"], $datasingle1);
array_push($response["tempat_ibadah"], $datasingle2);
array_push($response["tempat_ibadah"], $datasingle3);
array_push($response["tempat_ibadah"], $datasingle4);
array_push($response["tempat_ibadah"], $datasingle5);
array_push($response["tempat_ibadah"], $datasingle6);
array_push($response["tempat_ibadah"], $datasingle7);
array_push($response["tempat_ibadah"], $datasingle8);

echo json_encode($response);

?>
