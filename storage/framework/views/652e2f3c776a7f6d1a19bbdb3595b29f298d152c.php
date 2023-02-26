<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <p class="sidebar-brand" href="">
            <span class="align-middle"><?php echo e(__('messages.AdminKit')); ?></span>
        </p>

            
        <ul class="sidebar-nav">

            <li class="sidebar-item active">
                <a class="sidebar-link" href="index.html">
                        <span class="align-middle">
                            <?php echo e(__('messages.Dashboard')); ?>

                        </span>
                </a>
            </li>

            
        <li class="sidebar-header">
            <?php echo e(__('messages.Marques')); ?>

        </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo e(route('marques.indexMarque')); ?>">
                    <i class="align-middle" data-feather="folder-plus"></i>
                    <span class="align-middle">
                        <?php echo e(__('messages.Ajouter')); ?>

                    </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo e(route('marques.create')); ?>">
                    <i class="align-middle" data-feather="eye"></i>
                    <span class="align-middle">
                        <?php echo e(__('messages.Afficher')); ?>

                    </span>
                </a>
            </li>

            
            <li class="sidebar-header">
                <?php echo e(__('messages.Categories')); ?>

            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo e(route('categories.indexCategorie')); ?>">
                    <i class="align-middle" data-feather="plus-square"></i>
                    <span class="align-middle">
                        <?php echo e(__('messages.Ajouter')); ?>

                    </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo e(route('categories.create')); ?>">
                    <i class="align-middle" data-feather="eye"></i>
                    <span class="align-middle">
                        <?php echo e(__('messages.Afficher')); ?>

                    </span>
                </a>
            </li>

            
            <li class="sidebar-header">
                <?php echo e(__('messages.Produits')); ?>

            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo e(route('produits.indexProduit')); ?>">
                    <i class="align-middle" data-feather="plus"></i>
                    <span class="align-middle">
                        <?php echo e(__('messages.Ajouter')); ?>

                    </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="<?php echo e(route('produits.create')); ?>">
                    <i class="align-middle" data-feather="eye"></i>
                    <span class="align-middle">
                        <?php echo e(__('messages.Afficher')); ?>

                    </span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH C:\Users\anis\Desktop\portailTemplaite\resources\views/include/navbar1.blade.php ENDPATH**/ ?>