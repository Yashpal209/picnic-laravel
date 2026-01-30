<?php $__env->startSection('title', 'Admin - Products'); ?>
<?php $__env->startSection('header', 'Products'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h6 class="mb-0">All Products</h6>
    <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-sm btn-primary">+ Add Product</a>
</div>

<div class="card admin-card">
    <div class="table-responsive">
        <table class="table table-sm table-striped table-modern mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td>
                        <?php if($product->image): ?>
                            <img src="<?php echo e(asset('public/' . $product->image)); ?>" alt="" class="img-thumbnail" style="max-height:60px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->category?->name); ?></td>
                    <td><?php echo e($product->price ? '₹' . number_format($product->price, 2) : '-'); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.products.edit', $product)); ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                        <form action="<?php echo e(route('admin.products.destroy', $product)); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are You Sure !! Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="6" class="text-center text-muted py-4">No products. <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-sm btn-outline-danger">Create one</a></td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php if($products->hasPages()): ?>
    <div class="mt-3"><?php echo e($products->links()); ?></div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/admin/products/index.blade.php ENDPATH**/ ?>