<?php

require 'koneksi.php';

$tanggal=date('Y/m/d');
$nik=$_POST['nik'];
$isi=$_POST['isi_laporan'];
$ft=$_FILES['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$st=0;


$sql = mysqli_query($conn,"INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status) values ('$tanggal','$nik','$isi','$ft','$st')"); 
move_uploaded_file($file, "foto/".$ft);

if ($sql)
{
    ?>
    <script type="text/javascript">
        alert ('Laporan Berhasil di simpan, Terima kasih sudah mengadukan laporan!');
        window.location="masyarakat.php";
    </script>
<?php
}
?>