            <main class="main-content p-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Contact Page</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <i class="bi bi-calendar"></i> This week
                        </button>
                    </div>
                </div>

<div class="container my-5">
    <h2 class="text-center mb-4">Contact Arun Computers</h2>
    
    <!-- Contact Cards Section -->
    <div class="row mb-4">
        <div class="col-md-6 col-lg-3 mb-3">
            <div class="card text-white bg-primary h-100">
                <div class="card-body text-center">
                    <i class="bi bi-phone fs-1 mb-3"></i>
                    <h3 class="card-title">Call Us</h3>
                    <p class="card-text fs-4">9201488597</p>
                    <a href="tel:9201488597" class="btn btn-light btn-sm">Call Now</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-3 mb-3">
            <div class="card text-white bg-success h-100">
                <div class="card-body text-center">
                    <i class="bi bi-phone fs-1 mb-3"></i>
                    <h3 class="card-title">Alternate Number</h3>
                    <p class="card-text fs-4">9926542408</p>
                    <a href="tel:9926542408" class="btn btn-light btn-sm">Call Now</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-3 mb-3">
            <div class="card text-white bg-warning h-100">
                <div class="card-body text-center">
                    <i class="bi bi-envelope fs-1 mb-3"></i>
                    <h3 class="card-title">Email Us</h3>
                    <p class="card-text">aruncomputersrewa@gmail.com</p>
                    <a href="mailto:aruncomputersrewa@gmail.com" class="btn btn-light btn-sm">Send Email</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-3 mb-3">
            <div class="card text-white bg-danger h-100">
                <div class="card-body text-center">
                    <i class="bi bi-facebook fs-1 mb-3"></i>
                    <h3 class="card-title">Connect With Us</h3>
                    <p class="card-text">Follow on Social Media</p>
                    <div class="d-flex justify-content-center gap-2">
                        <a href="#" class="text-white"><i class="bi bi-facebook fs-4"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-instagram fs-4"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-whatsapp fs-4"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map and Form Section -->

    <!-- map section -->

    <div class="row mb-4">
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="card-title mb-4">Our Location</h3>
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.2892722000174!2d81.30858907441865!3d24.544663857823156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39845a3b134347bb%3A0x71db18ba95a9d9b3!2sarun%20computer%20Rewa!5e0!3m2!1sen!2sin!4v1752206545549!5m2!1sen!2sin" 
                                style="border:0;" allowfullscreen="" loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="mt-3">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Allahabad Road, Urrhat, Rewa (M.P.) India - 486001</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- form section -->
        
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="card-title mb-4">Send Us a Message</h3>



                    <!-- Replace form_open() with manual HTML -->
        <!--          <form method="post" action="/contact/submit">    -->

            <form method="post" action="<?= site_url('contact/submit') ?>"> 

                            <?= csrf_field() ?>
                            <!-- Your form fields here -->
                    
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>


                    <!-- सफल/असफल संदेश दिखाने के लिए -->
                        <?php if(session()->get('success')): ?>
                            <div class="alert alert-success"><?= session()->get('success') ?></div>
                        <?php endif; ?>

                        <?php if(session()->get('error')): ?>
                            <div class="alert alert-danger"><?= session()->get('error') ?></div>
                        <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>

                
    </main>
    </div>
    </div>

