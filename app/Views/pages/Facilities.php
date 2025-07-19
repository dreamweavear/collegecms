            <main class="main-content p-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Facilities Page</h1>
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

                    <div class="row mb-4">
                   
                      

                       <!-- app/Views/facilities/index.php -->
<div class="container py-4">
    <!-- हेडिंग सेक्शन -->
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary mb-3">हमारी सुविधाएँ</h1>
        <p class="lead">अरुण कम्प्यूटर में उपलब्ध उत्कृष्ट सुविधाएँ</p>
        <div class="divider bg-primary mx-auto" style="width: 80px; height: 3px;"></div>
    </div>

    <!-- मुख्य सुविधाएँ -->
    <div class="row g-4 mb-5">
        <!-- सुविधा 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="icon-box bg-light-primary rounded-circle mx-auto mb-4">
                        <i class="fas fa-desktop fa-2x text-primary"></i>
                    </div>
                    <h3 class="h5">आधुनिक कंप्यूटर लैब</h3>
                    <p class="mb-0">i5/i7 प्रोसेसर वाले 30+ कंप्यूटर, LED प्रोजेक्टर और हाई-स्पीड इंटरनेट</p>
                </div>
            </div>
        </div>

        <!-- सुविधा 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="icon-box bg-light-primary rounded-circle mx-auto mb-4">
                        <i class="fas fa-chalkboard-teacher fa-2x text-primary"></i>
                    </div>
                    <h3 class="h5">अनुभवी प्रशिक्षक</h3>
                    <p class="mb-0">10+ वर्षों के अनुभव वाले प्रशिक्षक, व्यक्तिगत मार्गदर्शन</p>
                </div>
            </div>
        </div>

        <!-- सुविधा 3 -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="icon-box bg-light-primary rounded-circle mx-auto mb-4">
                        <i class="fas fa-book fa-2x text-primary"></i>
                    </div>
                    <h3 class="h5">समृद्ध पुस्तकालय</h3>
                    <p class="mb-0">500+ कंप्यूटर और IT से संबंधित पुस्तकों का संग्रह</p>
                </div>
            </div>
        </div>
    </div>

    <!-- अतिरिक्त सुविधाएँ -->
    <div class="bg-light p-4 rounded mb-5">
        <h2 class="h4 text-center mb-4">अन्य सुविधाएँ</h2>
        <div class="row g-3">
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-wifi text-primary me-2"></i>
                    <span>हाई-स्पीड WiFi</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-snowflake text-primary me-2"></i>
                    <span>वातानुकूलित कक्ष</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-print text-primary me-2"></i>
                    <span>प्रिंटिंग सुविधा</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-bus text-primary me-2"></i>
                    <span>आसान यातायात</span>
                </div>
            </div>
        </div>
    </div>

    <!-- गैलरी प्रिव्यू -->
    <div class="text-center">
        <h2 class="h4 mb-4">हमारी लैब की झलक</h2>
        <div class="row g-2">
            <div class="col-4">
                <img src="<?= base_url('assets/images/lab1.jpg') ?>" class="img-fluid rounded" alt="Lab 1">
            </div>
            <div class="col-4">
                <img src="<?= base_url('assets/images/lab2.jpg') ?>" class="img-fluid rounded" alt="Lab 2">
            </div>
            <div class="col-4">
                <img src="<?= base_url('assets/images/lab3.jpg') ?>" class="img-fluid rounded" alt="Lab 3">
            </div>
        </div>
        <a href="<?= site_url('gallery') ?>" class="btn btn-primary mt-3">और तस्वीरें देखें</a>
    </div>
</div>

<style>
.icon-box {
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}
.card:hover .icon-box {
    background-color: #e3f2fd !important;
    transform: rotate(5deg) scale(1.1);
}
</style>








                </div>
               </main>
        </div>
    </div>