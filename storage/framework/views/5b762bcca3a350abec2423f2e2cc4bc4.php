<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="my-4">Lista de Usuários</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td>
                        <a href="<?php echo e(route('users.show', $user)); ?>" class="btn btn-info btn-sm">
                            <i class="bi bi-eye"></i> Visualizar
                        </a>
                        <a href="<?php echo e(route('users.edit', $user)); ?>" class="btn btn-primary btn-sm">
                            <i class="bi bi-pencil"></i> Editar
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        <?php echo e($users->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/isabelly/Atividade5_web2/resources/views/users/index.blade.php ENDPATH**/ ?>