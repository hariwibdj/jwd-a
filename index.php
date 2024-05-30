<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<body>

    <div class="container-fluid" style="margin-top: 80px">
        <div class="row ">
            <div class="card">
                <div class="card-header">
                    DATA SISWA
                </div>
                <div class="card-body">
                    <a href="form_siswa.php" class="btn btn-md btn-success" style=" margin-bottom: 30px">TAMBAH DATA</a>
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">NO.</th>
                                <th scope="col">NISN</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require "config/koneksi.php";
                            $no = 1;
                            $query = mysqli_query($connection,"SELECT * FROM tbl_siswa");
                            while($row=mysqli_fetch_array($query)){
                                ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$row[1];?></td>
                                <td><?=$row[2];?></td>
                                <td><?=$row[3];?></td>
                                <td><a class="btn btn-info" href="edit_siswa.php?id=<?=$row[0]; ?>"> edit </a></td>
                                <td><a class="btn btn-danger" href="hapus_siswa.php?id=<?=$row[0]; ?>"> hapus</a></td>
                            </tr>
                            <?php
                            $no++;
                                }
                            ?>
                        </tbody>


                    </table>

                </div>

            </div>
        </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>

</body>

</html>