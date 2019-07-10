<?php echo $__env->make('cabecalho', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <?php echo $__env->yieldContent('conteudo-principal'); ?>
    </div>

<?php echo $__env->make('rodape', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\trabalho_master\resources\views/principal.blade.php ENDPATH**/ ?>