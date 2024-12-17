<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formula 1 Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/custom-theme.css', 'resources/js/app.js']); ?>
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo e(asset('storage/logoo.png')); ?>" alt="F1 Logo" class="navbar-logo">
            </a>
            <div class="navbar-nav">
                <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
                <a class="nav-link" href="<?php echo e(route('drivers')); ?>">Drivers</a>
                <a class="nav-link" href="<?php echo e(route('teams')); ?>">Teams</a>
                <a class="nav-link" href="<?php echo e(route('schedule')); ?>">Schedule</a>
                <a class="nav-link" href="<?php echo e(route('contact.index')); ?>">Contact</a>
                <a class="nav-link" href="<?php echo e(route('standings.index')); ?>">Standings</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-nav">
                <span>&copy; <?php echo e(date('Y')); ?> Formula 1 Website. All rights reserved.</span>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>

</html>
<?php /**PATH C:\laragon\www\formula1_site\resources\views/layouts/app.blade.php ENDPATH**/ ?>