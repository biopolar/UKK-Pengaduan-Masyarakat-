<?php
require '../koneksi.php';
$id = $_GET['id'];

$sql = mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas='$id' ");

if ($sql)
{
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Dihapus');
        window.location='admin.php?url=lihat_petugas';
    </script>
<?php
}
?>