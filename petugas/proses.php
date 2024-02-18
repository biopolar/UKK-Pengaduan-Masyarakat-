<?php 
require '../koneksi.php';
$sql = mysqli_query($conn, "UPDATE pengaduan set status='proses' WHERE id_pengaduan='$_GET[id]' ");
if ($sql)
{
    header('location:petugas.php?url=verifikasi_pengaduan');
}
?>