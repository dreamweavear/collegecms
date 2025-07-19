            

    <meta charset="UTF-8">

    <!-- Font Awesome -->
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
-->
    <style>
    .hero-section {
        position: relative;
    }
    
    .carousel-slide {
        height: 75vh; /* Adjust height as needed */
        min-height: 500px;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        position: relative;
    }
    
    /* Add a dark overlay for better text visibility */
    .carousel-slide::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
    }
    
    .overlay-content {
        position: relative;
        z-index: 2;
        color: white;
    }
    
    /* Background images for each slide */
    .bg-1 {
        background-image: url('<?= base_url('assets/images/arun_computer.jpg') ?>');
    }
    
    .bg-2 {
        background-image: url('<?= base_url('assets/images/lab1.jpg') ?>');
    }
    
    .bg-3 {
        background-image: url('<?= base_url('assets/images/lab.jpg') ?>');
    }
    
    /* Custom button styles */
    .btn-primary-custom {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }
    
    .btn-outline-light {
        border-color: white;
        color: white;
    }
    
    .btn-outline-light:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }
</style>




    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
            .uniform-image {
            width: 410px;  /* फिक्स्ड चौड़ाई */
            height: 315px; /* फिक्स्ड ऊंचाई */
            object-fit: cover; /* इमेज को दिए गए आकार में फिट करेगा */
            border-radius: 8px; /* वैकल्पिक: कोनों को गोल करने के लिए */
                        }        


        .card-hover:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .bg-primary-custom {
            background-color: var(--primary-color);
        }
        
        .btn-primary-custom {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        .btn-primary-custom:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }
    </style>

<!--    
</head>
<body>

 -->   
    <!-- Header Include -->

    <!-- Or for MVC: -->
    <!-- @include('header') -->

    <!-- Main Content Container -->
    <main class="container-fluid p-0">




    <section class="hero-section">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" >
        <div class="carousel-inner">   
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-slide bg-1"> <!-- You can use either background-image or img tag -->
                    <div class="container text-center overlay-content">
                        <h1 class="display-3 fw-bold mb-4">Arun Computer & IT</h1>
                        <h4 class="display-6 fw-bold mb-4">पढ़ेगा रीवा ! बढ़ेगा रीवा !</h4>
                        
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <a href="#programs" class="btn btn-primary-custom btn-lg px-4 gap-3">Explore Programs</a>
                            <a href="#contact" class="btn btn-outline-light btn-lg px-4">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-slide bg-2">
                    <div class="container text-center overlay-content">
                        <h1 class="display-3 fw-bold mb-4">Cutting-Edge IT Training</h1>
                <h3 class="display-6 fw-bold mb-4">रोजगारोन्मुखी कम्प्यूटर प्रशिक्षण </h3>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="#programs" class="btn btn-primary-custom btn-lg px-4 gap-3">Our Courses</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg px-4">Get Info</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-slide bg-3">
                    <div class="container text-center overlay-content">
                        <h1 class="display-3 fw-bold mb-4">Technology Solutions</h1>
                        <h3 class="display-6 fw-bold mb-4">आकर्षक वेबसाइट डिजाइनिंग एवं स्कूल मनेजमेंट ऍप्लिकेशन्स 
                        </h3>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <a href="#services" class="btn btn-primary-custom btn-lg px-4 gap-3">Our Services</a>
                            <a href="#contact" class="btn btn-outline-light btn-lg px-4">Free Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


        <!-- Features Section -->
        <section class="py-2">
            <div class="container px-4 py-5">
                <h2 class="text-center mb-5">हमारा कालेज क्यों चुनें ?</h2>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="col d-flex align-items-start">
                        <div class="text-center w-100">
                            <i class="fas fa-laptop-code feature-icon"></i>
                            <h3>रोजगारोन्मुखी  पाठ्यक्रम एवं प्रशिक्षण </h3>
                            <p>शा. विश्वविद्यालय से मान्यताप्राप्त पाठ्यक्रम एवं गहन प्रायोगिक प्रशिक्षण जिससे आप शासकीय एवं गैर शासकीय पदों के लिए सर्वोत्तम प्रत्याशी बन जाते है। </p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="text-center w-100">
                            <i class="fas fa-chalkboard-teacher feature-icon"></i>
                            <h3>सर्वोत्तम फैकेल्टी एवं योग्य प्रशिक्षक </h3>
                            <p>वेब डिज़ाइन, सॉफ्टवेयर डेवलपमेन्ट से लेकट टैली, जॉबवर्क, डीटीपी तक के लिए अनुभवी प्रशिक्षको से प्रशिक्षण  .</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div class="text-center w-100">
                            <i class="fas fa-briefcase feature-icon"></i>
                            <h3>कैरियर  मार्गदर्शन</h3>
                            <p> हमारे 90% प्रशिक्षित छात्रों को  प्रशिक्षण अवधि में ही स्थानीय संस्थानों में नौकरी मिल जाती है। इसका श्रेय हमारे गहन प्रैक्टिकल ट्रेनिंग को जाता है।</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Programs Section -->
        <section id="programs" class="py-2 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Our Programs</h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <!-- Program Card 1 -->
                    <div class="col">
                        <div class="card h-100 card-hover">
                            <img src="<?= base_url('assets/images/lab2.jpg') ?>" class="card-img-top alt="MCU course">
                            <div class="card-body">
                                <h5 class="card-title">PGDCA / DCA</h5>
                                <p class="card-text"> यह पाठ्यक्रम  "माखनलाल विश्वविद्यालय", भोपाल से सम्बद्ध एवं मान्यता प्राप्त  है।  </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <a href="#" class="btn btn-primary-custom">Learn More</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Program Card 2 -->
                    <div class="col">
                        <div class="card h-100 card-hover">
                            <img src="<?= base_url('assets/images/student1.jpeg') ?>" class="card-img-top" alt="web designing">
                            <div class="card-body">
                                <h5 class="card-title">Web designing </h5>
                                <p class="card-text"> इस  पाठ्यक्रम में HTML, CSS, जावास्क्रिप्ट, वर्डप्रेस, वेब होस्टिंग सम्मिलित है। यह आपको एक पूर्ण वेबसाइट बनाने में सक्षम बनाता है। .</p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <a href="#" class="btn btn-primary-custom">Learn More</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Program Card 3 -->
                    <div class="col">
                        <div class="card h-100 card-hover">
                            <img src="<?= base_url('assets/images/library2.jpeg') ?>" class="card-img-top" alt="programming">
                            <div class="card-body">
                                <h5 class="card-title">Short Term</h5>
                                <p class="card-text">अल्पअवधि पाठ्यक्रम बेसिक, सीपीसीटी, टैली,  प्रोग्रामिंग- C, C++, Python, SQL, Php . ये आपको थोड़े समय में ही रोजगार योग्य बना  देते है। </p>
                            </div>
                            <div class="card-footer bg-white border-0">
                                <a href="#" class="btn btn-primary-custom">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section -->
        <section class="py-2">
            <div class="container">
                <h2 class="text-center mb-5">Latest News & Events</h2>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card card-hover">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/images/arun_computer.jpg') ?>" class="img-fluid rounded-start h-100" alt="Hackathon">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Admission Open for July 2025 Bach</h5>
                                        <p class="card-text">Flat 25% discount in fees for this session</p>
                                        <p class="card-text"><small class="text-muted">July2025</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="card card-hover">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/images/library1.jpeg') ?>" class="img-fluid rounded-start h-100" alt="Seminar">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"> New Bach for Short term courses</h5>
                                        <p class="card-text"> Admission starts for July bach for Tally, Basic, Tally courses</p>
                                        <p class="card-text"><small class="text-muted">July 2025 </small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-outline-primary-custom">View All News</a>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-5 bg-primary-custom text-white">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-6 mb-4">
                        <h3 class="display-4 fw-bold">20+</h3>
                        <p class="mb-0">Years of Excellence</p>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <h3 class="display-4 fw-bold">1000+</h3>
                        <p class="mb-0">Alumni Network</p>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <h3 class="display-4 fw-bold">90%</h3>
                        <p class="mb-0">Placement Rate</p>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <h3 class="display-4 fw-bold">20+</h3>
                        <p class="mb-0">Industry Partners</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact CTA -->
        <section id="contact" class="py-5">
            <div class="container text-center py-5">
                <h2 class="mb-4">क्या आप कम्प्यूटर जगत में अपनी एक उज्जवल यात्रा शुरू करने के लिए तैयार हैं?</h2>
                <p class="lead mb-5">हमारे पाठ्यक्रमों और प्रवेश प्रक्रिया के बारे में अधिक जानकारी के लिए हमसे संपर्क करें।</p>
                <a href="#" class="btn btn-primary-custom btn-lg px-4 me-2"><i class="fas fa-phone-alt me-2"></i>Call Us</a>
                <a href="#" class="btn btn-outline-secondary btn-lg px-4"><i class="fas fa-envelope me-2"></i>Email Us</a>
            </div>
        </section>


<!--   code  for pop up alart box  -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content animate__animated animate__bounceIn">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">अरुण कम्प्यूटर आपका स्वागत करता है !</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center py-4">
                <i class="fas fa-laptop-code fa-4x text-primary mb-3"></i>
                <p class="lead">इस तरह की वेबसाइट बनवाने के लिए हमसे संपर्क करें!</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary btn-lg px-4" data-bs-dismiss="modal">
                    <i class="fas fa-sign-in-alt me-2"></i>प्रवेश करें!
                </button>
            </div>
        </div>
    </div>
</div>

<!-- आवश्यक CSS और JS -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
-->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
    myModal.show();
});
</script>


<!-- code for spinner  -->
<!--

<div id="loadingSpinner" class="position-fixed top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center bg-white" style="z-index: 9999; display: none;">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('loadingSpinner').style.display = 'flex';
    setTimeout(function() {
        document.getElementById('loadingSpinner').style.display = 'none';
    }, 1000);
});
</script>

-->

       <!--  </main>          
             </div>
        -->
       </main>
    </div>
  </div>