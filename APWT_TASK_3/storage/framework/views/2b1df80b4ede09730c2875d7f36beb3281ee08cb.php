<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
    <div class = "container">
    <br><br>
     <h1>Registration Form</h1>
    <form action= "<?php echo e(route('registration')); ?>" class "form-group" method = "post">
        <?php echo e(csrf_field()); ?>

        <div class ="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value = "<?php echo e(old('name')); ?>" class = "form-control"><br>
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
            <span>Id</span>
            <input type="text" name="id" value = "<?php echo e(old('id')); ?>" class = "form-control"><br>
            <?php $__errorArgs = ['id'];
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
            <span>DOB</span>
            <input type="date" name="dob" value = "<?php echo e(old('dob')); ?>" class = "form-control"><br>
            <?php $__errorArgs = ['dob'];
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
            <input type="text" name="phone" value = "<?php echo e(old('phone')); ?>" class = "form-control"><br>
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
        <span>Email</span>
        <input type="text" name="email" value = "<?php echo e(old('email')); ?>" class = "form-control"><br>
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
        <input type = "submit" class="btn btn-primary" value = "Add Student">
    </form>
    </div>
    </body>
    </html>
<?php /**PATH C:\xampp\htdocs\Riyaz\APWT_TASK_2\resources\views/login/registration.blade.php ENDPATH**/ ?>