<?php 
require '../koneksi.php';
$id_pengaduan = $_POST['id_pengaduan'];
$tgl = $_POST['tgl_tanggapan'];
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_POST['id_petugas'];
$status = 'selesai';

$sql = mysqli_query($conn, " INSERT INTO tanggapan (id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) values ('$id_pengaduan', '$tgl','$tanggapan','$id_petugas')");
$update_st = mysqli_query($conn, "UPDATE pengaduan SET status='$status' WHERE id_pengaduan = '$id_pengaduan' ");

if ($sql)
{
    ?>
    <script type="text/javascript">
        alert ('Data Sudah Ditanggapi');
        window.location="admin.php?url=verifikasi_pengaduan";
    </script>
<?php
}
?>