<?php $__env->startSection('contenu'); ?>
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Image</th>
                            <th>Titre</th>
                            <th>Prix</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>

                    <?php if(Session::has('cart')): ?>
                    <tbody class="align-middle">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="align-middle">
                                <img src="/storage/image_p/<?php echo e($product['image_p']); ?>" alt="icon" style="width: 50px;">
                            </td>
                            <td class="align-middle">
                                <?php echo e($product['product_name']); ?>

                            </td>
                            <td class="align-middle">
                                $<?php echo e($product['prix']); ?>

                            </td>

                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">



                            <form action="<?php echo e(route('modifier_qty', $product['product_id'])); ?>" enctype='multipart/form-data' method='POST'>
                                <?php echo csrf_field(); ?>
                                <input type="number" name="quantity" class="form-control form-control-sm bg-secondary border-0 text-center" value="<?php echo e($product['qty']); ?>" min="1" ><br>
                                <input type="submit" value="Modifier" class="btn btn-success">
                            </form>



                                </div>
                            </td>
                            <td class="align-middle">
                               $<?php echo e($product['prix'] * $product['qty']); ?>

                            </td>
                            <td class="align-middle">
                                <button onclick="window.location ='<?php echo e(route('retirer_p', $product['product_id'])); ?>'" class="btn btn-sm btn-danger">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <?php endif; ?>

                </table>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">

                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$<?php echo e(Session::get('cart')->totalPrice); ?></h5>
                        </div>
                        <a href="<?php echo e(route('checkout')); ?>" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anis\Desktop\e-commerce\resources\views/client/cart.blade.php ENDPATH**/ ?>