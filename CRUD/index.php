<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Learning USU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <!--schedule start-->
    <div class="jumbotron">
        <div class="container">
            <div class="judul">
                <div class="col-lg-12 text-center mt-5 mb-5">
                    <h3 class="display-4">Daftar Mahasiswa</h3>
                </div>
            </div>
            <div id="tab">
                <table class="table table-stripped" style="text-align:center">
                    <thead>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </thead>

                        <!-- menampilkan data mahasiswa -->
                    <?php
                        include_once 'koneksi.php';
                        $no=1;
                        $data=mysqli_query($koneksi, "select * from mahasiswa");
                        while ($d=mysqli_fetch_array($data)){
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nim']; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['gender']; ?></td>
                            <td><?php echo $d['alamat']; ?></td>
                            <td>
                                <a style="text-decoration: none ;" href="edit.php ?nim=<?php echo $d['nim'];?>">edit</a>
                                <a style="text-decoration: none ;" href="hapus.php ?nim=<?php echo $d['nim'];?>">hapus</a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                        <!-- menampilkan data mahasiswa -->
                </table>
            </div>
        </div>
    </div>
    <!--schedule start-->

</body>
</html>