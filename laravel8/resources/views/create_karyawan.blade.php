<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Karyawan</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <center><h2>Tambah Karyawan</h2></center>
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <form class="js-validation-material" action="{{ route('karyawan.add') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group" style="padding: 10px 0">
                    <div class="form-material">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" required>
                    </div>
                </div>
                <div class="form-group" style="padding: 10px 0">
                    <div class="form-material">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="form-group" style="padding: 10px 0">
                    <div class="form-material">
                        <label for="telp" class="form-label">No Telepon</label>
                        <input type="number" id="telp" name="telp" class="form-control" required>
                    </div>
                </div>
                <div class="form-group" style="padding: 10px 0">
                    <div class="form-material">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="form-control" required>
                    </div>
                </div>
                <div class="form-group" style="padding: 10px 0">
                    <div class="form-material">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="">--- Pilih ---</option>
                            <option value="pria">Laki-laki</option>
                            <option value="wanita">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" style="padding: 10px 0">
                    <div class="form-material">
                        <label for="tempat" class="form-label">Tempat Lahir</label>
                        <input type="text" id="tempat" name="tempat" class="form-control" required>
                    </div>
                </div>
                <div class="form-group" style="padding: 10px 0">
                    <div class="form-material">
                        <label for="tanggal" class="form-label">Tanggal Lahir</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                    </div>
                </div>
                <center class="m-20">
                    <button type="submit" id="btn-send" class="btn btn-primary" style="border-radius: 0.5rem">Simpan</button>
                    <a href="{{ route('karyawan') }}" id="btn-back" class="btn btn-danger" style="border-radius: 0.5rem">Kembali</a>
                </center>
                </form>
            </div>
        </div>
    </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>