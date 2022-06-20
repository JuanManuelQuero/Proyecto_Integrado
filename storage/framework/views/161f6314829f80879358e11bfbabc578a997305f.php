<?php $__env->startComponent('mail::message'); ?>
    # PhoneMarket
    
    __Nombre:__ <?php echo e($datosMensaje['nombre']); ?>


    __Apellidos:__ <?php echo e($datosMensaje['apellidos']); ?>


    __Email:__ <?php echo e($datosMensaje['email']); ?>



    __Mensaje:__

    <?php echo e($datosMensaje['mensaje']); ?>

<?php echo $__env->renderComponent(); ?><?php /**PATH D:\jetstream\phone_market\resources\views/mails/mailcontacto.blade.php ENDPATH**/ ?>