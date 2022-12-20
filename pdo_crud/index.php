<?php 
include('library.php');

$lib = new Library();

$data_siswa = $lib->show();

 
if(isset($_GET['hapus_siswa']))
{
    $id_siswa = $_GET['hapus_siswa'];
    $status_hapus = $lib->delete($id_siswa);
    if($status_hapus)
    {
        header('Location: index.php');
    }
}
?>
<html>
    <head>
        <title>DATA SISWA</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Siswa</h3>
            </div>
            <div class="card-body">
                <a href="add.php" class="btn btn-success">Tambah</a>
                <hr/>
                <table class="table table-bordered" width="60%">
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                    $no = 1;

                    foreach($data_siswa as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nis']."</td>";
                        echo "<td>".$row['nama']."</td>";
                        echo "<td>".$row['kelas']."</td>";
                        echo "<td>".$row['tempat_lahir']."</td>";
                        echo "<td>".$row['tanggal_lahir']."</td>";
                        echo "<td>".$row['alamat']."</td>";
                        echo "<td><a class='btn btn-info' href='edit.php?id_siswa=".$row['id_siswa']."'>Update</a>
                        <a class='btn btn-danger' href='index.php?hapus_siswa=".$row['id_siswa']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>