<?php

include 'koneksi.php';
// $conn = mysqli_connect($server, $user, $password, $database);
$username=$_POST['username'];
$password=$_POST['password'];

$result = mysqli_query($conn, $sql);

$check = mysqli_num_rows($result);

    if ($check>0)
    {
        $data=mysqli_fetch_assoc($result);
        // return $data;
        session_start();
        $_SESSION['nama']=$data['nama'];
        $_SESSION['nik']=$data['nik'];
        $_SESSION['telp']=$data['telp'];
        header('location:masyarakat.php');
    }
    else
    {
        ?>
        <script type="text/javascript">
        alert ('Username Atau Password tidak ditemukan');
        window.location="index.php";
        </script>
<?php

    }

?>