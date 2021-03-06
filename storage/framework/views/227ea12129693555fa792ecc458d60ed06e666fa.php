<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="antialiased">
    <div class="">
        <?php if(Route::has('login')): ?>
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(url('/dashboard')); ?>"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    <?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="relative bg-black overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-black sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                    fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <div>
                    <div class="relative pt-6 px-4 sm:px-6 lg:px-8"></div>
                    <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">

                        </div>
                    </div>
                </div>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Obt??n tu smartphone</span>
                            <span class="block text-blue-600 xl:inline">con las mejores prestaciones</span>
                        </h1>
                        <p
                            class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Compre su nuevo tel??fono con las mejores car??cteristicas que hay disponibles en la
                            actualidad de la forma m??s r??pida.</p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <?php if(Route::has('login')): ?>
                                    <div class="px-6 py-4 sm:block">
                                        <?php if(auth()->guard()->check()): ?>
                                            <a href="<?php echo e(url('/dashboard')); ?>"
                                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-black bg-white md:py-4 md:text-lg md:px-10">Dashboard</a>
                                        <?php else: ?>
                                        <div class="mt-3 sm:mt-0 sm:ml-3">
                                            <a href="<?php echo e(route('login')); ?>"
                                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-black bg-white md:py-4 md:text-lg md:px-10">Log in</a>
                                        </div>
                                                <?php if(Route::has('register')): ?>
                                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                                <a href="<?php echo e(route('register')); ?>"
                                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 md:py-4 md:text-lg md:px-10">Register</a>
                                            </div>
                                                    <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                src="<?php echo e(asset('storage/wallpaper.avif')); ?>" alt="">
        </div>
    </div>



    <section class="max-w-8xl mx-auto bg-white dark:bg-white pt-16">
        <div>
            <div role="contentinfo" class="flex items-center flex-col px-4">
                <hh1 tabindex="0"
                    class="focus:outline-none text-4xl lg:text-4xl font-extrabold text-center leading-10 text-black dark:text-black lg:w-5/12 md:w-9/12 pt-4">
                    Compre su smartphone de manera segura e inmediata</hh1>
            </div>
            <div tabindex="0" aria-label="group of cards"
                class="focus:outline-none mt-20 flex flex-wrap justify-center gap-10 px-4">
                <div tabindex="0" aria-label="card 1" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                    <div class="w-20 h-20 relative mr-5">
                        <div class="absolute top-0 right-0 bg-slate-800 rounded w-16 h-16 mt-2 mr-1"></div>
                        <div
                            class="absolute text-white bottom-0 left-0 bg-black rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG1.svg"
                                alt="drawer">
                        </div>
                    </div>
                    <div class="w-10/12">
                        <h2 tabindex="0" class="focus:outline-none text-lg font-bold leading-tight text-blue-600">
                            Envio entre 2 o 3 d??as</h2>
                        <p tabindex="0" class="focus:outline-none text-base text-gray-600 leading-normal pt-2">
                            Reciba si nuevo smartphone un periodo de tiempo de entre 2 a 3 d??as laborales.</p>
                    </div>
                </div>
                <div tabindex="0" aria-label="card 2" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                    <div class="w-20 h-20 relative mr-5">
                        <div class="absolute top-0 right-0 bg-slate-800 rounded w-16 h-16 mt-2 mr-1"></div>
                        <div
                            class="absolute text-white bottom-0 left-0 bg-black rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG2.svg" alt="check">
                        </div>
                    </div>
                    <div class="w-10/12">
                        <h2 tabindex="0" class="focus:outline-none text-lg font-semibold leading-tight text-blue-600">
                            Seguro sin
                            la necesidad de pagar un plus</h2>
                        <p tabindex="0" class="focus:outline-none text-base text-gray-600 leading-normal pt-2">Con
                            la compra de el m??vil, se le incluye un seguro de 2 a??os en caso de robo o tenga alg??n
                            defecto.</p>
                    </div>
                </div>
                <div tabindex="0" aria-label="card 4" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                    <div class="w-20 h-20 relative mr-5">
                        <div class="absolute top-0 right-0 bg-slate-800 rounded w-16 h-16 mt-2 mr-1"></div>
                        <div
                            class="absolute text-white bottom-0 left-0 bg-black rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG4.svg"
                                alt="monitor">
                        </div>
                    </div>
                    <div class="w-10/12">
                        <h2 tabindex="0" class="focus:outline-none text-lg font-semibold leading-tight text-blue-600">
                            Compre por
                            internet</h2>
                        <p tabindex="0" class="focus:outline-none text-base text-gray-600 leading-normal pt-2">Puede
                            realizar el pag?? por medio de cualquier m??todo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.footer','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</html>
<?php /**PATH D:\jetstream\phone_market\resources\views/welcome.blade.php ENDPATH**/ ?>