<?php $__env->startSection('title', isset($video) ? 'Edit Video' : 'Add Video'); ?>
<?php $__env->startSection('header', isset($video) ? 'Edit Video' : 'Add Video'); ?>

<?php $__env->startSection('content'); ?>
<div class="card admin-card mx-auto" style="max-width: 700px;">
    <div class="card-body">
        <form action="<?php echo e(isset($video) ? route('admin.videos.update', $video) : route('admin.videos.store')); ?>" method="POST" class="admin-form">
            <?php echo csrf_field(); ?>
            <?php if(isset($video)): ?>
                <?php echo method_field('PUT'); ?>
            <?php endif; ?>

            <div class="mb-3">
                <label class="form-label">YouTube URL <span class="text-danger">*</span></label>
                <input type="url" name="url" class="form-control <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($video->url ?? old('url')); ?>" placeholder="https://youtu.be/VIDEO_ID or https://youtube.com/shorts/VIDEO_ID or https://www.youtube.com/watch?v=VIDEO_ID" required>
                <small class="text-muted">Paste the full YouTube share link, Shorts URL, or regular video URL</small>
                <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Type</label>
                <input type="text" name="type" class="form-control <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($video->type ?? 'youtube'); ?>" placeholder="youtube">
                <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?php echo e(route('admin.videos.index')); ?>" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/admin/videos/form.blade.php ENDPATH**/ ?>