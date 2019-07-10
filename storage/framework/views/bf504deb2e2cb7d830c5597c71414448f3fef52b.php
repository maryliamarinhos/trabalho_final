<?php $__env->startSection('conteudo-principal'); ?>
    
    <div class="row">
        <h2>Categorias</h2>
    </div>
    
    <a href="<?php echo e(url('/')); ?>" class="btn btn-warning float-left mb-2">Início</a>
    <a href="<?php echo e(url('/categorias/form-adicionar')); ?>" class="btn btn-primary float-right mb-2">Adicionar</a>

    <table class="table table-dark">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Opções</th>
        </tr>
        <?php $__empty_1 = true; $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td> <?php echo e($categoria->id); ?> </td>
                <td> <?php echo e($categoria->nome); ?> </td>
                <td> <?php echo e($categoria->descricao); ?> </td>
                <td>
                    <a class="btn btn-outline-secondary" href="<?php echo e(url('/categorias/editar/' . $categoria->id)); ?>">
                        Editar
                    </a>
                    <a class="btn btn-outline-secondary" href="<?php echo e(url('/categorias/excluir/' . $categoria->id)); ?>">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="5">Sem categorias cadastradas.</td>
            </tr>
        <?php endif; ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trabalho_master\resources\views/categorias.blade.php ENDPATH**/ ?>