<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "modul6";

// konek ke database
$koneksi=mysqli_connect($host, $user, $pass) or die ("koneksi ke database gagal");
mysqli_select_db($koneksi, $name);


