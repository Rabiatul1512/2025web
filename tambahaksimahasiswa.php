<?php
include "koneksi.php";

$nim = $_POST["nim"];
$password = $_POST["password"];
$nama = $_POST["nama"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$telepon = $_POST["telepon"];
$email = $_POST["email"];
$id = $_POST["id"];

$namafile = $_FILES['foto']['name'];
$tmpname = $_FILES['foto']['tmp_name'];

$ekstensifoto = explode('.', $namafile);
$ekstensifoto = strtolower(end($ekstensifoto));

$namafilebaru = $nim;
$namafilebaru .= '.';
$namafilebaru .= $ekstensifoto;

move_uploaded_file($tmpname, 'assets/img/' . $namafilebaru);

$hashPass = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO mahasiswa (nim, nama, tanggal_lahir, telepon, email, id, password, foto) VALUES ('$nim', '$nama', '$tanggal_lahir', '$telepon', '$email', '$id', '$hashPass', '$namafilebaru')";

mysqli_query($conn, $query);

header("location:index.php");

?>