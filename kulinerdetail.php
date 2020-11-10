<?php
if(isset($_GET['id'])){

    $id = $_GET['id'];
    $response = array();

    if($id == "1"){

        $response["id"] = 1;
        $response["nama"] = "Kopi Sadis";
        $response["alamat"] = "Jalan Besar Tembung, Batang Kuis, Hutan, Kec. Percut Sei Tuan, Kota Medan, Sumatera Utara 20237";
        $response["jam_buka_tutup"] = "Setiap Hari pukul 11.00 - 23.00 WIB";
        $response["kordinat"] = "3.597735, 98.750344";
        $response["gambar_url"] = "http://localhost/apifemi/foto/1kuliner_kopisadis.jpeg";
        $response["kategori"] = "Kuliner Inovasi";
        $response["nomor_telp"] = "0264700142";
        $response["deskripsi"] = "Salah satu tempat minum kopi di Kabupaten Deli Serdang. Warung kopi / cafe ini merupakan salah satu tempat yang recommended untuk minum kopi karna menawarkan berbagai jenis minuman olahan kopi seperti cappuccino, Americano, kopi susu dan kopi hitam. Semua menu kopi yang ada di sajikan dengan kualitas dan rasa terbaik. Selain itu, Kopi Sadis juga menyediakan tempat nyaman sehingga cocok untuk menjadi tempat nongkrong, berkumpul, ngobrol, bersantai, dan diskusi.";
    } else if($id == "2"){
        $response["id"] = 2;
        $response["nama"] = "Excelso - Bandara Internasional Kualanamu";
        $response["alamat"] = "Jl. Bandara Kuala Namu, Ps. Enam Kuala Namu, Kec. Beringin, Kabupaten Deli Serdang, Sumatera Utara 20553";
        $response["jam_buka_tutup"] = "Setiap Hari pukul 11.00 - 23.00 WIB";
        $response["kordinat"] = "3.597735, 98.750344";
        $response["gambar_url"] = "http://localhost/apifemi/foto/2kuliner_excelso.jpeg";
        $response["kategori"] = "Kuliner Inovasi";
        $response["nomor_telp"] = "0264700142";
        $response["deskripsi"] = "Menjual western food, coffee. Merupakan tempat santai dengan design interior modern";
    } else if($id == "3"){
        $response["id"] = 3;
        $response["nama"] = "Budaya Resto";
        $response["alamat"] = "Jl. Raya Medan Jl. Lokasi No.KM. 12, RW.5, Ujung Serdang, Tj. Morawa, Kabupaten Deli Serdang, Sumatera Utara 20362";
        $response["jam_buka_tutup"] = "Setiap Hari Pukul 10.00 WIB - 22.00 WIB";
        $response["kordinat"] = "3.597735, 98.750344";
        $response["gambar_url"] = "http://localhost/apifemi/foto/3kuliner_budaya.jpeg";
        $response["kategori"] = "Kuliner Inovasi";
        $response["nomor_telp"] = "0264700142";
        $response["deskripsi"] = "Jalur lintas antara Medan - Kualanamu pun mulai diramaikan oleh beberapa resto yang cocok buat kamu singgah saat lapar di tengah jalan, salah satunya adalah resto yang kaya akan budaya yaitu Budaya Resto Tanjung Morawa, resto yang tidak terlalu jauh yang bisa jadi tempat 'kabur' kamu bersama teman ataupun keluarga.";
    } else if($id == "3"){
        $response["id"] = 3;
        $response["nama"] = "Budaya Resto";
        $response["alamat"] = "Jl. Raya Medan Jl. Lokasi No.KM. 12, RW.5, Ujung Serdang, Tj. Morawa, Kabupaten Deli Serdang, Sumatera Utara 20362";
        $response["jam_buka_tutup"] = "Setiap Hari Pukul 10.00 WIB - 22.00 WIB";
        $response["kordinat"] = "3.597735, 98.750344";
        $response["gambar_url"] = "http://localhost/apifemi/foto/3kuliner_budaya.jpeg";
        $response["kategori"] = "Kuliner Inovasi";
        $response["nomor_telp"] = "0264700142";
        $response["deskripsi"] = "Jalur lintas antara Medan - Kualanamu pun mulai diramaikan oleh beberapa resto yang cocok buat kamu singgah saat lapar di tengah jalan, salah satunya adalah resto yang kaya akan budaya yaitu Budaya Resto Tanjung Morawa, resto yang tidak terlalu jauh yang bisa jadi tempat 'kabur' kamu bersama teman ataupun keluarga.";
    }
    else if($id == "4"){
        $response["id"] = 4;
        $response["nama"] = "Hotplate Kita Kita";
        $response["alamat"] = "Jl. Mh. Thamrin, Petapahan, Kec. Lubuk Pakam, Kabupaten Deli Serdang, Sumatera Utara 20517";
        $response["jam_buka_tutup"] = "Setiap Hari pukul 10.00 - 00.00 WIB";
        $response["kordinat"] = "3.557559, 98.868186";
        $response["gambar_url"] = "http://localhost/apifemi/foto/4kuliner_plate.jpeg";
        $response["kategori"] = "Kuliner Inovasi";
        $response["nomor_telp"] = "0264700142";
        $response["deskripsi"] = "Hotplate Kita Kita merupakan cafe yang terletak di Lubuk Pakam, menyediakan berbagai macam menu yang dapat dinikmati saat bersantai";
    }else if($id == "5"){
        $response["id"] = 5;
        $response["nama"] = "Dapur Nek Aji";
        $response["alamat"] = "Jl. Bersama, Tj. Garbus Satu, Kec. Lubuk Pakam, Kabupaten Deli Serdang, Sumatera Utara 20518";
        $response["jam_buka_tutup"] = "Setiap Hari pukul 10.00 - 22.00 WIB";
        $response["kordinat"] = "3.560730, 98.879815";
        $response["gambar_url"] = "http://localhost/apifemi/foto/5kuliner_nek.jpeg";
        $response["kategori"] = "Kuliner Inovasi";
        $response["nomor_telp"] = "0264700142";
        $response["deskripsi"] = "Menyajikan masakan rumahan yang berkualitas, rasakan rumah yang selalu membuat kita rindu";
    }else if($id == "6"){
        $response["id"] = 6;
        $response["nama"] = "Kawan Burger";
        $response["alamat"] = "Jalan Raya Lintas Tengah Galang Tanjung Garbus, Tj. Garbus II, Kec. Pagar Merbau, Kabupaten Deli Serdang, Sumatera Utara 20551";
        $response["jam_buka_tutup"] = "3.512627, 98.902140";
        $response["kordinat"] = "3.560730, 98.879815";
        $response["gambar_url"] = "http://localhost/apifemi/foto/6kuliner_kawan.jpeg";
        $response["kategori"] = "Kuliner Inovasi";
        $response["nomor_telp"] = "0264700142";
        $response["deskripsi"] = "Kawan Burger merupakan salah satu kuliner yang terletak di desa Pagar Merbau 2, menyediakan berbagai menu burger yang membuatnya selalu nagih";
    }

   echo json_encode($response);

}
?>
