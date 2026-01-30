<?php $__env->startSection('title', 'Media - PICNIC - ICE CREAM'); ?>

<?php $__env->startSection('content'); ?>
<div class="scrolling-banner py-3 fs-4 fw-bold text-uppercase">
    <div class="scrolling-text">
        <span>✦ Exclusively at Picnic ice Creams</span>
        <span>✦ Exclusively at Picnic ice Creams</span>
        <span>✦ Exclusively at Picnic ice Creams</span>
        <span>✦ Exclusively at Picnic ice Creams</span>
        <span>✦ Exclusively at Picnic ice Creams</span>
        <span>✦ Exclusively at Picnic ice Creams</span>
        <span>✦ Exclusively at Picnic ice Creams</span>
        <span>✦ Exclusively at Picnic ice Creams</span>
    </div>
</div>



<section class="gallery-sec">
    <div class="container">
        <h2 class="instagram-heading text-shadow-dark text-center py-4">
            <span class="instagram-text ">Our</span> <span class="captures-text">Gallery</span>
        </h2>
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $instagram_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-4 pt-3">
                    <div class="text-1 text-center p-2">
                        <div class="text">
                            <img src="<?php echo e(asset('public/' . ($post->image ?? 'public/assets/images/500x350.png'))); ?>" alt="Instagram Gallery" class="img-fluid">
                        </div>
                        <p class="text-center">Instagram Post</p>
                        <div class="d-grid">
                            <a href="<?php echo e($post->post_url ?: 'https://www.instagram.com/picnic_icecreams/'); ?>" target="_blank" class="btn btn-danger">See More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-12 text-center py-4">
                    <p class="text-muted">No gallery items available.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="youtube-video py-5">
    <div class="container-fluid">
        <h2 class="display-5 fw-bold text-shadow-grey text-center pb-2">
            Watch Our <span class="text-danger">Videos</span>
        </h2>
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-3">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/<?php echo e($video->video_id); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-12 text-center py-4">
                    <p class="text-muted">No videos available.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="bg py-5 px-3 px-md-5">
    <div class="container text-center">
        <h2 class="h1 fw-bold text-shadow-dark mb-4">
            <span class="text-success">Get In Touch</span>
        </h2>
        <p class="fs-6 mb-5">Got questions? We'd love to hear from you!</p>

        <div class="row g-4 justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card rounded-4 shadow-lg p-4 h-100">
                    <div class="text-center">
                        <i class="bi bi-telephone-fill text-danger fs-1 mb-3"></i>
                        <h5 class="fw-bold mb-3">Phone</h5>
                        <p class="text-muted mb-3">Call us directly</p>
                        <a href="tel:+919031007352" class="btn btn-submit-pink blink text-white px-4 py-2 rounded fw-semibold">
                            +91-90310-07352
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card rounded-4 shadow-lg p-4 h-100">
                    <div class="text-center">
                        <i class="bi bi-envelope-fill text-danger fs-1 mb-3"></i>
                        <h5 class="fw-bold mb-3">Email</h5>
                        <p class="text-muted mb-3">Send us a message</p>
                        <a href="mailto:picnicicecreams@gmail.com" class="btn btn-submit-pink blink text-white px-4 py-2 rounded fw-semibold">
                            Email Us
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card rounded-4 shadow-lg p-4 h-100">
                    <div class="text-center">
                        <i class="bi bi-geo-alt-fill text-danger fs-1 mb-3"></i>
                        <h5 class="fw-bold mb-3">Visit Us</h5>
                        <p class="text-muted mb-3">Find our locations</p>
                        <a href="<?php echo e(route('store.locator')); ?>" class="btn btn-submit-pink blink text-white px-4 py-2 rounded fw-semibold">
                            Store Locator
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 brand-contact">
                    <div class="card rounded-4 shadow-lg p-4">
                        <h4 class="fw-bold mb-3 text-center">Contact Information</h4>
                        <div class="row text-start">
                            <div class="col-md-6 mb-3">
                                <p class="mb-2">
                                    <i class="bi bi-geo-alt-fill text-danger me-2"></i>
                                    <span class="fw-bold">Main Office:</span>
                                </p>
                                <p class="ms-4 small">Ground Floor, Laxmi Tower, Kokar, Ranchi</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <p class="mb-2">
                                    <i class="bi bi-building text-danger me-2"></i>
                                    <span class="fw-bold">Factory Address:</span>
                                </p>
                                <p class="ms-4 small">Dahu, Ormanjhi, Ranchi</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <p class="mb-2">
                                    <i class="bi bi-telephone-fill text-danger me-2"></i>
                                    <span class="fw-bold">Phone:</span>
                                </p>
                                <a href="tel:+91-90310-07352">
                                    <p class="ms-4 small">+91-90310-07352</p>
                                </a>
                            </div>
                            <div class="col-md-6 mb-3">
                                <p class="mb-2">
                                    <i class="bi bi-envelope-fill text-danger me-2"></i>
                                    <span class="fw-bold">Email:</span>
                                </p>
                                <a href="mailto:picnicicecreams@gmail.com">
                                    <p class="ms-4 small">picnicicecreams@gmail.com</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="<?php echo e(route('contact')); ?>" class="btn btn-submit-pink blink text-white px-5 py-3 rounded fw-semibold">
                                <i class="bi bi-arrow-right-circle-fill me-2"></i>View Full Contact Page
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/pages/media.blade.php ENDPATH**/ ?>