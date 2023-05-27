<?php 
 session_start();
include 'koneksi.php';
$kon;

if (isset($_POST['input'])) {
    $idpengguna = $_POST['idpengguna'];
    $password = $_POST['passwordpengguna'];
    $namapengguna = $_POST['namapengguna'];
    $alamatpengguna = $_POST['alamatpengguna'];
    $nohppengguna = $_POST['nohppengguna'];

    $query  =$kon-> prepare("INSERT INTO tbl_users VALUES ('$idpengguna', '$namapengguna', '$password','$alamatpengguna','$nohppengguna')");
    

    if ($query) {
        $result = $query->execute();
        header("location:index.php");
        return $result;
        
    }else {
        die("Oops! Terjadi kesalahan");
    }  
}
?>