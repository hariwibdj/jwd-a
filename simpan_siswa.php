<?php
    require "config/koneksi.php";
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    
    $query = "INSERT INTO tbl_siswa(nisn,nama_lengkap,alamat) VALUES ('$nisn','$nama','$alamat')";
    

    $simpan = mysqli_query($connection,$query);

    if($simpan){
        header("location:index.php");
    }
    else{
        echo "data gagal disimpan";
    }


?>