<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <?php echo $__env->make('inc.navBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <div>
            <?php echo $__env->yieldContent('content'); ?>
          </div>

    </div>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\Riyaz\APWT_TASK_2\resources\views/layout/app.blade.php ENDPATH**/ ?>