



        <?php $__env->startSection('js'); ?>
        <script src='<?php echo e(url('js/login.js')); ?>' defer></script>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('title','Login'); ?>

          


<?php $__env->startSection('h1','Login'); ?>
<?php $__env->startSection('form'); ?>
<?php if($error == 'campi_vuoti'): ?>
<section class='error'>Compilare tutti i campi.</section>
<?php elseif($error == 'nonesiste'): ?>
<section class='error'>Credenziali non valide.</section>
<?php endif; ?>
                <form name="form" method="post">
                    <?php echo csrf_field(); ?>
                    <p><label>Username <input type="text" name="username" id='username' value='<?php echo e(old("username")); ?>'></label></p>
                    <p><label>Password <input type="password" name="password" id='password'></label></p>
                    <button type="submit">Entra</button>
					<button onclick="location.href='registrazione'" type="button">Registrati</button>       
				 </form>
                 <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.login_registrazione', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Luigi\Desktop\hw2\resources\views/login.blade.php ENDPATH**/ ?>