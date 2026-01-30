<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .auth-hero {
        background: radial-gradient(circle at 20% 20%, #ffe8f0, #fff6e6 40%, #ffffff 70%);
        min-height: calc(100vh - 120px);
    }
    .auth-card {
        border: none;
        border-radius: 18px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.1);
        overflow: hidden;
    }
    .auth-illustration {
        background: linear-gradient(140deg, #ff9ed1 0%, #ffc672 100%);
    }
    .auth-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 12px;
        border-radius: 999px;
        background: rgba(255,255,255,0.25);
        color: #fff;
        font-weight: 600;
        letter-spacing: 0.02em;
        font-size: 12px;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<section class="auth-hero d-flex align-items-center py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9">
                <div class="card auth-card">
                    <div class="row g-0">
                        <div class="col-md-5 auth-illustration text-white p-4 d-flex flex-column justify-content-between">
                            <div>
                                <div class="auth-badge mb-3"><i class="bi bi-shield-lock"></i> Secure Access</div>
                                <h3 class="fw-bold">Welcome back!</h3>
                                <p class="mb-4">Log in to manage sliders, products, stores, and more for PICNIC Ice Creams.</p>
                            </div>
                            <div class="text-center">
                                <img src="<?php echo e(asset('public/assets/images/ice-creem/7.png')); ?>" alt="PICNIC" class="img-fluid" style="max-height: 180px;">
                            </div>
                        </div>
                        <div class="col-md-7 p-4 p-md-5 bg-white">
                            <h4 class="fw-bold mb-1">Sign in</h4>
                            <p class="text-muted mb-4">Use your admin credentials</p>

                            <?php if(session('status')): ?>
                                <div class="alert alert-success"><?php echo e(session('status')); ?></div>
                            <?php endif; ?>

                            <form method="POST" action="<?php echo e(route('login')); ?>" novalidate>
                                <?php echo csrf_field(); ?>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus autocomplete="username" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember">
                                        <label class="form-check-label" for="remember">Remember me</label>
                                    </div>
                                    <?php if(Route::has('password.request')): ?>
                                        <a class="small text-decoration-none" href="<?php echo e(route('password.request')); ?>">Forgot password?</a>
                                    <?php endif; ?>
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-lg">Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>