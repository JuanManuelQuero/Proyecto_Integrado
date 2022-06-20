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
<?php /**PATH D:\jetstream\phone_market\resources\views/comments/create.blade.php ENDPATH**/ ?>