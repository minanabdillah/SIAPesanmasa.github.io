<?php
include('../../conf/config.php');
$prg = $_GET['program'];
$kd = $_GET['kode'];
$gr = $_GET['guru'];
$query = mysqli_query($koneksi, "INSERT INTO tb_tahsin (id, program, kode, guru) values ('', '$prg', '$kd', '$gr') ");
header('Location: ../index.php?page=tambah-data-tahsin');
?>