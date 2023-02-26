

<?php $__env->startSection('title'); ?>
    Ajouter Categorie
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <form action="<?php echo e(route('categories.store')); ?>" enctype='multipart/form-data' method='POST' id='commentForm'>
                        <?php echo csrf_field(); ?>

                        <div class="card-header">
                        <h2 class="card-title mb-0"><?php echo e(__('messages.Ajouter une Categorie')); ?></h2>
                            <div class="card-body">
                        <input type="text" class="form-control" placeholder="<?php echo e(__('messages.Nom de la categorie')); ?>" name='category_name' required>
                        <br><br><br>
                        <h5 class="card-title m-2"><?php echo e(__('messages.Discription')); ?></h5>
                        <input type="textarea" class="form-control" placeholder="<?php echo e(__('messages.Discription')); ?>" name='discription_c' required>
                        </div>
                        <h5 class="card-title m-2"><?php echo e(__('messages.Image de la categorie')); ?></h5>
                        <input type="file" class="form-control" name="image_c">
                    </div>
                        <div class="card-header">
                            <h5 class="card-title mb-0"><?php echo e(__('messages.Selectionner la marque de cette categorie')); ?></h5>
                                <div class="card-body">
                                <select name="marque_id" class="form-select mb-3">
                                    <?php $__currentLoopData = $marques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($marque->id); ?>"><?php echo e($marque->marke_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
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

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anis\Desktop\e-commerce\resources\views/admin/categories/ajouterCategories.blade.php ENDPATH**/ ?>