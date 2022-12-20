<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Karyawan</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
</head>
<body>
    <center><h2>Edit Karyawan</h2></center>
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <form class="js-validation-material" action="<?php echo e(route('karyawan.update')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="number" id="id" name="id" value="<?php echo e($karyawan->id); ?>" class="d-none">
                    <div class="form-group" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="#" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" value="<?php echo e($karyawan->name); ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" value="<?php echo e($karyawan->email); ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="telp" class="form-label">Nomor Telepon</label>
                            <input type="number" name="telp" id="telp" value="<?php echo e($karyawan->telepon); ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" name="alamat" id="alamat" value="<?php echo e($karyawan->alamat); ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="gender" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="gender" name="gender" required>
                                <?php if($karyawan->jenis_kelamin == "pria"): ?>
                                <option value="">--- Pilih ---</option>
                                <option value="pria" selected>Laki-laki</option>
                                <option value="wanita">Perempuan</option>    
                                <?php elseif($karyawan->jenis_kelamin == 'wanita'): ?>
                                <option value="">--- Pilih ---</option>
                                <option value="pria">Laki-laki</option>
                                <option value="wanita" selected>Perempuan</option>
                                <?php else: ?>
                                <option value="">--- Pilih ---</option>
                                <option value="pria">Laki-laki</option>
                                <option value="wanita">Perempuan</option>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="tempat" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat" id="tempat" value="<?php echo e($karyawan->tempat_lahir); ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group" style="padding: 10px 0">
                        <div class="form-material">
                            <label for="tanggal" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal" id="tanggal" value="<?php echo e($karyawan->tanggal_lahir); ?>" class="form-control" required>
                        </div>
                    </div>
                    <center class="m-20">
                        <button type="submit" id="btn-send" class="btn btn-primary" style="border-radius: 0.5rem">Simpan</button>
                        <a href="<?php echo e(route('karyawan')); ?>" id="btn-back" class="btn btn-danger" style="border-radius: 00.5rem">Kembali</a>
                    </center>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\laravel8\resources\views/edit_karyawan.blade.php ENDPATH**/ ?>