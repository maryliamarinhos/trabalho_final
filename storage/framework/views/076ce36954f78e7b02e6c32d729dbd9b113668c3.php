<?php $__env->startSection('conteudo-principal'); ?>
    
    <h2>Livros</h2>

    <a href="<?php echo e(url('/')); ?>" class="btn btn-warning float-left mb-2">Início</a>
    <a href="<?php echo e(url('/livros/form-adicionar')); ?>" class="btn btn-primary float-right mb-2">Adicionar</a>


    <table class="table table-dark">
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Categoria</th>
            <th>Data</th>
            <th>Opções</th>
        </tr>
        <?php $__empty_1 = true; $__currentLoopData = $livros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $livro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td> <?php echo e($livro->id); ?> </td>
                <td> <?php echo e($livro->titulo); ?> </td>
                <td> <?php echo e($livro->autor); ?> </td>
                <td> <?php echo e($livro->categoria->nome ?? 'Sem categoria'); ?> </td>
                <td> <?php echo e($livro->created_at); ?> </td>
                <td>
                    <a class="btn btn-outline-secondary" href="<?php echo e(url('/livros/editar/' . $livro->id)); ?>">
                        Editar
                    </a>
                    <a class="btn btn-outline-secondary" href="<?php echo e(url('/livros/excluir/' . $livro->id)); ?>">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="5">Sem livros cadastrados.</td>
            </tr>
        <?php endif; ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\trabalho_master\resources\views/livros.blade.php ENDPATH**/ ?>