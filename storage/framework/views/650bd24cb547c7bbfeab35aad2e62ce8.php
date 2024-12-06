<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">Histórico de Empréstimos</div>
    <div class="card-body">
        <?php if($user->books->isEmpty()): ?>
            <p>Este usuário não possui empréstimos registrados.</p>
        <?php else: ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Livro</th>
                        <th>Data de Empréstimo</th>
                        <th>Data de Devolução</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
    <?php $__currentLoopData = $user->books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>
                <a href="<?php echo e(route('books.show', $book->id)); ?>">
                    <?php echo e($book->title); ?>

                </a>
            </td>
            <td><?php echo e($book->pivot->borrowed_at); ?></td>
            <td><?php echo e($book->pivot->returned_at ?? 'Em Aberto'); ?></td>
            <td>
                <?php if(is_null($book->pivot->returned_at)): ?>
                    <form action="<?php echo e(route('borrowings.return', $book->pivot->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <button class="btn btn-warning btn-sm">Devolver</button>
                    </form>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>


            </table>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/isabelly/Atividade5_web2/resources/views/users/show.blade.php ENDPATH**/ ?>