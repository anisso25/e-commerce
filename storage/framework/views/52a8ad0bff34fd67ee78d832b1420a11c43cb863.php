

<?php $__env->startSection('title'); ?>
    Ajouter Marque
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <form action="<?php echo e(route('marques.store')); ?>" enctype='multipart/form-data' method='POST' id='commentForm'>
                        <?php echo csrf_field(); ?>
                        <div class="card-header">
                        <h2 class="card-title mb-0"><?php echo e(__('messages.Ajouter une marque')); ?></h2>
                            <div class="card-body">
                                <input type="text" class="form-control" placeholder="<?php echo e(__('messages.Ajouter une marque')); ?>" name='marke_name' required>
                                <br><br><br>
                        <h5 class="card-title m-2"><?php echo e(__('messages.Icon de la marque')); ?></h5>
                            <input type="file" class="form-control" name="icon">
                        </div>
                        <button class="btn btn-secondary" value=""><?php echo e(__('messages.Enregistrer')); ?></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anis\Desktop\e-commerce\resources\views/admin/marques/ajouterMarque.blade.php ENDPATH**/ ?>