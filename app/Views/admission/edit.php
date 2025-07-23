<?= $this->include('templates/headeradmin') ?>


<?php if (isset($validation)): ?>
  <div class="alert alert-danger">
    <?= $validation->listErrors() ?>
  </div>
<?php endif; ?>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h2 class="text-center mb-4">Edit Student Details</h2>

      <form method="post" action="<?= site_url('admin/admission/update/' . $student['id']) ?>" enctype="multipart/form-data">
        
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" id="name" value="<?= esc($student['name']) ?>" class="form-control">
        </div>

        <div class="mb-3">
          <label for="father_name" class="form-label">Father's Name</label>
          <input type="text" name="father_name" id="father_name" value="<?= esc($student['father_name']) ?>" class="form-control">
        </div>

        <div class="mb-3">
          <label for="dob" class="form-label">Date of Birth</label>
          <input type="text" name="dob" id="dob" value="<?= esc($student['dob']) ?>" class="form-control" autocomplete="off">
        </div>

        <div class="mb-3">
          <label for="course" class="form-label">Course</label>
          <input type="text" name="course" id="course" value="<?= esc($student['course']) ?>" class="form-control">
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="text" name="phone" id="phone" value="<?= esc($student['phone']) ?>" class="form-control">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" id="email" value="<?= esc($student['email']) ?>" class="form-control">
        </div>

        <div class="mb-3">
          <label for="photo" class="form-label">Change Photo (optional)</label>
          <input type="file" name="photo" id="photo" class="form-control">
        </div>

        <div class="mb-3">
          <img src="<?= base_url('uploads/' . $student['photo']) ?>" width="100" alt="Current Photo">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="<?= site_url('admin/admission') ?>" class="btn btn-secondary">Cancel</a>
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
</main>
</div>
</div?

<?= $this->include('templates/footerdash') ?>