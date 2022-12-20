<?php 
include('library.php');
$lib = new Library();
if(isset($_GET['id_siswa'])){
    $id_siswa = $_GET['id_siswa']; 
    $data_siswa = $lib->get_by_id($id_siswa);
}
else
{
    header('Location: index.php');
}
 
if(isset($_POST['tombol_update'])){
    $id_siswa = $_POST['id_siswa'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat']; 
    $status_update = $lib->update($id_siswa, $nis, $nama, $kelas, $tempat_lahir, $tanggal_lahir, $alamat);
    if($status_update)
    {
        header('Location:index.php');
    }
}
?>
<html>
    <head>
        <title>Edit Data</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Update Data Siswa</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
            <input type="hidden" name="id_siswa" value="<?php echo $data_siswa['id_siswa']; ?>"/>
                <div class="form-group row">
                    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-10">
                    <input type="text" name="nis" class="form-control" id="nis" value="<?php echo $data_siswa['nis']; ?>">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_siswa['nama']; ?>" name="nama" class="form-control" id="nama">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_siswa['kelas']; ?>" name="kelas" class="form-control" id="kelas">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat lahir</label>
                    <div class="col-sm-10">
                    <input type="text" value="<?php echo $data_siswa['tempat_lahir']; ?>" name="tempat_lahir" class="form-control" id="tempat_lahir">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                    <input type="date" value="<?php echo $data_siswa['tanggal_lahir']; ?>" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="alamat" id="alamat"><?php echo $data_siswa['alamat']; ?></textarea>
                </div>
                <br>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-0">
                    <input type="submit" name="tombol_update" class="btn btn-primary" value="Update">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>