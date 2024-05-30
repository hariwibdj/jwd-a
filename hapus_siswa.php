<?php
require "config/koneksi.php";
$id = $_GET['id'];

$query = "DELETE FROM tbl_siswa WHERE id_siswa = '$id'";
$hapus = mysqli_query($connection,$query);

if($hapus){
    header("location:index.php");
}
else
{
    echo "Data gagal dihapus";
}


?>