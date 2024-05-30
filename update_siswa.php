<?php
require "config/koneksi.php";

$id_siswa = $_POST['id_siswa'];

// echo $id_siswa;
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$query = "UPDATE tbl_siswa SET nisn = '$nisn', nama_lengkap = '$nama', alamat = '$alamat' WHERE id_siswa = '$id_siswa'";
$update = mysqli_query($connection,$query);

if($update){
    header("location:index.php");
}
else{
    echo "data gagal disimpan";
}


?>