<?php
if(isset($_GET['id'])){

    $id = $_GET['id'];
    $response = array();

    if($id == "1"){

        $response["id"] = 1;
        $response["nama"] = "Danau Linting";
        $response["deskripsi"] = "Danau Linting adalah sebuah danau yang terbentuk akibat retakan vulkanik bukit yang mengeluarkan air panas. Danau yang memiliki luas 1 hektar ini terkenal akan pesona magisnya. Pemandangan hijau khas pohon beringin akan menyambut kehadiran para wisatawan yang datang. Kawasan danau yang begitu asri membuat wisatawan betah disini. Danau ini juga memiliki keunikan tersendiri. Konon, tidak ada yang tau berapa kedalaman danau ini.";
    } else if($id == "2"){
        $response["id"] = 2;
        $response["nama"] = "The Le Hu Garden";
        $response["deskripsi"] = "The Le Hu Garden merupakan taman wisata keluarga yang menyajikan keindahan taman bunga. Selain itu, terdapat danau buatan yang menambah pesona kecantikan objek wisata ini.Tempat ini merupakan halaman rumah yang diubah menjadi tempat wisata oleh pemiliknya. Pembangunan danau dan berbagai fasilitas lainnya membuat taman ini menjadi salah satu destinasi wisata incaran wisatawan. Lokasinya yang berada di pedesaan juga membuat suasana taman begitu asri dan nyaman.";
    } else if($id == "3"){
        $response["id"] = 3;
        $response["nama"] = "Air Terjun Sampuren Putih";
        $response["deskripsi"] = "Sampuren sendiri dalam Bahasa Karo berarti air terjun. Air terjun di sana mempunyai ketinggian sekitar 3 meter, jadi memang tidak tinggi sehingga suara air yang diciptakan akan terdengar merdu dan membuat pikiran rileks. Menurut penduduk lokal bahwa Sampuren Putih ini adalah air terjun tujuh tingkat, namun hanya satu saja yang dapat lansung terlihat oleh kita. Yaitu yang tingkat akhir atau tingkat ketujuh. Pemandangan alam yang ditawarkan wisata air terjun ini tidak perlu diragukan lagi keindahannya karena banyak pepohonan tinggi yang tumbuh dengan subur dan lebat melengkapi keindahan view air terjun.";
    } else if($id == "4"){
        $response["id"] = 4;
        $response["nama"] = "Pantai Salju";
        $response["deskripsi"] = "Pantai Salju merupakan kolam renang alami yang menyenangkan. Paronama asyik sekaligus hawa udara sejuk yang menyegarkan otomatis membuat spot di Mabar tersebut asyik untuk basah-basahan.";
    } else if($id == "5"){
        $response["id"] = 5;
        $response["nama"] = "Air Terjun Pelangi";
        $response["deskripsi"] = "Air terjun pelangi adalah sebuah air terjun yang berada di Desa Tanjung Timur, Kecamatan Sinembah Tanjung Muda (STM) Hulu, Kabupaten Deli Serdang. Air Terjun Pelangi ini memiliki air yang jernih dan bersih serta di kelilingi oleh pohon-pohon tinggi yang hijau yang membuat udara di sekelilingnya menjadi segar. ";
    } else if($id == "6"){
        $response["id"] = 6;
        $response["nama"] = "Taman Pramuka Sibolangit";
        $response["deskripsi"] = "aman Pramuka atau yang lebih dikenal dengan sebutan Camping Ground di Sibolangit Sumatera Utara sangat indah. Taman Pramuka ini berada di daerah pegunungan di Kecamatan Sibolangit yang luasnya  kurang lebih 350 ha. Objek ini sangat ideal untuk tempat berekreasi selain camping untuk menghilangkan segala kepenatan jiwa dan pengaruh polusi di kota besar seperti kota Medan pada waktu hari-hari besar dan libur.";
     } else if($id == "7"){
        $response["id"] = 7;
        $response["nama"] = "Kampung Ladang Outbond";
        $response["deskripsi"] = "Kampung Ladang Outbond menyajikan suasana alam pedesaan yang cukup asri, objek wisata ini sangat cocok dijadikan pusat rekreasi keluarga maupun acara kantor. Objek wisata ini juga dilengkapi dengan beragam wahana outbond yang menarik. Selain itu, disini juga terdapat spot foto romantis yang biasa digunakan untuk foto prewedding.";
    } else if($id == "8"){
        $response["id"] = 8;
        $response["nama"] = "Pemandian Alam Sembahe";
        $response["deskripsi"] = "Berkunjung ke pemandian ini tidaklah rugi. Kondisi airnya segar dan bening. Batu besar, tanaman hijau dan air yang bersih menjadi magnet utama untuk pengunjung. Nuansa seperti itu mampu menyegarkan pikiran pengunjung. Suasana asri memang menjadi tujuan utama. Demi melepas penat dari hiruk pikuk perkotaan dan kejenuhan saat bekerja. ";
    } else if($id == "9"){
        $response["id"] = 9;
        $response["nama"] = "Green Hill City";
        $response["deskripsi"] = "Lokasi ini memang dikhususkan untuk wisata keluarga. Bagi tamu yang sudah mempunyai keluarga kecil. Area ini siap memanjakan mereka. Arena permainan seru tersedia di sana dengan taraf internasional. Tidak cukup area bermain saja, spot taman hijau juga tersedia di sana. Anda yang ingin menikmati waktu lama di green hill city. Maka Anda bisa duduk santai di area taman.";
    } else if($id == "10"){
        $response["id"] = 10;
        $response["nama"] = "Pemandian Alam Lau Sigembur";
        $response["deskripsi"] = "Sesuai dengan namanya pemandian ini langsung dikelilingi oleh alam. Hutan yang masih alami serta aliran sungai jernihnya membuat siapa saja ingin segera menceburkan diri ke pemandian. Rasa lelah hilang dalam sekejap, diikuti dengan segarnya air yang merasuk langsung dalam organ tubuh. Hal itu membuat Anda merasakan nikmatnya berendam di pemandian alam lau walaupun hanya beberapa saat saja.";    
    } else if($id == "11"){
        $response["id"] = 11;
        $response["nama"] = "Gua dan Air Panas Panen";
        $response["deskripsi"] = "Destinasi ini terdiri dari empat buah gua asli dari alam dengan bentuk yang unik. Pengunjung dibuat terpana ketika dilihat gua ini bentuknya mirip kerang. Ukuran mulut gua terbilang lebar yakni 10 hingga 25 meter. Dari tampilan luarnya memang memukau tidak ada yang menyamai. Sedangkan tempat wisata air panas juga tidak kalah menarik. Banyak wisatawan datang untuk berendam dan mandi di air panas panen. Mereka ingin memperoleh khasiat belerang bagi peremajaan kulit.";        
    } else if($id == "12"){
        $response["id"] = 12;
        $response["nama"] = "Taman Rekreasi Dewi Sibolangit";
        $response["deskripsi"] = "Objek wisata alam yang dikemas dalam balutan bangunan unik penuh dengan unsur edukasinya. Setiap bangunan mempunyai ciri khas tersendiri. Karena pengelola taman wisata ini terilhami oleh bangunan atau tempat penuh pesona dari dalam dan luar negeri. Upaya pengelola maupun pemiliknya memang menjadikan taman bermain ini menyenangkan di berbagai usia. Sehingga keunikannya tidak dimiliki tempat lain, apalagi konsep utama berupa lingkungan hidup.";        
}
   echo json_encode($response);

}
?>
