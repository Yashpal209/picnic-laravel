<?php $__env->startSection('title', 'Admin - Categories'); ?>
<?php $__env->startSection('header', 'Categories'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h6 class="mb-0">All Categories</h6>
        <a href="<?php echo e(route('admin.categories.create')); ?>" class="btn btn-sm btn-primary">+ Add Category</a>
    </div>

    <div class="card admin-card">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-modern mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Thumb</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Products</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($cat->id); ?></td>
                            <td>
                                <?php if($cat->thumbnail): ?>
                                    <img src="<?php echo e($cat->thumbnail); ?>" alt="" class="img-thumbnail"
                                        style="max-height:50px;">
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($cat->name); ?></td>
                            <td><code><?php echo e($cat->slug); ?></code></td>
                            <td><?php echo e($cat->products()->count()); ?></td>
                            <td>
                                <a href="<?php echo e(route('admin.categories.edit', $cat)); ?>"
                                    class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="<?php echo e(route('admin.categories.destroy', $cat)); ?>" method="POST"
                                    style="display: inline;">
                                    <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Delete?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4" >No categories. <a
                                    href="<?php echo e(route('admin.categories.create')); ?> " class="btn btn-sm btn-outline-danger">Create one</a></td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>