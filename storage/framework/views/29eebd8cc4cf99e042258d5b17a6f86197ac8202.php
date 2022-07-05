



<?php $__env->startSection('js'); ?>
<script src='<?php echo e(url('js/login.js')); ?>' defer></script>
<?php $__env->stopSection(); ?>
<script type="text/javascript">
    const csrf_token = "<?php echo e(csrf_token()); ?>";
</script>

 

<?php $__env->startSection('title','Cambio Credenziali'); ?>


<?php $__env->startSection('h1','Cambio Credenziali'); ?>
<?php $__env->startSection('form'); ?>
<?php if($error == 'campi_vuoti'): ?>
<section class='error'>Compilare tutti i campi.</section>
<?php elseif($error == 'password_corta'): ?>
<section class='error'>Password corta.</section>
<?php elseif($error == 'esistente'): ?>
<section class='error'>Account già esistente</section>
<?php endif; ?>
                <form name='form' method='post'>
                    <?php echo csrf_field(); ?>
                <p><label>Nome <input type='text' name='nome'></label></p>

                <p><label>Cognome <input type='text' name='cognome'></label></p>

                    <p><label>Username <input type='text' name='username'></label></p>
                    <p><label>Password <input type='password' name='password'></label></p>
                    <button type="submit">Cambia Credenziali</button>
                    <button onclick="location.href='login'" type="button">Indietro</button>       
       
				 </form>
                 <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.login_registrazione', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Luigi\Desktop\hw2\resources\views/cambio.blade.php ENDPATH**/ ?>