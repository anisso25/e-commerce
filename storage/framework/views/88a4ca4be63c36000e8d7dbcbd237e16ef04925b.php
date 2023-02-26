<?php $__env->startSection('contenu'); ?>
    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(asset('assets2/img/carousel-1.jpg')); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Informatiques</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#"><?php echo e(__('messages.shop now')); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(asset('assets2/img/carousel-2.jpg')); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Electroménagers</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#"><?php echo e(__('messages.shop now')); ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="<?php echo e(asset('assets2/img/carousel-3.jpg')); ?>" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">matériaux de construction</h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="#"><?php echo e(__('messages.shop now')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="<?php echo e(asset('assets2/img/offer-1.jpg')); ?>" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary"><?php echo e(__('messages.shop now')); ?></a>
                    </div>
                </div>
                <div class="product-offer mb-30" style="height: 200px;">
                    <img class="img-fluid" src="<?php echo e(asset('assets2/img/offer-2.jpg')); ?>" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary"><?php echo e(__('messages.shop now')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    
    <!-- Vendor Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3"><?php echo e(__('messages.Marques')); ?></span>
        </h2>
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <?php $__currentLoopData = $marques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(url('viewM/'.$marque->id)); ?>">
                        <div class="bg-light p-4">
                            <img src="/storage/icon/<?php echo e($marque->icon); ?>" alt="">
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

        
        <!-- Vendor Start -->
        <div class="container-fluid pt-5">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
                <span class="bg-secondary pr-3"><?php echo e(__('messages.CATEGORIES')); ?></span>
            </h2>
                <div class="col">
                    <div class="owl-carousel vendor-carousel">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(url('viewC/'.$categorie->id)); ?>">
                            <div class="bg-light p-3" style="padding: 5px; width: 350px; height: 180px; aligne: centre;">
                                <img style="width: 100px; height: 100px; align-content: center" class="img-fluid" src="/storage/image_c/<?php echo e($categorie->image_c); ?>" alt="">
                                <h6><?php echo e($categorie->category_name); ?></h6>
                            </div>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor End -->

        <!-- Products Start -->
        <div class="container-fluid pt-5 pb-3">
            <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3"><?php echo e(__('messages.Featured Products')); ?></span>
        </h2>
        <div class="row px-xl-5">

        <!-- Vendor Start -->
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(url('viewP/'.$produit->id)); ?>">
                    <div class="bg-light p-4">
                        <img style="height: 150px;" src="/storage/image_p/<?php echo e($produit->image_p); ?>" alt="icon">
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <!-- Vendor End -->

    <!-- Products End -->

    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="<?php echo e(asset('assets2/img/offer-1.jpg')); ?>" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"></h6>
                        <h3 class="text-white mb-3"><?php echo e(__('messages.Special Offer')); ?></h3>
                        <a href="" class="btn btn-primary"><?php echo e(__('messages.shop now')); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="<?php echo e(asset('assets2/img/offer-2.jpg')); ?>" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase"></h6>
                        <h3 class="text-white mb-3"><?php echo e(__('messages.Special Offer')); ?></h3>
                        <a href="" class="btn btn-primary"><?php echo e(__('messages.shop now')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3"><?php echo e(__('messages.Recent Products')); ?></span>
        </h2>
        <div class="row px-xl-5">
            <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" style="width: 500px; height: 200px;" src="/storage/image_p/<?php echo e($produit->image_p); ?>" alt="image">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="/panier/<?php echo e($produit->id); ?>">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="btn btn-outline-dark btn-square" href="<?php echo e(url('viewP/'.$produit->id)); ?>">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="<?php echo e(url('viewP/'.$produit->id)); ?>"><?php echo e($produit->product_name); ?></a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>$<?php echo e($produit->prix); ?></h5>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <h5><?php echo e($produit->categories->category_name); ?></h5>
                            </div>
                        <h5><?php echo e($produit->categories->marques->marke_name); ?></h5>
                        </div>
                    </div>
                </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <!-- Products End -->

    <!-- Vendor Start -->
    <div class="col">
        <div class="owl-carousel vendor-carousel">
            <?php $__currentLoopData = $marques; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marque): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(url('viewM/'.$marque->id)); ?>">
                <div class="bg-light p-4">
                    <img src="/storage/icon/<?php echo e($marque->icon); ?>" alt="">
                </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <!-- Vendor End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anis\Desktop\e-commerce\resources\views/client/home.blade.php ENDPATH**/ ?>