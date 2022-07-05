

<?php $__env->startSection('script'); ?>
    
<link rel="stylesheet" href="<?php echo e(url('css/principale.css')); ?>" />
<script src='<?php echo e(url('js/principale.js')); ?>' defer></script>
<?php $__env->stopSection(); ?>




        <?php $__env->startSection('ricerca'); ?>
         <img src="../image/images.jfif">
         <form name="ricerca" id="ricerca" method="get">
        <?php echo csrf_field(); ?>
                <input type="search"  onfocus="this.value=''" value="Inserisci nome telefono da cercare" name="prodotto" id="prodotto" >
         <input  type="submit" value="Cerca">
         </form>
         <?php $__env->stopSection(); ?>

     



         <?php $__env->startSection('telefono'); ?>
         <div id='telefono'>
             
         </div>


         
         <?php $__env->stopSection(); ?>
         
         
         
         
          
         

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Luigi\Desktop\hw2\resources\views/principale.blade.php ENDPATH**/ ?>