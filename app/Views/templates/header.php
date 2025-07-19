<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>

     <title></title>
   

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon-16x16.png') ?>">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
  </script>

  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }

  /* Main navbar height reduction */
.navbar {
    min-height: 35px;  /* Default 56px से कम */
    padding-top: 0.15rem;
    padding-bottom: 0.15rem;
}

/* Navbar brand styling */
.navbar-brand {
    padding-top: 0;
    padding-bottom: 0;
    font-size: .80rem;  /* थोड़ा छोटा font */
    line-height: 1.0;

}

/* Nav links styling */
.navbar-nav .nav-link {
    padding-top: 0.15rem;
    padding-bottom: 0.15rem;
}

/* Navbar toggler icon */
.navbar-toggler {
    padding: 0.25rem 0.5rem;
}

/* Buttons inside navbar */
.navbar .btn {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
}

/* Navbar text (welcome message) */
.navbar-text {
    padding-top: 0;
    padding-bottom: 0;
    font-size: 0.875rem;
}

/* Extra compact version */
.navbar.bg-primary.navbar-compact {
    min-height: 30px;
}

.navbar.bg-primary.navbar-compact .navbar-brand {
    font-size: 0.80rem;
}

.navbar.bg-primary.navbar-compact .nav-link {
    padding-top: 0.1rem;
    padding-bottom: 0.1rem;
    font-size: 0.80rem;
}

.navbar.bg-primary.navbar-compact .navbar-toggler {
    padding: 0.1rem 0.3rem;
}
  </style>


<!-- jQuery & jQuery UI (add before </head>) -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

  <!-- Flatpickr CSS -->
  <!--  for date of birth in form -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>
<body>

<div class="bg-primary text-white text-center py-0" style="font-size: 1.0rem;">
  <span>Arun Computer</span>
</div>

<!-- ------                     ---->

<!-- FIRST NAVIGATION BAR (Public Navigation + Login) -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">

    <!-- Branding -->
    <a class="navbar-brand" href="<?= base_url('/') ?>" style="font-weight: bold; color: #0078d4;">
      पढ़ेगा रीवा, बढ़ेगा रीवा
    </a>

    <!-- Toggler Button for Mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

            <!-- Collapsible Content -->
            <div class="collapse navbar-collapse justify-content-center" id="topNavbar">
              <!-- Center Aligned Links -->
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('courses') ?>">Courses</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('poems') ?>">Poems</a></li>
              </ul>
            </div>
              <!-- Login / Logout - Always Right -->
              <div class="order-lg-2 ms-auto d-flex align-items-center">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <?php if (session()->get('isLoggedIn')): ?>
                    <span class="navbar-text me-2">Welcome, <strong><?= session()->get('adminName') ?></strong></span>
                    <a href="<?= base_url('/logout') ?>" class="btn btn-sm btn-outline-danger">Logout</a>
                  <?php else: ?>
                    <a href="<?= base_url('/login') ?>" class="btn btn-sm btn-outline-primary">Login</a>
                  <?php endif; ?>
                </li>
              </ul>
            </div>
      </div>
    </nav>





<!--  second navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-compact">
      <div class="container-fluid d-flex justify-content-between align-items-center flex-wrap">

        <!-- Left: Branding -->
        <a class="navbar-brand" href="#">📘 Academic</a>

      <!-- Right: Login/Logout - Always visible -->

        <!-- Toggler: Mobile view -->
        <button class="navbar-toggler order-lg-3 ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#breadcrumbNavbar">
          <span class="navbar-toggler-icon "></span>
        </button>

        <!-- Collapsible breadcrumb links -->
        <div class="collapse navbar-collapse order-lg-1 mt-2 mt-lg-0" id="breadcrumbNavbar">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link text-white" href="#">Paper 1</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="<?= base_url('about') ?>">Paper 2</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="<?= base_url('courses') ?>">Paper 3</a></li>
          </ul>
        </div>

      </div>
    </nav>



