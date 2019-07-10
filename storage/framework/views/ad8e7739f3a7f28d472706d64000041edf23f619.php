<?php $__env->startSection('conteudo-principal'); ?>

<h2>Adicionar Categoria</h2>

<form method="POST" action="<?php echo e(url('/categorias/adicionar')); ?>">

    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome" class="form-control" name="nome" type="text">
    </div>

    <div class="form-group">
        <label for="descricao">Descricao</label>
        <textarea id="descricao" class="form-control" rows="3" name="descricao"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trabalho_master\resources\views/form-adicionar-cat.blade.php ENDPATH**/ ?>