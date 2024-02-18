<?php

include 'koneksi.php';
// $conn = mysqli_connect($server, $user, $password, $database);
$username=$_POST['username'];
$password=$_POST['password'];
$sql = mysqli_query($conn, "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'"); 
$check = mysqli_num_rows($sql);

    if ($check>0) //if found 
    { 
        $data=mysqli_fetch_array($sql);
        // return $data;
        if ($data['level']=="admin")
        {
            // return true;
            session_start();
            $_SESSION['id_petugas']=$data['id_petugas'];
            $_SESSION['username']=$username;
            $_SESSION['nama_petugas']=$data['nama_petugas'];
            $_SESSION['level']=$data['level'];   

            header('location:admin/admin.php');
             
        }
        else if ($data['level']=="petugas")
        {
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['nama_petugas']=$data['nama_petugas'];
            $_SESSION['level']=$data['level'];

            header('location:petugas/petugas.php');
        }
    }
    else
    {
        ?>
        <script type="text/javascript">
        alert ('Username Atau Password tidak ditemukan');
        window.location="index2.php";
        </script>
<?php

    }

?>