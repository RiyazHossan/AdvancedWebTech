<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
    <div class = "container">
    <br><br>
     <h1>Delete User</h1>
    <form action= "<?php echo e(route('deleteUser')); ?>" class "form-group" method = "post">
        <?php echo e(csrf_field()); ?>

        <div class ="col-md-4 form-group">
            <span>ID</span>
            <input type="text" name="id" value="<?php echo e($user->id); ?>" class="form-control" readonly>
            <span>Name</span>
            <input type="text" name="name" value = "<?php echo e($user->name); ?>" class = "form-control"><br>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class = "text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class ="col-md-4 form-group">
            <span>Password</span>
            <input type="text" name="password" value = "<?php echo e($user->password); ?>" class = "form-control"><br>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class = "text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>


        <div class ="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="phone" value = "<?php echo e($user->phone); ?>" class = "form-control"><br>
            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class = "text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class ="col-md-4 form-group">
        <span>Account Type</span>
        <input type="text" name="accType" value = "<?php echo e($user->accType); ?>" class = "form-control"><br>
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class = "text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <input type = "submit" class="btn btn-primary" value = "Delete">
    </form>
    </div>
    </body>
    </html>
<?php /**PATH C:\xampp\htdocs\Riyaz\APWT_TASK_3\resources\views/admin/deleteUser.blade.php ENDPATH**/ ?>