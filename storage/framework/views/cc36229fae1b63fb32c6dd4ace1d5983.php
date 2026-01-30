<?php $__env->startSection('title', 'Our Flavours'); ?>

<?php $__env->startSection('content'); ?>
    <section class="products-section py-5">
        <div class="container">
            <h2 class="title text-center mb-5">Our Delicious Flavours</h2>

            
            <div class="text-center mb-4">
                <a href="<?php echo e(route('flavours')); ?>" class="all-flavours-simple <?php echo e(!$selectedCategory ? 'active' : ''); ?>">
                    <i class="fas fa-list-ul me-2"></i>
                    All Flavours
                    <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>

            <div class="products-layout row">
                
                <div class="categories col-md-4">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('flavours', $cat->slug)); ?>"
                            class="cat-item mb-3 <?php echo e($selectedCategory?->id === $cat->id ? 'active' : ''); ?>">
                            <img src="<?php echo e(asset('public/' . ($cat->thumbnail ?? 'public/assets/images/500x350.png'))); ?>"
                                alt="<?php echo e($cat->name); ?>">
                            <span><?php echo e($cat->name); ?></span>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                
                <div class="col-md-8">
                    <div class="row">
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="col-md-4 mb-4">
                                <div class="product-card text-center">
                                    <?php if($product->image): ?>
                                        <img src="<?php echo e(asset('public/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>">
                                    <?php endif; ?>

                                    <h4 class="mt-2"><?php echo e($product->name); ?></h4>

                                    <?php if($product->price): ?>
                                        <p class="price">₹<?php echo e(number_format($product->price, 2)); ?></p>
                                    <?php endif; ?>

                                    <a href="<?php echo e(route('product.show', $product)); ?>" class="btn btn-outline-primary btn-sm">
                                        See Details
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <p class="text-muted text-center">
                                No products available.
                            </p>
                        <?php endif; ?>
                    </div>

                    
                    <?php if($products->hasPages()): ?>
                        <div class="d-flex justify-content-center mt-4">
                            <?php echo e($products->links()); ?>

                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/pages/flavours.blade.php ENDPATH**/ ?>