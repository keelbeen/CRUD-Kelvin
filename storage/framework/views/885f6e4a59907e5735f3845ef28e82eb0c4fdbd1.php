
 
<?php $__env->startSection('content'); ?>
    <section>
        <div class="container mt-5" >
            <h1>Edit Siswa</h1>
            <div class="row">
                <div class="com-lg-8">
                    <form action="<?php echo e(url('/update/'. $data->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="nama">Nama Siswa *</label>
                            <input type="text" name="nama" class="form-control"  placeholder="Kelvin Agustian" value="<?php echo e($data->nama); ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Kelas *</label>
                            <input type="text" name="kelas" class="form-control" placeholder="XI RPL 1" value="<?php echo e($data->kelas); ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat *</label>
                            <textarea class="form-control" name="alamat" placeholder="Bogor"><?php echo e($data->alamat); ?></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Edit Siswa</button>
                        </div>
                        <div class="form-group mt-2">
                            <a href=""<?php echo e(url('/')); ?>> 
                                << Kembali ke halaman utama</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Games\application\coba3-laravel\resources\views/show.blade.php ENDPATH**/ ?>