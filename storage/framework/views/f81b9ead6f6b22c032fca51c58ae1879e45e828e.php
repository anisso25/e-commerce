<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Afficher les produits')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenu'); ?>
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            
                <div class="card flex-fill">
                    <div class="card-header">
                    <h5 class="card-title mb-0"> <?php echo e(__('messages.Afficher les produits')); ?>

                    </h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <td class="d-none d-xl-table-cell"><?php echo e(__('messages.Num')); ?></th>
                            <th class="d-none d-xl-table-cell"><?php echo e(__('messages.Nom')); ?></th>
                            <th class="d-none d-xl-table-cell"><?php echo e(__('messages.prix')); ?></th>
                            <th class="d-none d-xl-table-cell"><?php echo e(__('messages.Status')); ?></th>
                            <th class="d-none d-xl-table-cell"><?php echo e(__('messages.Images')); ?></th>
                            <th class="d-none d-xl-table-cell"><?php echo e(__('messages.Categories')); ?></th>
                            
                            <th class="d-none d-md-table-cell"><?php echo e(__('messages.Action')); ?></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="d-none d-xl-table-cell"><?php echo e($produit->id); ?></td>
                            <td class="d-none d-xl-table-cell"><?php echo e($produit->product_name); ?></td>
                            <td class="d-none d-xl-table-cell"><?php echo e($produit->prix); ?> $</td>
                            <td class="d-none d-xl-table-cell">
                            <?php if( $produit->status == 1 ): ?>
                                <label class="btn btn-success"> <?php echo e(__('messages.Activé')); ?> </label>
                            <?php else: ?>
                                <label class="btn btn-danger"> <?php echo e(__('messages.Desactivé')); ?> </label>
                            <?php endif; ?>
                            </td>
                            <td class="d-none d-xl-table-cell"><img  style="size: width : 150px; height : 75px; display: block; " src="/storage/image_p/<?php echo e($produit->image_p); ?>" alt="" >
                            </td>

                            

                            <td class="d-none d-xl-table-cell"><?php echo e($produit->categories->category_name); ?></td>

                        <td>
                            <button class="btn btn-success" onclick="window.location ='<?php echo e(route('produit.edit', $produit->id)); ?>'"><?php echo e(__('messages.Edit')); ?></button>

                            <button class="btn btn-danger" onclick="window.location ='<?php echo e(route('produit.destroy', $produit->id)); ?>'"><?php echo e(__('messages.Supprimer')); ?></button>
                        </td>



                        </tr>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anis\Desktop\e-commerce\resources\views/admin/produits/afficherProduit.blade.php ENDPATH**/ ?>