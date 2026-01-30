<?php $__env->startSection('title', isset($instagramPost) ? 'Edit Instagram Post' : 'Add Instagram Post'); ?>
<?php $__env->startSection('header', isset($instagramPost) ? 'Edit Instagram Post' : 'Add Instagram Post'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card admin-card mx-auto" style="max-width: 700px;">
        <div class="card-body">
            <form action="<?php echo e(isset($instagramPost) ? route('admin.instagram-posts.update', $instagramPost) : route('admin.instagram-posts.store')); ?>"
                method="POST" enctype="multipart/form-data" class="admin-form">
                <?php echo csrf_field(); ?>
                <?php if(isset($instagramPost)): ?>
                    <?php echo method_field('PUT'); ?>
                <?php endif; ?>

                <div class="mb-3">
                    <label class="form-label">Image <span class="text-danger">*</span></label>
                    <input type="file" name="image" id="imageInput"
                        class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" accept="image/*"
                        onchange="previewImage(event)" <?php if(!isset($instagramPost)): ?> required <?php endif; ?>>
                    <small class="text-muted">Upload instagram post image</small>
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div id="imagePreview" class="mt-2" <?php if(empty($instagramPost?->image)): ?> style="display:none;" <?php endif; ?>>
                        <img id="previewImg" src="<?php echo e(asset('public/'.$instagramPost?->image ?? '')); ?>" alt="Preview"
                            class="img-thumbnail preview-thumb">
                        <p class="small text-muted mt-1">
                            <?php echo e(!empty($instagramPost?->image) ? 'Current: ' . basename($instagramPost->image) : ''); ?></p>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Instagram Post URL</label>
                    <input type="url" name="post_url" class="form-control <?php $__errorArgs = ['post_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        value="<?php echo e($instagramPost->post_url ?? old('post_url')); ?>" placeholder="https://www.instagram.com/p/...">
                    <small class="text-muted">Optional: Link to the actual Instagram post</small>
                    <?php $__errorArgs = ['post_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-3">
                    <label class="form-label">Embed HTML</label>
                    <textarea name="embed_html" rows="4" class="form-control <?php $__errorArgs = ['embed_html'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        placeholder="Optional: Instagram embed code"><?php echo e($instagramPost->embed_html ?? old('embed_html')); ?></textarea>
                    <small class="text-muted">Optional: Instagram embed HTML code</small>
                    <?php $__errorArgs = ['embed_html'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="<?php echo e(route('admin.instagram-posts.index')); ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('imagePreview');
            const img = document.getElementById('previewImg');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    img.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/admin/instagram_posts/form.blade.php ENDPATH**/ ?>