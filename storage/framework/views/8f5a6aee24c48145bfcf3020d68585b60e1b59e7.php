

    <?php $__env->startSection('script'); ?>
<link rel="stylesheet" href="<?php echo e(url('css/profilo.css')); ?>"/>
<script src='<?php echo e(url('js/profilo.js')); ?>' defer></script>
<script src='<?php echo e(url('js/elimina.js')); ?>' defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('telefono'); ?>
<div id='telefono'>

</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('cambio'); ?>

<div class="container">

                    <form name="cambio" id="cambio" method='get'>
                        <?php echo csrf_field(); ?>
                     <label>Vuoi cambiare le tue credenziale?</label>
                     <button onclick="location.href='controllo_password'" type="button">Cambia Credenziali</button><br>
                     <label>Vuoi Eliminare il tuo account?</label>
                     <button type="submit">Elimina Account</button>
                </div>
    

<?php $__env->stopSection(); ?>


 



            

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Luigi\Desktop\hw2\resources\views/profilo.blade.php ENDPATH**/ ?>