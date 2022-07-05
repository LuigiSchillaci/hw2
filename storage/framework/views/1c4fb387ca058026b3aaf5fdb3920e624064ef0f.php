

<?php $__env->startSection('script'); ?>
<link rel="stylesheet" href="<?php echo e(url('css/controllo_password.css')); ?>"/>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('cambio'); ?>
<section>

            <form name='form' method='post' id="dati">
            <?php echo csrf_field(); ?>
             <h1>Inserisci la tua password attuale</h1>      
             <?php if($error == 'password_errata'): ?>
<section class='error'>Errore password</section>
<?php endif; ?>
             <p><label>Password: <input type="password" name="password" id='password'></label></p>
             <button type="submit">Entra</button>
             </form>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Luigi\Desktop\hw2\resources\views/controllo_password.blade.php ENDPATH**/ ?>