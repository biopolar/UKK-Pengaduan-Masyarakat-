<?php

// User login
if (isset($_GET['url'])) 

{   
    $url=$_GET['url'];

    switch($url)
    {
        case 'tulis_pengaduan';
        include 'tulis_pengaduan.php';
        break;

        case 'lihat_pengaduan';
        include 'lihat_pengaduan.php';
        break;

        case 'detail_pengaduan';
        include 'detail_pengaduan.php';
        break;

        case 'lihat_tanggapan';
        include 'lihat_tanggapan.php';
        break;
    }

}else{
    
    ?>
    Selamat Datang di Aplikasi Penganduan Masyarakat yang dibuat untuk melaporkan
    pelanggaran atau penyimpangan kejadian-kejadian yang ada pada masyarakat <br></br>
    Anda Login Sebagai : <h2><b> <?php echo $_SESSION['nama'];
    
}
?> 