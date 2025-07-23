<!DOCTYPE html>
<html>
<head>
      <title>Admin Panel</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon-16x16.png') ?>">
    <style>

    body {
    margin: 0;
    padding: 0;
    overflow-x: hidden; /* Prevent horizontal scroll */
}

.container-fluid, .main-content, .content-wrapper {
    padding-right: 10px;
    padding-left: 10px;
    margin: 0 auto;
    max-width: 100%;
    box-sizing: border-box;
}


  .sidebar {
    width: 280px;
    transition: all 0.3s ease-in-out;
    min-height: 100vh;
    background-color: #f8f9fa;
    z-index: 1000;
}

.sidebar.collapsed {
    margin-left: -280px;
}

.main-content {
    transition: all 0.3s ease-in-out;
    flex: 1;
    padding: 10px 10px 10px 20px; /* top, right, bottom, left */
    
}

/* Accordion style */
.accordion-button {
    background-color: #eaf4fb;
    color: #0078d4;
    font-weight: 500;
}

.accordion-button:not(.collapsed) {
    background: linear-gradient(90deg, #0078D7 0%, #00B4FF 100%);
    color: white;
}

.accordion-body ul li a {
    font-size: 14px;
    color: #212529;
    text-decoration: none;
    padding: 4px 8px;
    display: block;
    border-radius: 4px;
}

.accordion-body ul li a:hover {
    background-color: rgba(0, 120, 215, 0.1);
    color: #0078d4;
}

/* Flex wrapper */
.content-wrapper {
    display: flex;
    flex-wrap: nowrap;
}

/* Responsive changes */
@media (max-width: 768px) {
    .content-wrapper {
        flex-direction: column;
    }

    .sidebar {
        position: relative;
        width: 100%;
        margin-left: 0 !important;
    }

    .sidebar.collapsed {
        display: none;
    }

    .main-content {
        width: 100%;
    }
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
                     <!-- अबाउट -->
  <li class="nav-item mx-1">
    <a class="nav-link text-white d-flex align-items-center py-2 px-3 rounded" href="<?= base_url('about') ?>">
      <i class="bi bi-info-circle-fill me-2"></i>
      <span>About</span>
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

  <!-- फैसिलिटीज -->
  <li class="nav-item mx-1">
    <a class="nav-link text-white d-flex align-items-center py-2 px-3 rounded" href="<?= base_url('facilities') ?>">
      <i class="bi bi-building-check me-2"></i>
      <span>Facilities</span>
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
  <!--
    <li><a class="dropdown-item py-2" href="<?= base_url('studymaterials') ?>">
      <i class="bi bi-book text-primary me-2"></i> Study Material (LMS)
    </a></li>
    -->
                <li><a class="dropdown-item py-2" href="<?= base_url('student-content') ?>">
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

    <!-- Second navbar deleted  -->


    <!-- Main side bar with content Links  -->
    <div class="container-fluid">
        <div class="content-wrapper">
            <!-- Sidebar -->
            <div class="sidebar bg-light p-3" id="sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link sidebar-link active p-2" href="#">
                                <i class="bi bi-house-door me-2"></i> Dashboard
                            </a>
                        </li>          
                    </ul>
                    <hr>
   <!-- new side bar content for student educational material links added -->


<div class="accordion" id="courseAccordion">
  <?php foreach ($courses as $course): ?>
    <h5 class="mt-3 text-primary"><?= esc($course['name']) ?></h5>
    <?php foreach ($papers as $paper): ?>
      <?php if ($paper['course_id'] == $course['id']): ?>
        <div class="accordion-item">
          <h2 class="accordion-header" id="heading<?= $paper['id'] ?>">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $paper['id'] ?>" aria-expanded="false" aria-controls="collapse<?= $paper['id'] ?>">
              <?= esc($paper['name']) ?>
            </button>
          </h2>
          <div id="collapse<?= $paper['id'] ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $paper['id'] ?>" data-bs-parent="#courseAccordion">
            <div class="accordion-body">
              <?php foreach ($units as $unit): ?>
                <?php if ($unit['paper_id'] == $paper['id']): ?>
                  <div class="ms-3">
                    <strong><?= esc($unit['name']) ?></strong>
                    <ul class="nav flex-column ms-3">
                      <?php foreach ($chapters as $chapter): ?>
                        <?php if ($chapter['unit_id'] == $unit['id']): ?>
                          <li><a href="<?= site_url('student-content/'.$chapter['slug']) ?>" class="nav-link"><?= esc($chapter['name']) ?></a></li>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  <?php endforeach; ?>
</div>


              
                </div>
            </div>
