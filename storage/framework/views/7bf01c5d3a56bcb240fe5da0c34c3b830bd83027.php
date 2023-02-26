<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
<i class="hamburger align-self-center"></i>
</a>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                        </a>
                        
                            <a style="padding: 5%" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                class="text-body">
                            <i class="me-4 icon-md" data-feather=""></i>
                                <div><?php echo e(__('Logout')); ?></div>
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </a>
                        </li>
                    </ul>

            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false" id="dropdownMenuButton">
                    EN
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="conta_icon" >
                            <a style="color: black; padding: 0.25rem 1.5rem;" class="conta_icon" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], false)); ?>">
                                <?php echo e($properties['native']); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <br><br>

        <ul class="card" style="list-style-type: none">
                <div class="card-body">
                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], false)); ?>">
                                    <?php echo e($properties['native']); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </ul>
            <br><br>



    </div>
</nav>
<?php /**PATH C:\Users\anis\Desktop\portailTemplaite\resources\views/include/navbar2.blade.php ENDPATH**/ ?>