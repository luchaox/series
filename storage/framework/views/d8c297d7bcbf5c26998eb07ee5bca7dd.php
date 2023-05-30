

<?php $__env->startSection('cabecalho'); ?>
    Adicionar série
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
    <form action="<?php echo e(route('series.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <button class="btn btn-primary">
            Adicionar
        </button>
        
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\UniALFA\Documents\series\resources\views/series/create.blade.php ENDPATH**/ ?>