<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <form action="<?php echo e(route('mobiles.index')); ?>" method="get" name="buscador">
            <div class="flex">
                <div class="pt-2 relative mx-12 text-gray-600">
                    <input
                        class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                        type="search" name="modelo" placeholder="Buscar modelo..." value="<?php echo e($request->modelo); ?>">
                    <button type="submit" style="margin-left: -30px">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>


        </form>
     <?php $__env->endSlot(); ?>

    <?php if(session('mensaje')): ?>
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Información',
            text: "<?php echo e(session('mensaje')); ?>",
        })
    </script>
    <?php endif; ?>


    <?php if($apple->count() || $samsung->count() || $xiaomi->count() || $huawei->count()): ?>
    <?php if($apple->count()): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.list','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="flex items-center">
            <div class="flex">
                <img class="rounded-full h-10 w-10 object-cover object-center"
                    src="<?php echo e(asset('storage/apple.png')); ?>" alt="">
            </div>
            <div class="ml-4">
                <div class="font-semibold text-xl text-gray-800 leading-tight">Apple</div>
            </div>
        </div>
        <div class="bg-white">
            <div class="max-w-2xl mx-auto px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="sr-only">Apple</h2>
                <div
                    class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
                    <?php $__currentLoopData = $apple; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <div
                                class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                <a href="<?php echo e(route('mobiles.show', $item)); ?>" class="group">
                                    <img src="<?php echo e(Storage::url($item->image)); ?>"
                                        class="w-full h-full group-hover:opacity-75">
                                </a>
                            </div>
                            <div class="flex">
                                <div>
                                    <h3 class="mt-4 text-sm text-gray-700"><?php echo e($item->modelo); ?></h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900"><?php echo e($item->precio); ?> €</p>
                                </div>
                                <div class="display-grid mt-4 mx-auto">
                                    <?php if($item->stock > 0): ?>
                                    <form action="<?php echo e(route('mobiles.addCart', $item)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i
                                            class="fa-solid fa-cart-shopping"></i></button>
                                    </form>
                                    <?php else: ?>
                                    <button class="bg-red-500 text-white font-bold py-2 px-4 rounded">No stock</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if($samsung->count()): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.list','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="flex items-center">
            <div class="flex">
                <img class="h-10 w-30 object-cover object-center"
                    src="<?php echo e(asset('storage/samsung.png')); ?>" alt="">
            </div>
            <div class="ml-4">
                <div class="font-semibold text-xl text-gray-800 leading-tight"></div>
            </div>
        </div>
        <div class="bg-white">
            <div class="max-w-2xl mx-auto px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="sr-only">Samsung</h2>
                <div
                    class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
                    <?php $__currentLoopData = $samsung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <div
                                class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                <a href="<?php echo e(route('mobiles.show', $item)); ?>" class="group">
                                    <img src="<?php echo e(Storage::url($item->image)); ?>"
                                        class="w-full h-full group-hover:opacity-75">
                                </a>
                            </div>
                            <div class="flex">
                                <div>
                                    <h3 class="mt-4 text-sm text-gray-700"><?php echo e($item->modelo); ?></h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900"><?php echo e($item->precio); ?> €</p>
                                </div>
                                <div class="display-grid mt-4 mx-auto">
                                    <form action="<?php echo e(route('mobiles.addCart', $item)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i
                                            class="fa-solid fa-cart-shopping"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if($xiaomi->count()): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.list','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="flex items-center">
            <div class="flex">
                <img class="rounded-full h-10 w-10 object-cover object-center"
                    src="<?php echo e(asset('storage/xiaomi.png')); ?>" alt="">
            </div>
            <div class="ml-4">
                <div class="font-semibold text-xl text-gray-800 leading-tight">Xiaomi</div>
            </div>
        </div>
        <div class="bg-white">
            <div class="max-w-2xl mx-auto px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="sr-only">Xiaomi</h2>
                <div
                    class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
                    <?php $__currentLoopData = $xiaomi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <div
                                class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                <a href="<?php echo e(route('mobiles.show', $item)); ?>" class="group">
                                    <img src="<?php echo e(Storage::url($item->image)); ?>"
                                        class="w-full h-full group-hover:opacity-75">
                                </a>
                            </div>
                            <div class="flex">
                                <div>
                                    <h3 class="mt-4 text-sm text-gray-700"><?php echo e($item->modelo); ?></h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900"><?php echo e($item->precio); ?> €</p>
                                </div>
                                <div class="display-grid mt-4 mx-auto">
                                    <form action="<?php echo e(route('mobiles.addCart', $item)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i
                                            class="fa-solid fa-cart-shopping"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if($huawei->count()): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.list','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="flex items-center">
            <div class="flex">
                <img class="rounded-full h-10 w-10 object-cover object-center"
                    src="<?php echo e(asset('storage/huawei.png')); ?>" alt="">
            </div>
            <div class="ml-4">
                <div class="font-semibold text-xl text-gray-800 leading-tight">Huawei</div>
            </div>
        </div>
        <div class="bg-white">
            <div class="max-w-2xl mx-auto px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                <h2 class="sr-only">Huawei</h2>
                <div
                    class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
                    <?php $__currentLoopData = $huawei; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <div
                                class="w-full aspect-w-1 aspect-h-1 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                <a href="<?php echo e(route('mobiles.show', $item)); ?>" class="group">
                                    <img src="<?php echo e(Storage::url($item->image)); ?>"
                                        class="w-full h-full group-hover:opacity-75">
                                </a>
                            </div>
                            <div class="flex">
                                <div>
                                    <h3 class="mt-4 text-sm text-gray-700"><?php echo e($item->modelo); ?></h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900"><?php echo e($item->precio); ?> €</p>
                                </div>
                                <div class="display-grid mt-4 mx-auto">
                                    <form action="<?php echo e(route('mobiles.addCart', $item)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i
                                            class="fa-solid fa-cart-shopping"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php else: ?>

    <div class="mt-8">
        <p class="text-center font-bold">No se ha encontrado ningún móvil</p>
    </div>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
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
<?php /**PATH D:\jetstream\phone_market\resources\views/mobiles/index.blade.php ENDPATH**/ ?>