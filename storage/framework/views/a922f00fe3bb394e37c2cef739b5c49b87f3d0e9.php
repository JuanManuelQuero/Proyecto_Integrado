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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Características')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 px-4">
                    <div class="w-full relative flex items-center justify-center">

                        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <div class="flex flex-row-reverse">
                                    <a href="<?php echo e(route('mobiles.index')); ?>" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded"><i class=""></i> Volver</a>
                                </div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900"><?php echo e($mobile->modelo); ?></h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500"><?php echo e($mobile->marca); ?></p>
                                <img src="<?php echo e(Storage::url($mobile->image)); ?>"
                                    class="h-124 w-24 object-cover object-center" alt="">
                            </div>
                            <div class="border-t border-gray-200">
                                <dl>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Modelo</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo e($mobile->modelo); ?></dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Stock</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo e($mobile->stock); ?> unidades
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Almacenamiento</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <?php echo e($mobile->almacenamiento); ?></dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Precio</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo e($mobile->precio); ?> €</dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Pantalla</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo e($mobile->pantalla); ?></dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">Chip</dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo e($mobile->chip); ?></dd>
                                    </div>
                                </dl>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Comentarios -->
            <div class="p-4 w-full bg-white my-8 rounded-lg border shadow-md sm:p-8">
                <div class="card-body">
                    <h5 class="my-4">Comentarios en <b>"<?php echo e($mobile->modelo); ?>" </b> </h5>
                    <div class="w-full border-t border-gray-300 my-2"></div>
                    <!-- Crear un comentario -->
                    <div class="max-w-lg shadow-md bg-gray-100">
                        <form action="<?php echo e(route('comments.create', $mobile)); ?>" method="POST" class="w-full p-4">
                            <?php echo csrf_field(); ?>
                            <?php if(isset($comment->id)): ?>
                                <input type="hidden" name="parent_id" value="<?php echo e($comment->id); ?>">
                            <?php endif; ?>

                            <input type="hidden" name="user_id" value="<?php echo e(\auth()->id()); ?>">
                            <div class="mb-2">
                                <label for="comentario" class="text-lg text-gray-600">Añadir comentario</label>
                                <textarea name="comentario" id="comentario"
                                    class="w-full h-20 p-2 border rounded focus:outline-none focus:ring-gray-300 focus:ring-1"
                                    placeholder=""></textarea>
                            </div>
                            <div>
                                <button type="submit" class="px-3 py-2 text-sm text-blue-100 bg-blue-600 rounded">
                                    Publicar
                                </button>
                            </div>
                        </form>
                    </div>
                    <br>
                    
                    <!-- Lista de comentarios y responder a un comentario -->
                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="p-4 my-6">
                        <div class="p-4 w-full bg-white my-8 rounded-lg border shadow-md sm:p-8">
                            
                                <b><?php echo e($comment->user->name); ?></b>
                                <p><?php echo e($comment->comentario); ?></p>
                                <div class="my-3" id="reply-<?php echo e($comment->id); ?>">
                                    <div>
                                        <?php echo $__env->make('comments.create', ['comment' => $comment], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                            
                            <div class="px-6"></div>
                            <?php if($comment->replies): ?>
                                <?php echo $__env->make('comments.list', ['comments' => $comment->replies], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
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
<?php endif; ?><?php /**PATH D:\jetstream\phone_market\resources\views/mobiles/detail.blade.php ENDPATH**/ ?>