
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <body>
    <div class = "container">
    <br><br>
    <h1>Login Form</h1>
    <form action= "<?php echo e(route('login')); ?>" class "form-group" method = "post">
        <?php echo e(csrf_field()); ?>

        <div class ="col-md-4 form-group">
            <span>User Name</span>
            <input type="text" name="userName" value = "<?php echo e(old('userName')); ?>" class = "form-control"><br>
            <?php $__errorArgs = ['userName'];
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
            <input type="password" name="password" value = "<?php echo e(old('password')); ?>" class = "form-control"><br>
            <?php $__errorArgs = ['password'];
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
        <input type = "submit" class="btn btn-primary" value = "Login">
        Don't have an account? <a href="<?php echo e(route('registration')); ?>">sign-up</a>
    </form>
    </div>
    </body>
</html>

<?php /**PATH C:\xampp\htdocs\Riyaz\APWT_TASK_2\resources\views/login/login.blade.php ENDPATH**/ ?>