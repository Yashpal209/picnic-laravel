<?php $__env->startSection('title', 'Order Now - PICNIC Ice Cream'); ?>

<?php $__env->startSection('content'); ?>
    <div class=" bg order-section py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pb-4">
                        <img src="<?php echo e(asset('assets/images/picnic-removebg-preview.png')); ?>" alt="Picnic Logo" class="logo">
                    </div>
                </div>
                <div class="col-md-12">
                     <div class="row justify-content-center">
                    <div class="col-md-3 py-2">
                        <a href="https://www.swiggy.com/" target="_blank" class="text-decoration-none">
                            <img src="<?php echo e(asset('assets/images/company/swiggy.png')); ?>" alt="Swiggy"
                                class="img-fluid rounded-3 shadow-sm">
                        </a>
                        <a href="https://www.swiggy.com/" target="_blank"
                            class="btn btn-submit-pink text-white mt-2 px-3 px-md-4 py-2 rounded fw-semibold small d-block">
                            Order Now
                        </a>
                    </div>
                    <div class="col-md-3 py-2">
                        <a href="https://www.zomato.com/" target="_blank" class="text-decoration-none">
                            <img src="<?php echo e(asset('assets/images/company/zomato.png')); ?>" alt="Zomato"
                                class="img-fluid rounded-3 shadow-sm">
                        </a>
                        <a href="https://www.zomato.com/" target="_blank"
                            class="btn btn-submit-pink text-white mt-2 px-3 px-md-4 py-2 rounded fw-semibold small d-block">
                            Order Now
                        </a>
                    </div>
                    <div class="col-md-3 py-2">
                        <a href="https://blinkit.com/" target="_blank" class="text-decoration-none">
                            <img src="<?php echo e(asset('assets/images/company/blinkit.png')); ?>" alt="Blinkit"
                                class="img-fluid rounded-3 shadow-sm">
                        </a>
                        <a href="https://blinkit.com/" target="_blank"
                            class="btn btn-submit-pink text-white mt-2 px-3 px-md-4 py-2 rounded fw-semibold small d-block">
                            Order Now
                        </a>
                    </div>
                    <div class="col-md-3 py-2">
                        <a href="https://apnamart.in/" target="_blank" class="text-decoration-none">
                            <img src="<?php echo e(asset('assets/images/company/apnamart.png')); ?>" alt="ApnaMart"
                                class="img-fluid rounded-3 shadow-sm">
                        </a>
                        <a href="https://apnamart.in/" target="_blank"
                            class="btn btn-submit-pink text-white mt-2 px-3 px-md-4 py-2 rounded fw-semibold small d-block">
                            Order Now
                        </a>
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/pages/order.blade.php ENDPATH**/ ?>