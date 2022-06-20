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

<?php /**PATH D:\jetstream\phone_market\resources\views/comments/comment.blade.php ENDPATH**/ ?>