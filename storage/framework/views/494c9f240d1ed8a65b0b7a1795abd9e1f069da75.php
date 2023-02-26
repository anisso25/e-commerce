<?php $__env->startSection('title'); ?>
    Modifier Produit
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <form action="<?php echo e(route('produits.update')); ?>" enctype='multipart/form-data' method='POST' id='commentForm'>
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>

                        
                        <?php echo e(Form::hidden('id', $produits->id)); ?>


                        <div class="card-header">
                        <h2 class="card-title mb-0"><?php echo e(__('messages.Modifier un Produit')); ?></h2>
                            <div class="card-body">

                        

                        <input type="text" value="<?php echo e($produits->product_name); ?>" class="form-control" placeholder="<?php echo e(__('messages.Nom du produit')); ?>" name='product_name' required>

                        <h5 class="card-title m-2">Modifier le titre du produit</h5>
                        <?php echo e(Form::text('product_title', $produits->product_title, ['class' => 'form-control'])); ?>


                        <h5 class="card-title m-2"><?php echo e(__('messages.prix')); ?></h5>
                        <?php echo e(Form::text('prix', $produits->prix, ['class' => 'form-control'])); ?>


                        </div>
                        <h5 class="card-title m-2"><?php echo e(__('messages.Image du produit')); ?></h5>
                        <input type="file" class="form-control" name="image_p">

                        <div class="card-header">
                        <h5 class="card-title m-2"><?php echo e(__('messages.Discription')); ?></h5>
                        <?php echo e(Form::text('discription_p', $produits->discription_p, ['class' => 'form-control'])); ?>


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

                            <h5 class="card-title m-2">Modifier la fiche technique du produit</h5>
                            <input type="file" class="form-control" name="fiche_t">

                            <div class="card-header">

                        <button class="btn btn-secondary" value=""><?php echo e(__('messages.Modifier')); ?></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anis\Desktop\portailTemplaite\resources\views/admin/produits/editerProduit.blade.php ENDPATH**/ ?>