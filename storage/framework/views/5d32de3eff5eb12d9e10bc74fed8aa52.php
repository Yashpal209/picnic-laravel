<?php $__env->startSection('title', $product->name . ' - PICNIC Ice Cream'); ?>

<?php $__env->startSection('content'); ?>

    <section class="bg ">
        <div class="container pt-2">
             <div class="row">
                <nav aria-label="breadcrumb" >
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('flavours')); ?>">Flavours</a></li>
                        <?php if($product->category): ?>
                            <li class="breadcrumb-item"><a
                                    href="<?php echo e(route('flavours', $product->category->slug)); ?>"><?php echo e($product->category->name); ?></a>
                            </li>
                        <?php endif; ?>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($product->name); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container pb-5">

            <div class="row g-5 align-items-center">

                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="text-center">
                        <?php if($product->image): ?>
                            <img src="<?php echo e(asset($product->image)); ?>" alt="<?php echo e($product->name); ?>"
                                class="img-hover-scale rounded-4 g"
                                style="max-width: 100%; height: 400px; object-fit: contain;">
                        <?php else: ?>
                            <img src="<?php echo e(asset('assets/images/placeholder.png')); ?>" alt="Product Image"
                                class="img-hover-scale rounded-4 "
                                style="max-width: 100%; height: 400px; object-fit: contain;">
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Product Details -->
                <div class="col-lg-6">
                    <div class="bg-white p-4 rounded-4 shadow-lg">
                        <!-- Breadcrumb -->


                        <!-- Product Title -->
                        <h1 class="text-brown-custom mb-3"><?php echo e($product->name); ?></h1>

                        <!-- Category Badge -->
                        <?php if($product->category): ?>
                            <span class="badge bg-primary mb-3"><?php echo e($product->category->name); ?></span>
                        <?php endif; ?>

                        <!-- Price -->
                        <?php if($product->price): ?>
                            <div class="mb-4">
                                <span class="fs-3 fw-bold text-pink">₹<?php echo e(number_format($product->price, 2)); ?></span>
                            </div>
                        <?php endif; ?>

                        <!-- Description -->
                        <div class="mb-4">
                            <h5 class="text-brown-custom mb-3">Description</h5>
                            <?php if($product->description): ?>
                                <p class="text-justify"><?php echo e($product->description); ?></p>
                            <?php else: ?>
                                <p class="text-justify">Experience the rich, creamy goodness of our <?php echo e($product->name); ?>

                                    ice cream. Made with the finest ingredients and traditional recipes passed down through
                                    generations, each scoop delivers pure delight and satisfaction.</p>
                            <?php endif; ?>
                            <?php if($product->category): ?>
                                <p class="text-justify">Part of our <?php echo e($product->category->name); ?> collection, this flavor
                                    captures the essence of traditional taste with modern freshness.</p>
                            <?php endif; ?>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="<?php echo e(route('order')); ?>" class="btn btn-sm btn-submit-pink btn-lg flex-fill">
                                <i class="fas fa-shopping-cart me-2"></i>Order Now
                            </a>
                            <a href="<?php echo e(route('flavours')); ?>" class="btn btn-sm btn-outline-primary btn-lg flex-fill">
                                <i class="fas fa-arrow-left me-2"></i>Back to Flavours
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Products Section -->
            <div class="mt-5">
                <h3 class="text-center text-brown-custom mb-4">You Might Also Like</h3>
                <div class="row justify-content-center">
                    <?php
                        $relatedProducts = \App\Models\Product::where('category_id', $product->category_id)
                            ->where('id', '!=', $product->id)
                            ->limit(3)
                            ->get();
                    ?>

                    <?php $__empty_1 = true; $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-md-4 mb-4">
                            <div class="bg-white p-3 rounded-4 shadow-lg text-center h-100">
                                <?php if($related->image): ?>
                                    <img src="<?php echo e(asset($related->image)); ?>" alt="<?php echo e($related->name); ?>"
                                        class="img-hover-scale rounded-3 mb-3"
                                        style="width: 100%; height: 200px; object-fit: contain;">
                                <?php endif; ?>
                                <h5 class="text-brown-custom mb-2"><?php echo e($related->name); ?></h5>
                                <?php if($related->price): ?>
                                    <p class="text-pink fw-bold mb-3">₹<?php echo e(number_format($related->price, 2)); ?></p>
                                <?php endif; ?>
                                <a href="<?php echo e(route('product.show', $related)); ?>" class="btn btn-outline-primary btn-sm">
                                    See Details
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-12 text-center">
                            <p class="text-muted">No related products available.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/pages/product-detail.blade.php ENDPATH**/ ?>