<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e($title ?? 'laracste'); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('storage/images/apple-icon-180x180.png')); ?>">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo e(asset('storage/images/android-icon-192x192.png')); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('storage/images/favicon-32x32.png')); ?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('storage/images/favicon-96x96.png')); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('storage/images/favicon-16x16.png')); ?>">
        <script src="https://unpkg.com/alpinejs@3.1.x/dist/cdn.min.js" ></script>
        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="font-sans antialiased bg-black text-white">
        <div class="flex flex-row">
            <?php echo $__env->make('layouts.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <main class="flex flex-col w-full  mt-20">
                <?php echo e($slot); ?>

            </main>
        </div>

    </body>
</html>
<?php /**PATH D:\web sits\youtube\resources\views/layouts/app.blade.php ENDPATH**/ ?>