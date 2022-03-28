<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>

    <?php echo $__env->yieldPushContent('before-style'); ?>
    <?php echo $__env->make('includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('after-style'); ?>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php echo $__env->yieldPushContent('before-content'); ?>
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->yieldPushContent('after-content'); ?>
        </div>
    </div>

    
    <?php echo $__env->yieldPushContent('before-script'); ?>
    <?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('after-script'); ?>
    
</body>
</html><?php /**PATH C:\Games\application\coba3-laravel\resources\views/layouts/default.blade.php ENDPATH**/ ?>