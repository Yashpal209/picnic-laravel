

<?php $__env->startSection('title', $page_title ?? 'PICNIC - ICE CREAM'); ?>
<?php $__env->startSection('meta_description',
    $meta_description ??
    'PICNIC Ice Creams offers delicious kulfi and ice creams made with
    100% pure cow milk.'); ?>

<?php $__env->startSection('content'); ?>

    <section class="slider position-relative overflow-hidden">
        <?php $__empty_1 = true; $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="slide <?php echo e($loop->first ? 'active' : ''); ?> slide-bg-<?php echo e(($index % 3) + 1); ?>">
                <div class="text-content">
                    <h1><?php echo nl2br(e($slide->title)); ?></h1>
                    <?php if($slide->subtitle): ?>
                        <p><?php echo e($slide->subtitle); ?></p>
                    <?php endif; ?>
                    <?php if($slide->cta_text && $slide->cta_url): ?>
                        <a href="<?php echo e($slide->cta_url); ?>"><?php echo e($slide->cta_text); ?></a>
                    <?php endif; ?>
                </div>
                <div class="image-container">
                    <img src="<?php echo e($slide->image); ?>" class="slider-image" alt="<?php echo e($slide->title); ?>">
                </div>
                <?php if($slide->cta_text): ?>
                    <div class="offer-badge"><?php echo e($slide->cta_text); ?></div>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="slide active slide-bg-1">
                <div class="text-content">
                    <h1>Strawberry <br> Dream</h1>
                    <p>Sweet, creamy, and full of love - the perfect scoop for every mood!</p>
                    <a href="#">Order Now</a>
                </div>
                <div class="image-container">
                    <img src="<?php echo e(asset('assets/images/ice-creem/7.png')); ?>" class="slider-image" alt="Strawberry Ice Cream">
                </div>
                <div class="offer-badge">Download Brochures</div>
            </div>
        <?php endif; ?>

        <div class="dots">
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="dot <?php echo e($loop->first ? 'active' : ''); ?>" data-index="<?php echo e($i); ?>"></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <div class="bg d-flex align-items-center justify-content-center p-4 brand-story">
        <section class="p-4 p-md-5 rounded-4 shadow-lg w-100 about-gradient-bg">
            <div class="row g-4 g-md-5 align-items-center">
                <div class="col-md-6">
                    <h1 class="fw-bold mb-4 text-brown-custom text-shadow-white">About Picnic Ice Creams: Our Pledge to
                        Purity</h1>
                    <p class="mb-4 lh-lg text-justify">
                        <strong>Picnic Ice Cream</strong> is proud to be a brand extension of Puresh Daily. This connection
                        means our commitment to quality starts right at the source: Because we are part of the Puresh Daily
                        family, we have direct access to and control over the finest, purest Cow Milk, guaranteeing the
                        integrity and quality of every single ingredient from farm to Kulfi.
                    </p>
                    <h2 class="fs-3 font-dancing text-brown-custom text-shadow-white">Our Uncompromising Quality:</h2>
                    <p class="fs-3 text-danger fw-semibold">Pure Milk, Pure Joy</p>
                </div>
                <div class="col-md-6">
                    <?php $heroVideo = $videos->first(); ?>
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/<?php echo e($heroVideo->video_id ?? 'oOoG0Uc51LQ'); ?>"
                            title="PICNIC Ice Creams" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="bg py-5 text-center ogs-section">
        <div class="row g-0">
            <h2 class="display-5 fw-bold mb-4">
                <span class="text-success">Our</span> Flavours
                <div class="section-divider"></div>
            </h2>
            <?php
                $bgClasses = ['og-card-pink', 'og-card-brown', 'og-card-tan', 'og-card-green'];
                $fallbackImages = [
                    asset('assets/images/ice-creem/1.png'),
                    asset('assets/images/ice-creem/3.png'),
                    asset('assets/images/ice-creem/5.png'),
                    asset('assets/images/ice-creem/7.png'),
                ];
            ?>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    class="col-12 col-sm-6 col-lg-3 position-relative d-flex flex-column justify-content-center align-items-center p-4 p-md-5 text-white <?php echo e($bgClasses[$idx % count($bgClasses)]); ?>">
                    <h3 class="display-6 fw-bold mb-4 text-shadow-dark"><?php echo e($category->name); ?></h3>
                    <img src="<?php echo e($category->thumbnail ?: $fallbackImages[$idx % count($fallbackImages)]); ?>"
                        alt="<?php echo e($category->name); ?>" class="rounded-circle mb-4 og-card-img-main">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <section class="insta-capture py-4">
        <div class="container-fluid">
            <h2 class="instagram-heading text-center py-4">
                <span class="instagram-text">Instagram</span> <span class="captures-text">Captures</span>
            </h2>
            <div class="row">
                <?php
                    $galleryImages = [
                        'assets/images/flavors/1.png',
                        'assets/images/flavors/2.png',
                        'assets/images/flavors/3.png',
                        'assets/images/flavors/4.png',
                        'assets/images/flavors/5.png',
                        'assets/images/flavors/6.png',
                        'assets/images/flavors/3.png',
                        'assets/images/flavors/2.png',
                    ];
                ?>
                <?php $__currentLoopData = $galleryImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 col-4 p-0 m-0">
                        <a href="https://www.instagram.com/picnic_icecreams/" target="_blank">
                            <img src="<?php echo e(asset($img)); ?>" alt="Instagram preview" class="img-fluid">
                        </a>
                        <div class="instagram-overlay">
                            <div class="d-flex gap-2">
                                <a href="https://www.instagram.com/picnic_icecreams/" target="_blank" class="instagram-icon"
                                    aria-label="Like">
                                    <i class="bi bi-heart-fill icon-like"></i>
                                </a>
                                <a href="https://www.instagram.com/picnic_icecreams/" target="_blank" class="instagram-icon"
                                    aria-label="Comment">
                                    <i class="bi bi-chat-dots-fill icon-comment"></i>
                                </a>
                                <a href="https://www.instagram.com/picnic_icecreams/" target="_blank" class="instagram-icon"
                                    aria-label="Share">
                                    <i class="bi bi-share-fill icon-share"></i>
                                </a>
                            </div>
                            <div class="instagram-overlay-text">View on Instagram</div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <section class="bg py-5" id="contact-business">
        <div class="container text-center px-3 px-md-5">
            <h2 class="section-title ">
                <span class="highlight">Contact For</span> Business with us
            </h2>
            <p class="fs-5 fw-semibold mb-4 contact-tagline">Let's scoop up some business! 🍦</p>

            <div class="row g-4 g-md-5 align-items-center">
                <!-- Left: Form -->
                <div class="col-md-6">
                    <form class="bg-white p-4 rounded-3 shadow-lg">
                        <div class="mb-3">
                            <label for="name" class="form-label text-start d-block fw-semibold text-dark">Name</label>
                            <input type="text" id="name" name="name" class="form-control border-2" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label text-start d-block fw-semibold text-dark">Contact
                                Number</label>
                            <input type="tel" id="phone" name="phone" class="form-control border-2" required>
                        </div>

                        <div class="mb-3">
                            <label for="address"
                                class="form-label text-start d-block fw-semibold text-dark">Location</label>
                            <textarea id="address" name="address" rows="3" class="form-control border-2" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="business_type"
                                class="form-label text-start d-block fw-semibold text-dark">Business Inquiry</label>
                            <select id="business_type" name="business_type" class="form-control border-2" required>
                                <option value="">Select</option>
                                <option value="distributor">Distributor</option>
                                <option value="franchise">Franchise</option>
                            </select>
                        </div>

                        <button type="submit" name="submit"
                            class="w-100 btn text-white py-2 rounded btn-submit-pink">Submit</button>
                    </form>
                </div>

                <!-- Right: Image -->
                <div class="col-md-6">
                    <img src="./assets/images/500x350.png" alt="Contact Distributor" class="w-100 h-auto rounded-3">
                </div>
            </div>
        </div>
    </section>

    <section
        class="order py-5 d-none d-md-flex container-fluid justify-content-center align-items-center header-nav-wrapper header-line">
        <div class="container-fluid">
            <div class="row">
                <div class="text-center">
                    <a href="<?php echo e(url('order')); ?>"
                        class="btn btn-submit-pink text-white px-3 px-md-4 py-2 rounded fw-semibold small">
                        Order Now
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\yashpal\picnic-laravel\resources\views/pages/home.blade.php ENDPATH**/ ?>