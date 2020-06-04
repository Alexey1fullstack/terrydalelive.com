<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--end::Base Path -->
    <meta charset="utf-8" />
    <title><?php echo e($setting->site_name); ?> | Card system</title>
    <meta name="description" content="Real Estate Loans">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="shortcut icon" href="<?php echo e(asset('public/logo.ico')); ?>" />
    <?php echo $__env->yieldContent('custom-css'); ?>
    <?php echo $__env->yieldContent('custom-js'); ?>
</head>
<body>
    <div class="">
        <article>
            
            <?php echo $__env->make('f_layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            
            <?php echo $__env->yieldContent('main-content'); ?>
            
            
           
        </article>

        
        <?php echo $__env->make('f_layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        <!-- Start : modal -->
        <?php echo $__env->yieldContent('modal'); ?>
        
        
    </div>
    <?php echo $__env->yieldContent('footer-js'); ?>
</body>
</html>
<?php /**PATH E:\xampp\htdocs\resources\views/f_layout/main.blade.php ENDPATH**/ ?>