

<?php $__env->startSection('title', 'Admin - Videos'); ?>
<?php $__env->startSection('header', 'Videos'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h6 class="mb-0">All Videos</h6>
    <a href="<?php echo e(route('admin.videos.create')); ?>" class="btn btn-sm btn-primary">+ Add Video</a>
</div>

<div class="card admin-card">
    <div class="table-responsive">
        <table class="table table-sm table-striped table-modern mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Video ID</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($video->id); ?></td>
                    <td><code><?php echo e($video->video_id); ?></code></td>
                    <td><?php echo e($video->type); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.videos.edit', $video)); ?>" class="btn btn-xs btn-outline-primary">Edit</a>
                        <form action="<?php echo e(route('admin.videos.destroy', $video)); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-xs btn-outline-danger" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="4" class="text-center text-muted py-4">No videos. <a href="<?php echo e(route('admin.videos.create')); ?>">Create one</a></td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php if($videos->hasPages()): ?>
    <div class="mt-3"><?php echo e($videos->links()); ?></div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/admin/videos/index.blade.php ENDPATH**/ ?>