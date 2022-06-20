<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php if(session('mensaje')): ?>
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Información',
                text: "<?php echo e(session('mensaje')); ?>",
            })
        </script>
    <?php endif; ?>

    <div class="container mx-auto mt-10">
        <div class="flex shadow-md my-10">
            <div class="w-3/4 bg-white px-10 py-10">
                <div class="flex justify-between border-b pb-8">
                    <h1 class="font-semibold text-2xl">Carrito de Compra</h1>
                    <h2 class="font-semibold text-2xl"><?php echo e(\Cart::session(auth()->id())->getContent()->count()); ?>

                        Artículos</h2>
                </div>
                <div class="flex mt-10 mb-5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Detalles Producto</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Cantidad</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Percio</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
                </div>
                <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                        <div class="flex w-2/5">
                            <div class="w-20">
                                <img class="h-24" src="<?php echo e(Storage::url($item->attributes->image)); ?>" alt="">
                            </div>
                            <div class="flex flex-col justify-between ml-4 flex-grow">
                                <span class="font-bold text-sm"><?php echo e($item->attributes->modelo); ?></span>
                                <span class="text-red-500 text-xs"><?php echo e($item->name); ?></span>
                                <form action="<?php echo e(route('cart.remove', $item->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit"
                                        class="cursor-pointer font-semibold hover:text-red-500 text-gray-500 text-xs">Eliminar</button>
                                </form>
                            </div>
                        </div>
                        <div class="flex justify-center w-1/5">

                            <form action="<?php echo e(route('cart.lessQuantity', $item->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button><i class="fa-solid fa-minus"></i></button>
                            </form>
                            <input class="mx-2 border text-center" disabled min="1" id=cantidad style="width: 60%"
                                value="<?php echo e($item->quantity); ?>">
                            <form action="<?php echo e(route('cart.moreQuantity', $item->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button><i class="fa-solid fa-plus"></i></button>
                            </form>


                        </div>
                        <input class="text-center w-1/5 font-semibold text-sm" disabled value="<?php echo e($item->price); ?>"
                            id=precio>€
                        <input class="text-center w-1/5 font-semibold text-sm " disabled
                            value="<?php echo e($item->price * $item->quantity); ?>" id="total">€
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <a href="<?php echo e(route('mobiles.index')); ?>" class="flex font-semibold text-indigo-600 text-sm mt-10"
                    style="width: 35%">

                    <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                        <path
                            d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                    </svg>
                    Continuar comprando
                </a>
            </div>

            <?php if(count($cartItems) > 0): ?>
                <div id="summary" class="w-1/4 px-8 py-10">
                    <h1 class="font-semibold text-2xl">Pedido</h1>

                    <div class="border-t mt-8">
                        <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                            <span>Precio Total</span>
                            <span><?php echo e(\Cart::session(auth()->id())->getTotal()); ?> €</span>
                        </div>

                        <?php if(count($cartItems) > 0): ?>
                            <form action="<?php echo e(route('cart.vender', $item->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit"
                                    class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Confirmar</button>
                            </form>
                        <?php endif; ?>

                        <?php if(count($cartItems) > 0): ?>
                            <form action="<?php echo e(route('cart.clear')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit"
                                    class="mt-2 bg-red-500 font-semibold hover:bg-red-600 py-3 text-sm text-white uppercase w-full">Vaciar
                                    Carrito</button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            <?php else: ?>
                <div id="summary" class="w-1/4 px-8 py-10" style="text-align: center">
                    <h1 class="font-semibold text-2xl">Carrito vacío</h1>
                    <div class="mt-8">
                        <a href="<?php echo e(route('mobiles.index')); ?>"
                            class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 px-3 text-sm text-white uppercase"
                            style="width: 100%;">
                            Tienda</a>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\jetstream\phone_market\resources\views/cart/index.blade.php ENDPATH**/ ?>