<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Ajouter Produit')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <form action="<?php echo e(route('produits.store')); ?>" enctype='multipart/form-data' method='POST' id='commentForm'>
                        <?php echo csrf_field(); ?>
                        <div class="card-header">
                        <h2 class="card-title mb-0"><?php echo e(__('messages.Ajouter Produit')); ?></h2>
                        <div class="card-body">
                            
                        <input type="text" class="form-control" placeholder="<?php echo e(__('messages.Nom du produit')); ?>" name='product_name' required>

                        <h5 class="card-title m-2">Titre du produit</h5>
                        <input type="text" class="form-control" placeholder="Titre du produit" name='product_title' required>

                        <h5 class="card-title m-2"><?php echo e(__('messages.prix')); ?></h5>
                        <input type="text" class="form-control" placeholder="<?php echo e(__('messages.prix du produit')); ?>" name='prix' required>

                        </div>
                        <h5 class="card-title m-2"><?php echo e(__('messages.Image du produit')); ?></h5>
                        <input type="file" class="form-control" name="image_p">
                        <div class="card-header">
                        <h5 class="card-title m-2"><?php echo e(__('messages.Discription')); ?></h5>
                        <input type="text" class="form-control" placeholder="<?php echo e(__('messages.Discription')); ?>" name='discription_p' required>

                        </div>
                            <div class="card-body">
                                <h5 class="card-title mb-0"><?php echo e(__('messages.Selectionner la marque du produit')); ?></h5>
                                    <select name="marque_id" class="form-select mb-3">
                                        <?php $__currentLoopData = $marques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($marque->id); ?>"><?php echo e($marque->marke_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title mb-0"><?php echo e(__('messages.Selectionner la categorie du produit')); ?></h5>
                                    <select name="category_id" class="form-select mb-3">
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($categorie->id); ?>"><?php echo e($categorie->category_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                            </div>

                            <h5 class="card-title m-2">Ajouter la fiche technique du produit</h5>
                            <input type="file" class="form-control" name="fiche_t">
                            <div class="card-header">

                            <button class="btn btn-secondary" value=""><?php echo e(__('messages.Enregistrer')); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anis\Desktop\e-commerce\resources\views/admin/produits/ajouterProduit.blade.php ENDPATH**/ ?>