<?php
include "koneksi.php";

$query = "SELECT * FROM mahasiswa";
$data = ambildata($query);

?>

<?php
$servername = "localhost";
$database = "2025web";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$query = "SELECT * FROM mahasiswa";
$hasil = mysqli_query($conn, $query);

$data = [];
while ($baris = mysqli_fetch_assoc($hasil)) {
    $data[] = $baris;
}

var_dump($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>
<body>
    <h1>DATA MAHASISWA<h1>
    <br>
    <table border="1">
        <thead>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>telepon</th>
            <th>tanggal_lahir</th>
        <thead>
        </tbody>
        <?php
        $i = 1;
        foreach ($data as $d) : ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $d["nim"] ?></td>
                <td><?php echo $d["nama"]?></td>
                <td><?php echo $d["telepon"]?></td>
                <td><?php echo $d["tanggal_lahir"]?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    <table>   
</body>
</html>