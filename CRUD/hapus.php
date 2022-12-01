<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Learning USU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        if(isset($_GET['nim'])){
            include('koneksi.php');
            $nim    = $_GET['nim'];`
            $cek    = mysqli_query($koneksi, "select nim from mahasiswa
            where nim = '$nim'") or die(mysqli_error());

            if(mysqli_num_rows($cek) == 0)
            {
                echo "<script>window.history.back()</script>";
            }
            else
            {
                $del = mysqli_query($koneksi, "delete from mahasiswa where nim = '$nim' ");
                if ($del)
                {
                    echo "<h3>Data Mahasiswa Berhasil dihapus</h3>";
                    echo "<script>window.location = 'index.php';</script>";
                }
                else
                {
                    echo "<h2>Gagal menghapus data</h2>";
                    echo "<a href='index.php'>Kembali </a>";
                }
            }
        }
        else
        {
            echo "<script>window.history.back()</script>";
        }
    ?>
</body>
</html>