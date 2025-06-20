<?php $__env->startSection('content'); ?>

    <h1>Ajouter une tache</h1>


    <?php if($errors->any()): ?>

        <div class="alert alert-danger">

            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>

        </div>

    <?php endif; ?>

    <form action="<?php echo e(url('projet')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="form-group mb-3">
            <label for="tache">Tache :</label>
            <input type="text" class="form-control" id="tache" placeholder="Entrez une tache" name="tache">
        </div>

        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\HP\Projetgit\resources\views/projet/create.blade.php ENDPATH**/ ?>