<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <?php echo $__env->make('layouts.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <!-- Page Heading -->
            <?php if(trim($__env->yieldContent('header')) || isset($header)): ?>
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <?php if (! empty(trim($__env->yieldContent('header')))): ?>
                            <?php echo $__env->yieldContent('header'); ?>
                        <?php elseif(isset($header)): ?>
                            <?php echo e($header); ?>

                        <?php endif; ?>
                    </div>
                </header>
            <?php endif; ?>

            <!-- Page Content -->
            <main>
                <?php if (! empty(trim($__env->yieldContent('content')))): ?>
                    <?php echo $__env->yieldContent('content'); ?>
                <?php elseif(isset($slot)): ?>
                    <?php echo e($slot); ?>

                <?php endif; ?>
            </main>
        </div>
    </body>
</html><?php /**PATH C:\Users\lemue\Downloads\gestao-tarefas-main\gestao-tarefas-main\resources\views/layouts/app.blade.php ENDPATH**/ ?>