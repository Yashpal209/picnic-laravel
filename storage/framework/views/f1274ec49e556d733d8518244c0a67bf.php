<?php $__env->startSection('title', 'Admin - Dashboard'); ?>
<?php $__env->startSection('header', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="row g-3 mb-4">
    <div class="col-md-2">
        <div class="card admin-card metric-card">
            <div class="metric-dot bg-orange"></div>
            <div class="metric-label">Sliders</div>
            <div class="metric-value"><?php echo e($sliders_count); ?></div>
            <a href="<?php echo e(route('admin.sliders.index')); ?>" class="metric-link">Manage</a>
        </div>
    </div>
    <div class="col-md-2">
        <div class="card admin-card metric-card">
            <div class="metric-dot bg-pink"></div>
            <div class="metric-label">Categories</div>
            <div class="metric-value"><?php echo e($categories_count); ?></div>
            <a href="<?php echo e(route('admin.categories.index')); ?>" class="metric-link">Manage</a>
        </div>
    </div>
    <div class="col-md-2">
        <div class="card admin-card metric-card">
            <div class="metric-dot bg-blue"></div>
            <div class="metric-label">Products</div>
            <div class="metric-value"><?php echo e($products_count); ?></div>
            <a href="<?php echo e(route('admin.products.index')); ?>" class="metric-link">Manage</a>
        </div>
    </div>
    <div class="col-md-2">
        <div class="card admin-card metric-card">
            <div class="metric-dot bg-orange"></div>
            <div class="metric-label">Stores</div>
            <div class="metric-value"><?php echo e($stores_count); ?></div>
            <a href="<?php echo e(route('admin.stores.index')); ?>" class="metric-link">Manage</a>
        </div>
    </div>
    <div class="col-md-2">
        <div class="card admin-card metric-card">
            <div class="metric-dot bg-pink"></div>
            <div class="metric-label">Leads</div>
            <div class="metric-value"><?php echo e($leads_count); ?></div>
            <a href="<?php echo e(route('admin.leads.index')); ?>" class="metric-link">View all</a>
        </div>
    </div>
</div>

<div class="card admin-card">
    <div class="card-header bg-white">
        <h6 class="mb-0">Recent Leads</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-sm table-striped table-modern">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Source</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $recent_leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($lead->name); ?></td>
                        <td><?php echo e($lead->phone); ?></td>
                        <td><?php echo e($lead->email); ?></td>
                        <td><span class="badge bg-secondary"><?php echo e($lead->source); ?></span></td>
                        <td><?php echo e($lead->created_at?->format('M d, Y')); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr><td colspan="5" class="text-center text-muted">No leads yet.</td></tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>