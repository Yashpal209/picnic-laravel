

<?php $__env->startSection('title', 'Admin - Leads'); ?>
<?php $__env->startSection('header', 'All Leads'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card admin-card">
        <div class="card-header bg-white">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-0">Form Submissions</h6>
                <a href="#" class="btn btn-sm btn-outline-secondary disabled">Export CSV (todo)</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-striped table-modern mb-0 ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Subject</th>
                            <th>Source</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($lead->id); ?></td>
                                <td><?php echo e($lead->name); ?></td>
                                <td><?php echo e($lead->phone); ?></td>
                                <td><?php echo e($lead->email); ?></td>
                                <td><?php echo e($lead->business_type); ?></td>
                                <td><?php echo e($lead->subject); ?></td>
                                <td><span class="badge bg-secondary"><?php echo e($lead->source); ?></span></td>
                                <td><span class="badge bg-info"><?php echo e($lead->status); ?></span></td>
                                <td><?php echo e($lead->created_at?->format('M d, Y H:i')); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="9" class="text-center text-muted py-4">No leads yet.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/admin/leads/index.blade.php ENDPATH**/ ?>