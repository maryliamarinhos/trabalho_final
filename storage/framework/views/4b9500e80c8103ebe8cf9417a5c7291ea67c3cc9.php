<?php $__env->startSection('conteudo-principal'); ?>

<h2>Editar Título do Livro</h2>
<hr />

<form method="POST" action="<?php echo e(url('/livros/editar')); ?>">

    <?php echo csrf_field(); ?>

    <input type="hidden" name="id" value="<?php echo e($livro->id); ?>">

    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input id="titulo" class="form-control" name="titulo" type="text" value="<?php echo e($livro->titulo); ?>">
    </div>

    <div class="form-group">
        <label for="autor">Autor</label>
        <textarea id="autor" class="form-control" rows="3" name="autor"><?php echo e($livro->autor); ?></textarea>
    </div>

    <div class="form-group">
        <label for="categoria_id">Categoria</label>
        <select class="form-control" name="categoria_id" id="categoria_id">
            <option value="">Sem categoria</option>
            <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option <?php echo e(($livro->categoria and $livro->categoria->id == $categoria->id) ? 'selected' : ''); ?> value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nome); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trabalho_master\resources\views/form-editar.blade.php ENDPATH**/ ?>