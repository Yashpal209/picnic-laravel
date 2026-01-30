<?php $__env->startSection('title', 'Admin - Instagram Posts'); ?>
<?php $__env->startSection('header', 'Instagram Posts'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h6 class="mb-0">All Instagram Posts</h6>
    <a href="<?php echo e(route('admin.instagram-posts.create')); ?>" class="btn btn-sm btn-primary">+ Add Instagram Post</a>
</div>

<div class="card admin-card">
    <div class="table-responsive">
        <table class="table table-sm table-striped table-modern mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Post URL</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $instagramPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($post->id); ?></td>
                    <td>
                        <?php if($post->image): ?>
                            <img src="<?php echo e(asset('public/'.$post->image)); ?>" alt="" class="img-thumbnail" style="max-height:60px;">
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if($post->post_url): ?>
                            <a href="<?php echo e($post->post_url); ?>" target="_blank"><?php echo e(Str::limit($post->post_url, 50)); ?></a>
                        <?php else: ?>
                            <span class="text-muted">-</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?php echo e(route('admin.instagram-posts.edit', $post)); ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                        <form action="<?php echo e(route('admin.instagram-posts.destroy', $post)); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are You Sure Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="4" class="text-center text-muted py-4">No instagram posts. <a href="<?php echo e(route('admin.instagram-posts.create')); ?>" class="btn btn-sm btn-outline-danger">Create one</a></td></tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php if($instagramPosts->hasPages()): ?>
    <div class="mt-3"><?php echo e($instagramPosts->links()); ?></div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/admin/instagram_posts/index.blade.php ENDPATH**/ ?>