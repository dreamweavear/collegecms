


<!--  new Admin Admission form with bootstrap  -->
<!-- form me error dikhane ka code -->

<?php if (isset($validation)): ?>
  <div class="alert alert-danger">
    <?= $validation->listErrors() ?>
  </div>
<?php endif; ?>

 <div class="container">

  <div class="row justify-content-center">
    <div class="col-md-8">
      <h2 class="text-center mb-4"> Admin Student Admission Form</h2>

      <form id="admissionForm" method="post" action="<?= base_url('admission/store') ?>" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
              </div>
              <div class="mb-3">
                <label for="father_name" class="form-label">Father's Name</label>
                <input type="text" class="form-control" name="father_name" id="father_name">
              </div>
              <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <!-- <input type="text" class="form-control" name="dob" id="dob" autocomplete="off">  -->
              <input type="text" name="dob" id="dob" class="form-control" autocomplete="off">
              </div>
                <div class="mb-3">
                  <label for="course" class="form-label">Course</label>
                  <input type="text" class="form-control" name="course" id="course">
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone</label>
                  <input type="text" class="form-control" name="phone" id="phone">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="mb-3">
                  <label for="photo" class="form-label">Photo</label>
                  <input type="file" class="form-control" name="photo" id="photo">
                </div>
       <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
<!-- replace above button to see preview before submission -->
              <button type="button" class="btn btn-primary" onclick="showPreview()">Preview</button>
              <button type="submit" class="btn btn-success d-none" id="finalSubmitBtn">Final Submit</button>
              <a href="<?= site_url('admission') ?>" class="btn btn-secondary">Cancel</a>
      <!-- preview code end -->
      </form>

  </div>
   </div> 
 </div>

  <script>
  flatpickr("#dob", {
    dateFormat: "Y-m-d",
    maxDate: "today",
    allowInput: true
  });
</script>


<!-- Preview Modal ke code baad me paste kiya form submit karne ke pahle -->

<div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Preview Your Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <table class="table">
          <tr><th>Name</th><td id="p_name"></td></tr>
          <tr><th>Father's Name</th><td id="p_father"></td></tr>
          <tr><th>Date of Birth</th><td id="p_dob"></td></tr>
          <tr><th>Course</th><td id="p_course"></td></tr>
          <tr><th>Phone</th><td id="p_phone"></td></tr>
          <tr><th>Email</th><td id="p_email"></td></tr>
          <tr><th>Photo</th><td><img id="p_photo" src="#" width="100" alt="Preview Photo" /></td></tr>
        </table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Edit</button>
        <!--<button type="submit" class="btn btn-success">Final Submit</button> -->
        <button type="button" class="btn btn-success" onclick="submitFinal()">Final Submit</button>
      </div>

    </div>
  </div>
  


<script>
function showPreview() {
    // Fill text fields
    document.getElementById('p_name').textContent = document.getElementById('name').value;
    document.getElementById('p_father').textContent = document.getElementById('father_name').value;
    document.getElementById('p_dob').textContent = document.getElementById('dob').value;
    document.getElementById('p_course').textContent = document.getElementById('course').value;
    document.getElementById('p_phone').textContent = document.getElementById('phone').value;
    document.getElementById('p_email').textContent = document.getElementById('email').value;

    // Handle photo preview
    const photoInput = document.getElementById('photo');
    const previewImg = document.getElementById('p_photo');

    if (photoInput.files && photoInput.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            previewImg.src = e.target.result;
        }
        reader.readAsDataURL(photoInput.files[0]);
    } else {
        previewImg.src = '#'; // fallback
    }

    // Show modal
    const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
    previewModal.show();
}
</script>
<script>
function submitFinal() {
    // Modal ke andar se form submit karna
    document.getElementById('admissionForm').submit();
}
</script>





