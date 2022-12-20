<?php 
include('library.php');
$lib = new Library();
if(isset($_POST['tombol_tambah'])){
    $id_nis = $_POST['id_nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $add_status = $lib->add_data($id_nis, $nama, $kelas, $tempat_lahir, $tanggal_lahir, $alamat);
    if($add_status){
    header('Location: index.php');
    }
}
?>
<html>
    <head>
        <title>Tambah Data</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data Siswa</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <div class="form-group row">
                    <label for="id_nis" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-10">
                    <input type="text" name="id_nis" class="form-control" id="id_nis">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="nama_siswa" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                    <input type="text" name="kelas" class="form-control" id="kelas">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat lahir</label>
                    <div class="col-sm-10">
                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="alamat"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>
