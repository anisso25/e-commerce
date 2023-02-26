<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Afficher les Categories')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenu'); ?>
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            
                <div class="card flex-fill">
                    <div class="card-header">

                    <h5 class="card-title mb-0"><?php echo e(__('messages.Afficher les Categories')); ?></h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th class="d-none d-xl-table-cell"><?php echo e(__('messages.Num')); ?></th>
                            <th class="d-none d-xl-table-cell"><?php echo e(__('messages.Nom')); ?></th>
                            <th class="d-none d-xl-table-cell"><?php echo e(__('messages.Images')); ?></th>
                            <th class="d-none d-xl-table-cell"><?php echo e(__('messages.Marques')); ?></th>
                            <th class="d-none d-xl-table-cell"><?php echo e(__('messages.Status')); ?></th>
                            <th class="d-none d-md-table-cell"><?php echo e(__('messages.Action')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="d-none d-xl-table-cell"><?php echo e($categorie->id); ?></td>

                            <td class="d-none d-xl-table-cell"><?php echo e($categorie->category_name); ?></td>

                            <td class="d-none d-xl-table-cell"><img  style="size: width : 150px; height : 75px; display: block; " src="/storage/image_c/<?php echo e($categorie->image_c); ?>" alt="image" >
                            </td>

                            <td class="d-none d-xl-table-cell"><?php echo e($categorie->marques->marke_name); ?></td>

                            <td class="d-none d-xl-table-cell">
                                <?php if( $categorie->status == 1 ): ?>
                                    <label class="btn btn-success"> <?php echo e(__('messages.Activé')); ?> </label>
                                <?php else: ?>
                                    <label class="btn btn-danger"> <?php echo e(__('messages.Desactivé')); ?> </label>
                                <?php endif; ?>
                            </td>

                            <td>
                                <button class="btn btn-success" onclick="window.location ='<?php echo e(route('categorie.edit', $categorie->id)); ?>'"><?php echo e(__('messages.Edit')); ?></button>

                                <button class="btn btn-danger" onclick="window.location ='<?php echo e(route('categorie.destroy', $categorie->id)); ?>'"><?php echo e(__('messages.Supprimer')); ?></button>

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

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anis\Desktop\e-commerce\resources\views/admin/categories/afficherCategorie.blade.php ENDPATH**/ ?>