<?php
if(isset($_GET['id'])){

    $id = $_GET['id'];
    $response = array();

    if($id == "1"){

        $response["id"] = 1;
        $response["nama"] = "Surabi Kedai Kota";
        $response["alamat"] = "Jalan Besar Tembung, Batang Kuis, Hutan, Kec. Percut Sei Tuan, Kota Medan, Sumatera Utara 20237";
        $response["jam_buka_tutup"] = "Setiap Hari pukul 11.00 - 23.00 WIB";
        $response["kordinat"] = "3.597735, 98.750344";
        $response["gambar_url"] = "http://localhost/apifemi/foto/1kuliner_kopisadis.jpeg";
        $response["kategori"] = "Kuliner Inovasi";
        $response["nomor_telp"] = "0264700142";
        $response["deskripsi"] = "Menyuguhkan Surabi sebagai menu utama, terdiri dari surabi manis, surabi asin, serta pisang bakar. Untuk surabi manisnya memiliki banyak varian rasa, diantaranya adalah rasa keju susu, cokelat, susu, sampai dengan spesial. Untuk pilihan rasa surabi asin, diantaranya adalah telur keju, ayam, oncom special, telur, ayam keju, sosis, dan lain sebagainya.";
    } else if($id == "2"){
        $response["id"] = 2;
        $response["nama"] = "Anton Kedai Kota";
        $response["alamat"] = "Jalan Besar Tembung, Batang Kuis, Hutan, Kec. Percut Sei Tuan, Kota Medan, Sumatera Utara 20237";
        $response["jam_buka_tutup"] = "Setiap Hari pukul 11.00 - 23.00 WIB";
        $response["kordinat"] = "3.597735, 98.750344";
        $response["gambar_url"] = "http://localhost/apifemi/foto/1kuliner_kopisadis.jpeg";
        $response["kategori"] = "Kuliner Inovasi";
        $response["nomor_telp"] = "0264700142";
        $response["deskripsi"] = "Menyuguhkan Surabi sebagai menu utama, terdiri dari surabi manis, surabi asin, serta pisang bakar. Untuk surabi manisnya memiliki banyak varian rasa, diantaranya adalah rasa keju susu, cokelat, susu, sampai dengan spesial. Untuk pilihan rasa surabi asin, diantaranya adalah telur keju, ayam, oncom special, telur, ayam keju, sosis, dan lain sebagainya.";
    } else if($id == "3"){
        $response["id"] = 3;
        $response["nama"] = "Riski Kedai Kota";
        $response["alamat"] = "Jalan Besar Tembung, Batang Kuis, Hutan, Kec. Percut Sei Tuan, Kota Medan, Sumatera Utara 20237";
        $response["jam_buka_tutup"] = "Setiap Hari pukul 11.00 - 23.00 WIB";
        $response["kordinat"] = "3.597735, 98.750344";
        $response["gambar_url"] = "http://localhost/apifemi/foto/1kuliner_kopisadis.jpeg";
        $response["kategori"] = "Kuliner Inovasi";
        $response["nomor_telp"] = "0264700142";
        $response["deskripsi"] = "Menyuguhkan Surabi sebagai menu utama, terdiri dari surabi manis, surabi asin, serta pisang bakar. Untuk surabi manisnya memiliki banyak varian rasa, diantaranya adalah rasa keju susu, cokelat, susu, sampai dengan spesial. Untuk pilihan rasa surabi asin, diantaranya adalah telur keju, ayam, oncom special, telur, ayam keju, sosis, dan lain sebagainya.";
    }

    echo json_encode($response);

}
?>
