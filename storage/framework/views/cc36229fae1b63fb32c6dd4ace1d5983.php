

<?php $__env->startSection('title', 'Our Flavours'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <h1 class="h3 mb-4 text-center">Our Flavours</h1>
    
    <?php if($selectedCategory): ?>
        <p class="text-center text-muted">Showing: <strong><?php echo e($selectedCategory->name); ?></strong></p>
    <?php endif; ?>

    <div class="row g-3 mt-4">
        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-6 col-md-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <?php if($product->image): ?>
                            <img src="<?php echo e(asset($product->image)); ?>" alt="<?php echo e($product->name); ?>" class="img-fluid mb-2" style="max-height: 120px;">
                        <?php endif; ?>
                        <h6 class="mb-1"><?php echo e($product->name); ?></h6>
                        <?php if($product->price): ?>
                            <p class="text-primary fw-bold mb-0">₹<?php echo e(number_format($product->price, 2)); ?></p>
                        <?php endif; ?>
                        <small class="text-muted"><?php echo e($product->category?->name); ?></small>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-12">
                <p class="text-center text-muted">No products available in this category yet.</p>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/pages/flavours.blade.php ENDPATH**/ ?>