

<html>
    <head>
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='<?php echo e(url('css/login.css')); ?>'>
    <?php echo $__env->yieldContent('js'); ?>
      <title><?php echo $__env->yieldContent('title'); ?></title>
   

  </head>

  <body>

              

<div class="container">
<img src="../image/images.jfif">
               <h1><?php echo $__env->yieldContent('h1'); ?></h1>
              <?php echo $__env->yieldContent('form'); ?>
      </div>
</div>
  </body>
</html>
<?php /**PATH C:\Users\Luigi\Desktop\hw2\resources\views/layouts/login_registrazione.blade.php ENDPATH**/ ?>