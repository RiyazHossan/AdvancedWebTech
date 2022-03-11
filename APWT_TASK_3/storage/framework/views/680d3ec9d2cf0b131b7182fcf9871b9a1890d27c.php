<?php $__env->startSection('contentAdmin'); ?>
    <table class = "table table-border">
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Date of Birth</th>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->password); ?></td>
            <td><?php echo e($user->phone); ?></td>
            <td><?php echo e($user->accType); ?></td>
            <td><a href="/editUser/<?php echo e($user->id); ?>">Edit</a></td>
            <td><a href="/deleteUser/<?php echo e($user->id); ?>">Delete</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.adminApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Riyaz\APWT_TASK_3\resources\views/admin/list.blade.php ENDPATH**/ ?>