
 
<?php $__env->startSection('content'); ?>
    <section>
        <div class="container mt-5" >
            <h1>Tambah Siswa</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="<?php echo e(url('/store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="nama">Nama Siswa *</label>
                            <input type="text" name="nama" class="form-control"  placeholder="Kelvin Agustian">
                        </div>
                        <div class="form-group">
                            <label for="nama">Kelas *</label>
                            <input type="text" name="kelas" class="form-control" placeholder="XI RPL 1">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat *</label>
                            <textarea class="form-control" name="alamat" placeholder="Bogor"></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Tambah Siswa</button>
                        </div>
                        <div class="form-group mt-2">
                            <a href="<?php echo e(url('/')); ?>"> 
                                << Kembali ke halaman utama</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Games\application\coba3-laravel\resources\views/create.blade.php ENDPATH**/ ?>