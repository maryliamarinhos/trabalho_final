<?php $__env->startSection('conteudo-principal'); ?>

<h2>Editar Categoria</h2>
<hr />

<form method="POST" action="<?php echo e(url('/categorias/editar')); ?>">

    <?php echo csrf_field(); ?>

    <input type="hidden" name="id" value="<?php echo e($categoria->id); ?>">

    <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome" class="form-control" name="nome" type="text" value="<?php echo e($categoria->nome); ?>">
    </div>

    <div class="form-group">
        <label for="descricao">Categoria</label>
        <textarea id="descricao" class="form-control" rows="3" name="descricao"><?php echo e($categoria->descricao); ?></textarea>
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trabalho_master\resources\views/form-editar-cat.blade.php ENDPATH**/ ?>