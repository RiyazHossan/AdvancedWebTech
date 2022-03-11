<?php $__env->startSection('content'); ?>
<h1>Product List</h1>
    <ul><ul><h3>
        <?php $__currentLoopData = $bikes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($b); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul></ul></h3>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Riyaz\APWT_TASK_1\resources\views/product.blade.php ENDPATH**/ ?>