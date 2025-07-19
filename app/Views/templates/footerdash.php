<!-- Bootstrap 5 JS Bundle with Popper -->



        <div class="row" >
            <div class="col-sm-4 bg-primary text-white py-4 px-5">
                  <div class="d-flex align-items-start mb-2">
                  <i class="bi bi-shop fs-5 me-2"></i>
                  <div>Arun Computers</div>
                </div>
                <div class="d-flex align-items-start mb-2">
                    <i class="bi bi-geo-alt fs-5 me-2"></i>
                    <div>Allahabad Road, Urrhat, Rewa (M.P.)</div>
                </div>
          
                <div class="d-flex align-items-start">
                    <i class="bi bi-pin-map fs-5 me-2"></i>
                    <div>India Pin-486001</div>
                </div>
        </div>
        <div class="col-sm-4 bg-primary text-white py-4 ">
            <div class="d-flex align-items-center gap-2 mb-2">
              <i class="bi bi-envelope-fill"></i>
              <a class= "text-white" href="mailto:aruncomputersrewa@gmail.com">aruncomputersrewa@gmail.com</a>
            </div>

            <ul class="list-unstyled mb-2">
              <li class="d-flex align-items-center gap-2 mb-2">
                <i class="bi bi-globe"></i>
                <a class= "text-white" href="http://www.aruncomputer.com" target="_blank">www.aruncomputer.com</a>
              </li>
              <li class="d-flex align-items-center gap-2">
                <i class="bi bi-globe"></i>
                <a class= "text-white" href="http://www.hamararewa.in" target="_blank">www.hamararewa.in</a>
              </li>
            </ul>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-telephone-fill"></i>
              <span>9201488597, 9926542408</span>
            </div>
        </div>
    <div class="col-sm-4 bg-primary text-white py-4"> 
            <div class="mt-3">
              <a href="#" class="text-white mx-2"><i class="bi bi-facebook"></i></a>
              <a href="#" class="text-white mx-2"><i class="bi bi-instagram"></i></a>
              <a href="#" class="text-white mx-2"><i class="bi bi-whatsapp"></i></a>
              <a href="#" class="text-white mx-2"><i class="bi bi-envelope-fill"></i></a>
            </div>
    </div>
  </div>
    <div class="row">

<div class="col-sm-12 bg-dark text-white text-center py-3">
  <div class="container">
    <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
      <div class="d-flex align-items-center">
        <i class="bi bi-c-circle me-2"></i>
        <span>Copyright 1999-2025</span>
      </div>
      
      <div class="d-flex align-items-center">
        <i class="bi bi-lock-fill me-2"></i>
        <span>All Rights Reserved</span>
      </div>
      
      <div class="d-flex align-items-center">
        <i class="bi bi-code-square me-2"></i>
        <span>Designed By - Arun Computers</span>
      </div>
    </div>
   </div>
 </div>
</div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   
            <script>
                // Toggle sidebar
                document.getElementById('sidebarToggle').addEventListener('click', function() {
                    document.getElementById('sidebar').classList.toggle('collapsed');
                });
                // Activate sidebar links
                const sidebarLinks = document.querySelectorAll('.sidebar-link');
                sidebarLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        sidebarLinks.forEach(l => l.classList.remove('active'));
                        this.classList.add('active');
                    });
                });
            </script>
   </body>
</html>