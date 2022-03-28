

<?php $__env->startSection('content'); ?>
    <section>
    <div class="container mt-5 justify-content-center">
        <div class="row">
            <div class="col-lg-8">
                <h1>CRUD KELVIN</h1>
                <a href="<?php echo e(url('create')); ?>" class="btn btn-primary">+Tambah Siswa</a>
            </div>

          
            <div class="col-lg-8 mt-5">
                <table class="table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataSiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($dataSiswa->id); ?></td>
                        <td><?php echo e($dataSiswa->nama); ?></td>
                        <td><?php echo e($dataSiswa->kelas); ?></td>
                        <td><?php echo e($dataSiswa->alamat); ?></td>
                        <td>
                            <a href="<?php echo e(url('/show/'.$dataSiswa->id)); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo e(url('/destroy/'.$dataSiswa->id)); ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
</section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Games\application\coba3-laravel\resources\views/index.blade.php ENDPATH**/ ?>