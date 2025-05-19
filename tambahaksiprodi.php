<?php
include "koneksi.php";

$no = $_POST["no"];
$nama = $_POST["nama"];
$kaprodi = $_POST["kaprodi"];
$jurusan = $_POST["jurusan"];
$aksi = $_POST["aksi"];


$query = "INSERT INTO prodi ( no, nama, kaprodi, jurusan, aksi) VALUES ('$no',
 '$nama', '$kaprodi', '$jurusan', '$aksi')";

mysqli_query($conn, $query);

header("location:index.php");

?>
