

<?php $__env->startSection('title', 'Admin - Sliders'); ?>
<?php $__env->startSection('header', 'Sliders'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h6 class="mb-0">All Sliders</h6>
    <a href="<?php echo e(route('admin.sliders.create')); ?>" class="btn btn-sm btn-primary">+ Add Slider</a>
</div>

<div class="card admin-card">
    <div class="table-responsive">
        <table class="table table-sm table-striped table-modern mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>CTA</th>
                    <th>Order</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($slider->id); ?></td>
                    <td>
                        <?php if($slider->image): ?>
                            <img src="<?php echo e(asset($slider->image)); ?>" alt="" class="img-thumbnail" style="max-height:60px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($slider->title); ?></td>
                    <td><?php echo e(Str::limit($slider->subtitle, 30)); ?></td>
                    <td><?php echo e($slider->cta_text); ?></td>
                    <td><?php echo e($slider->sort_order); ?></td>
                    <td><span class="badge <?php echo e($slider->active ? 'bg-success' : 'bg-secondary'); ?>"><?php echo e($slider->active ? 'Yes' : 'No'); ?></span></td>
                    <td>
                        <a href="<?php echo e(route('admin.sliders.edit', $slider)); ?>" class="btn btn-xs btn-outline-primary">Edit</a>
                        <form action="<?php echo e(route('admin.sliders.destroy', $slider)); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-xs btn-outline-danger" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="7" class="text-center text-muted py-4">No sliders. <a href="<?php echo e(route('admin.sliders.create')); ?>">Create one</a></td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php if($sliders->hasPages()): ?>
    <div class="mt-3"><?php echo e($sliders->links()); ?></div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/admin/sliders/index.blade.php ENDPATH**/ ?>