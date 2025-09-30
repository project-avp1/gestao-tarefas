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
        <div class="relative min-h-screen overflow-hidden bg-slate-950">
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 via-sky-500 to-purple-600 opacity-80"></div>
            <div class="absolute -top-24 -right-24 h-72 w-72 rounded-full bg-white/10 blur-3xl"></div>
            <div class="absolute -bottom-32 -left-24 h-80 w-80 rounded-full bg-indigo-500/30 blur-3xl"></div>

            <div class="relative min-h-screen flex items-center justify-center px-6 py-12">
                <div class="w-full max-w-6xl grid gap-12 md:grid-cols-[minmax(0,1.1fr),minmax(0,1fr)] items-center">
                    <div class="hidden md:flex flex-col text-white space-y-8">
                        <div class="inline-flex items-center gap-3 text-sm font-medium uppercase tracking-[0.4em] text-white/80">
                            <span class="h-px w-12 bg-white/40"></span>
                            <?php echo e(config('app.name', 'Laravel')); ?>

                        </div>

                        <div class="space-y-4">
                            <h1 class="text-4xl lg:text-5xl font-bold leading-tight">
                                Organize suas tarefas com visual moderno e experiência fluida.
                            </h1>
                            <p class="text-lg text-white/80 max-w-xl">
                                Centralize suas atividades, acompanhe prazos e mantenha o foco. Entre para começar a transformar a forma como você trabalha diariamente.
                            </p>
                        </div>

                        <dl class="grid grid-cols-1 gap-4 text-sm text-white/80">
                            <div class="flex items-start gap-3">
                                <span class="mt-1 flex h-6 w-6 items-center justify-center rounded-full bg-white/15">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-7.25 7.25a1 1 0 01-1.414 0l-3.5-3.5a1 1 0 111.414-1.414l2.793 2.793 6.543-6.543a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <div>
                                    <dt class="font-semibold text-white">Produtividade simplificada</dt>
                                    <dd>Mantenha tudo em um só lugar com listas intuitivas e metas claras.</dd>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="mt-1 flex h-6 w-6 items-center justify-center rounded-full bg-white/15">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4">
                                        <path d="M10 3.5a.5.5 0 01.5-.5h.878a2 2 0 011.789 1.106l.894 1.788a.5.5 0 00.378.274l1.973.286a2 2 0 011.108 3.412l-1.428 1.392a.5.5 0 00-.144.442l.337 1.964a2 2 0 01-2.902 2.105l-1.767-.929a.5.5 0 00-.466 0l-1.767.93a2 2 0 01-2.902-2.106l.337-1.964a.5.5 0 00-.144-.442L3.35 9.87a2 2 0 011.108-3.412l1.973-.286a.5.5 0 00.378-.274l.894-1.788A2 2 0 018.622 3h.878a.5.5 0 01.5.5V10l-2.75 1.375" />
                                    </svg>
                                </span>
                                <div>
                                    <dt class="font-semibold text-white">Experiência envolvente</dt>
                                    <dd>Layouts responsivos, tema vibrante e visual consistente em qualquer dispositivo.</dd>
                                </div>
                            </div>
                        </dl>
                    </div>

                    <div class="w-full">
                        <div class="mx-auto w-full max-w-md rounded-3xl bg-white/95 p-8 shadow-2xl shadow-indigo-500/20 ring-1 ring-white/40 backdrop-blur">
                            <div class="mb-8 flex flex-col items-center gap-2 text-center">
                                <a href="/" class="inline-flex items-center justify-center rounded-full bg-indigo-100 p-3 text-indigo-600">
                                    <?php if (isset($component)) { $__componentOriginal8892e718f3d0d7a916180885c6f012e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8892e718f3d0d7a916180885c6f012e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-logo','data' => ['class' => 'h-10 w-10 fill-current']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-10 w-10 fill-current']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $attributes = $__attributesOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $component = $__componentOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__componentOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
                                </a>
                                <div>
                                    <h2 class="text-2xl font-semibold text-slate-900">Bem-vindo de volta</h2>
                                    <p class="mt-1 text-sm text-slate-500">Acesse sua conta e continue acompanhando suas tarefas.</p>
                                </div>
                            </div>

                            <?php echo e($slot); ?>

                        </div>

                        <p class="mt-8 text-center text-sm text-white/70 md:hidden">
                            <?php echo e(config('app.name', 'Laravel')); ?> — produtividade envolvente em qualquer lugar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\Users\lemue\Downloads\gestao-tarefas-main\gestao-tarefas-main\resources\views/layouts/guest.blade.php ENDPATH**/ ?>