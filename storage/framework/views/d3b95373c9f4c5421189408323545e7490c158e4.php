<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<?php echo $__env->yieldContent('script'); ?>


<title>Phone Mania</title>
</head>
<body>

    <nav>
        <img src="../image/images.jfif">
      <?php echo $__env->yieldContent('ricerca'); ?>
         <div id="menu">
         <a href="/principale">Home</a>
        <a href="/logout">Esci</a>
        <a href="/profilo">Profilo</a>
        </div>
    </nav>

<header>
<h1>Cerca il tuo telefono e aggiungilo tra i preferiti</h1>
</header>

    
<?php echo $__env->yieldContent('telefono'); ?>

<?php echo $__env->yieldContent('cambio'); ?>

    <footer>
    Luigi Schillaci 1000001824
    </footer>
</body>
</html>
<?php /**PATH C:\Users\Luigi\Desktop\hw2\resources\views/layouts/home.blade.php ENDPATH**/ ?>