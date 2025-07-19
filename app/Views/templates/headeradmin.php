<!DOCTYPE html>
<html>

<head>

      <title>Arun Computers</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon-16x16.png') ?>">
    <style>
        .sidebar {
            width: 280px;
            transition: all 0.3s;
            min-height: calc(100vh - 112px); /* Adjust based on your navbars height */
        }
        .sidebar.collapsed {
            margin-left: -280px;
        }
        .main-content {
            transition: all 0.3s;
            flex: 1;
            min-width: 0; /* Prevent content overflow */
        }
        .sidebar-link {
            border-radius: 5px;
            margin-bottom: 5px;
        }
        .sidebar-link:hover, .sidebar-link.active {
            background-color: rgba(13, 110, 253, 0.2);
        }
        .content-wrapper {
            display: flex;
            flex-wrap: nowrap;
        }
    </style>
<style>
  /* ड्रॉपडाउन मेनू स्टाइल */
  .dropdown-menu {
    border-radius: 8px;
    overflow: hidden;
    background-color: #f8f9fa;
  }
  
  /* ड्रॉपडाउन आइटम्स */
  .dropdown-item {
    transition: all 0.2s;
    font-weight: 500;
  }
  
  .dropdown-item:hover {
    background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
    color: #0078D7 !important;
    padding-left: 20px !important;
  }
  
  /* एक्टिव आइटम */
  .dropdown-item:active {
    background-color: #0078D7 !important;
    color: white !important;
  }
  
  /* हेडर स्टाइल */
  .dropdown-header {
    font-size: 0.75rem;
    letter-spacing: 1px;
  }
</style>

<!-- कस्टम स्टाइल -->
<style>
  /* नेव लिंक्स स्टाइल */
  .navbar-nav .nav-link {
    transition: all 0.3s ease;
    font-weight: 500;
    position: relative;
  }
  
  /* होवर इफेक्ट */
  .navbar-nav .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.15);
    transform: translateY(-2px);
  }
  
  /* एक्टिव लिंक */
  .navbar-nav .nav-link.active {
    background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
    border-bottom: 2px solid white;
  }
  
  /* आइकन्स का साइज */
  .navbar-nav .bi {
    font-size: 1.1rem;
  }
</style>

</head>

<body>
    <!-- First navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background: linear-gradient(135deg, #0078D7 0%, #00B4FF 100%); box-shadow: 0 2px 10px rgba(0, 120, 215, 0.4);">

        <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center h-100" href="#">
       <img src="<?= base_url('assets/images/logo.jpg') ?>" alt="College Logo" height="50">
      </a>  


        <button class="btn me-2" id="sidebarToggle" style="
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);">
            <i class="bi bi-list text-white"></i>
        </button>


            <a class="navbar-brand" href="<?= base_url('/') ?>">Arun Computer</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">

                     <!-- होम -->
  <li class="nav-item mx-1">
    <a class="nav-link text-white d-flex align-items-center py-2 px-3 rounded" href="<?= base_url('/') ?>">
      <i class="bi bi-house-door-fill me-2"></i>
      <span>Home</span>
    </a>
  </li>



  <!-- एकेडेमिक्स -->
  <li class="nav-item mx-1">
    <a class="nav-link text-white d-flex align-items-center py-2 px-3 rounded" href="<?= base_url('academics') ?>">
      <i class="bi bi-book-half me-2"></i>
      <span>Academics</span>
    </a>
  </li>

  <!-- एडमिशन -->
  <li class="nav-item mx-1">
    <a class="nav-link text-white d-flex align-items-center py-2 px-3 rounded" href="<?= base_url('admissionpage') ?>">
      <i class="bi bi-pencil-square me-2"></i>
      <span>Admission</span>
    </a>
  </li>


                         
    <!--  student portal dropdown  -->

  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-video2 me-1"></i> Student Portal
          </a>
  
  <ul class="dropdown-menu shadow-lg" aria-labelledby="navbarDropdown" style="border: none; min-width: 250px;">
    <!-- ड्रॉपडाउन हेडर -->
    <li class="dropdown-header bg-primary text-white py-2 px-3">
      <i class="bi bi-journal-bookmark me-2"></i> STUDENT RESOURCES
    </li>
    
    <!-- मेनू आइटम्स -->
    <li><a class="dropdown-item py-2" href="<?= base_url('studymaterials') ?>">
      <i class="bi bi-book text-primary me-2"></i> Study Material (LMS)
    </a></li>
   
    <li><a class="dropdown-item py-2" href="#">
      <i class="bi bi-calendar-week text-success me-2"></i> Syllabus & Time Table
    </a></li>
    
    <li><a class="dropdown-item py-2" href="#">
      <i class="bi bi-download text-info me-2"></i> Downloads
    </a></li>
    
    <li><a class="dropdown-item py-2" href="#">
      <i class="bi bi-briefcase text-warning me-2"></i> Placements
    </a></li>
    
    <!-- डिवाइडर -->
    <li><hr class="dropdown-divider my-1"></li>
    
    <li><a class="dropdown-item py-2" href="#">
      <i class="bi bi-people text-secondary me-2"></i> Alumni
    </a></li>
  </ul>
</li>                     

                         
<!-- contact us  -->

            <li class="nav-item mx-1">
                <a class="nav-link text-white d-flex align-items-center py-2 px-3 rounded" href="<?= base_url('contact') ?>">
                <i class="bi bi-telephone-outbound-fill me-2"></i>
                <span>Contact Us</span>   </a>
            </li>
            <li class="nav-item mx-1">
                <a class="nav-link text-white d-flex align-items-center py-2 px-3 rounded" href="<?= base_url('admin/dashboard') ?>">
                
                <i class="bi bi-speedometer2 me-2"></i>
                <span>Dashboard</span>   </a>
            </li>

                </ul>
         <!-- Login / Logout - Always Right -->
            <div class="order-lg-2 ms-auto d-flex align-items-center">
              <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <?php if (session()->get('isLoggedIn')): ?>
                            <span class="navbar-text me-2">Welcome, <strong><?= session()->get('adminName') ?></strong></span>
                            <a href="<?= base_url('/logout') ?>" class="btn btn-danger my-2 my-sm-0">Logout</a>
                        <?php else: ?>
                            <a href="<?= base_url('/register') ?>" class="btn btn-success my-2 my-sm-0 mx-2">Register</a>
                            <a href="<?= base_url('/login') ?>" class="btn btn-primary my-2 my-sm-0">Login</a>
                        <?php endif; ?>
                    </li>
              </ul>
            </div>
            </div>
        </div>
    </nav>

    

    <!-- Main content with sidebar -->
    <div class="container-fluid">
        <div class="content-wrapper">
            <!-- Sidebar -->
            <div class="sidebar bg-light p-3" id="sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link sidebar-link active p-2" href="<?= base_url('admin/dashboard') ?>">
                                <i class="bi bi-house-door me-2"></i> Dashboard
                            </a>
                            <a class="nav-link sidebar-link active p-2" href="<?= base_url('admin/chapters') ?>">
                                <i class="bi bi-house-door me-2"></i> Content admin page
                            </a>
                            <a class="nav-link sidebar-link active p-2" href="<?= base_url('student-content') ?>">
                                <i class="bi bi-house-door me-2"></i> Study Content
                            </a>
                        </li>
            <!-- course section -->
                        <li class="nav-item">
                            <a class="nav-link sidebar-link p-2" href="<?= base_url('admin/courses/create') ?>">
                                <i class="bi bi-speedometer2 me-2"></i> Add New Course
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link sidebar-link p-2" href="<?= base_url('admin/courses/') ?>">
                                <i class="bi bi-speedometer2 me-2"></i> Edit  Course
                            </a>
                        </li>
            <!-- papers section -->
                        <li class="nav-item">
                            <a class="nav-link sidebar-link p-2" href="<?= base_url('admin/papers/create') ?>">
                                <i class="bi bi-speedometer2 me-2"></i> Add New Paper
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sidebar-link p-2" href="<?= base_url('admin/papers/') ?>">
                                <i class="bi bi-speedometer2 me-2"></i> Edit Paper
                            </a>
                        </li>
            <!-- unit section -->            
                        <li class="nav-item">
                            <a class="nav-link sidebar-link p-2" href="<?= base_url('admin/units/create') ?>">
                                <i class="bi bi-speedometer2 me-2"></i> Add New Unit
                            </a>
                        </li>

                          <li class="nav-item">
                            <a class="nav-link sidebar-link p-2" href="<?= base_url('admin/units/') ?>">
                                <i class="bi bi-speedometer2 me-2"></i> Edit Unit
                            </a>
                        </li>
                    <!-- chapters section -->
                        <li class="nav-item">
                            <a class="nav-link sidebar-link p-2" href="<?= base_url('admin/chapters/create') ?>">
                                <i class="bi bi-speedometer2 me-2"></i> Add New Chapter
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link sidebar-link p-2" href="<?= base_url('admin/chapters/') ?>">
                                <i class="bi bi-speedometer2 me-2"></i> Edit  Chapter
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link sidebar-link p-2" href="<?= base_url('admin/chapters/adminAdmission') ?>">
                                <i class="bi bi-people me-2"></i> Admission Form
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sidebar-link p-2" href="<?= base_url('admission') ?>">
                                <i class="bi bi-file-earmark-text me-2"></i> Student List
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sidebar-link p-2" href="#">
                                <i class="bi bi-gear me-2"></i> Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sidebar-link p-2" href="#">
                                <i class="bi bi-question-circle me-2"></i> Help
                            </a>
                        </li>
                    </ul>
                    
                    <hr>
                    
                    <div class="p-2">
                        <h6 class="text-muted">Recent Activity</h6>
                        <div class="small text-muted">
                            <div class="mb-2">User login - 2 mins ago</div>
                            <div class="mb-2">New report generated</div>
                            <div>System updated</div>
                        </div>
                    </div>
                </div>
            </div>
