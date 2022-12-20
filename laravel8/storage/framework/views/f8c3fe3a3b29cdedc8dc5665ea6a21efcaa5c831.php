<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">

</head>
<body>
    <div class="container" >
        <center><h2 class="mt-5">Data Karyawan</h2></center>
        <div class="row">
            <div class="col-10"></div>
                <div class="coll-2 mt-5">
                    <div class="block-header block-header-default flex-row-reverse px-0 pt-0">
                        <a href="<?php echo e(route('karyawan.create')); ?>" class="btn btn-success">
                            <i class="fa fa-plus mr-5"></i>Tambah Karyawan
                        </a>
                    </div>
                </div>
        </div>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Nama Karyawan</th>
                    <th>Email</th>
                    <th>No. Telp</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $cvk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $karyawan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($karyawan->name); ?></td>
                        <td><?php echo e($karyawan->email); ?></td>
                        <td><?php echo e($karyawan->telepon); ?></td>
                        <td><?php echo e($karyawan->alamat); ?></td>
                        <td><?php echo e($karyawan->jenis_kelamin); ?></td>
                        <td><?php echo e($karyawan->tempat_lahir); ?></td>
                        <td><?php echo e($karyawan->tanggal_lahir); ?></td>
                        <td>
                            <a href="karyawan/edit/<?php echo e($karyawan->id); ?>" class="btn btn-primary"><i class="fa fas-pencil">Edit</i></a>
                            <a href="" class="btn btn-danger" onclick="deleteData('<?php echo e($karyawan->id); ?>')"><i class="fa fas-trash">Hapus</i></a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        function deleteData(id) {
            event.preventDefault();
            var url = "<?php echo e(route('karyawan.delete', ':id')); ?>";
            console.log(url);
            swal.fire({
                type:'warning',
                title='Hapus data!',
                text='Apakah anda yakin akan menghapus data?',
                showCancelButton: true,
                confrimButtonColor: '#f5084a',
                cancelButtonColor: '#42b6b3'
            }).then(function(result) {
                if (result.dismiss) return

                $.ajax({
                    headers:{
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                },
                url: url.replace(':id', id),
                type: 'DELETE'
            })
        })
    }

    $(document).ajaxStop(function(){
        window.location.reload();
    });
    </script>

</body>
</html><?php /**PATH D:\Project\laravel8\resources\views/karyawan.blade.php ENDPATH**/ ?>