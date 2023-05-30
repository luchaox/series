

<?php $__env->startSection('cabecalho'); ?>
    Adicionar série
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>


    <form action="<?php echo e(route('series.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col col-8">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>

            <div class="col col-2">
                <label for="qtd_temporadas" class="form-label">Nº de temporadas</label>
                <input type="number" name="qtd_temporadas" id="qtd_temporadas" class="form-control">
            </div>

            <div class="col col-2">
                <label for="ep_por_temporada" class="form-label">Epº por temporada</label>
                <input type="number" name="ep_por_temporada" id="ep_por_temporada" class="form-control">
            </div>
    
            <button class="btn btn-primary">
                Adicionar
            </button>
        </div>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\UniALFA-DELL24\Documents\luchaox\2023\turma12-unialfa\series\resources\views/series/create.blade.php ENDPATH**/ ?>