<?php
session_start();
include "koneksi.php";
ceklogin();

$query = "SELECT * FROM mahasiswa";
$data = ambildata($query);

include "template/header.php";
include "template/sidebar.php";
?>

<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data Prodi</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Data prodi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Data prodi</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="tambahaksimahasiswa.php" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="no" class="form-label">NIM</label>
                                    <input type="text" name="no" id="no" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama" class="form-label">NAMA</label>
                                    <input type="text" name="nama" id="nama" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="kaprodi" class="form-label">TANGGAL LAHIR</label>
                                    <input type="text" name="kaprodi" id="kaprodi" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="telepon" class="form-label">TELEPON</label>
                                    <input type="text" name="telepon" id="telepon" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">EMAIL</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="id_prodi" class="form-label">PRODI</label>
                                    <select class="form-select" name="id_prodi" id="Id_prodi">
                                        <?php foreach ($data as $d) : ?>
                                            <option value="<?php echo $d['id'] ?>"><?php echo $d['nama'] ?> </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <a href="index.php" class="btn btn-danger">Delete</a>
                                    <button type="submit" class="btn btn-warning">Edit</button>
                                </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
            </div>
            <!-- /.row (main row) -->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->

<form action="tambahaksimahasiswa.php" method="post">
    <table>
        <tr>
            <td>Nim</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td><input type="text" name="telepon"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td>
                <select name="id">
                    <?php foreach ($data as $d) : ?>
                        <option value="<?php echo $d['id'] ?>"><?php echo $d['nama'] ?> </option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
    </table>
    <button type="submit">Simpan</button>
    <button> <a href="index.php">Kembali</a> </button>
</form>
<br>
<?php
include "template/footer.php";
?>