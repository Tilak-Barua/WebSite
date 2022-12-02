<!DOCTYPE html>
<html lang="en">

<head>

<?php echo $__env->make('admin.includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body class="bg-gradient-primary">

    <?php echo $__env->yieldContent('content'); ?>

   <?php echo $__env->make('admin.includes.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\Diagnostic_Center\resources\views/admin/layouts/default_reg.blade.php ENDPATH**/ ?>