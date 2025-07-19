<?= $this->include('templates/header') ?>

<div class="container mt-4">

  <div class="alert alert-success text-center">
    ✅ Form submitted successfully!
  </div>

  <h3 class="text-center">Admission Confirmation</h3>

<div class="container mt-4">
  <h3 class="text-center">Admission Confirmation</h3>



  <table class="table table-bordered mt-3">
    <tr><th>Name</th><td><?= esc($student['name']) ?></td></tr>
    <tr><th>Father's Name</th><td><?= esc($student['father_name']) ?></td></tr>
    <tr><th>Date of Birth</th><td><?= esc($student['dob']) ?></td></tr>
    <tr><th>Course</th><td><?= esc($student['course']) ?></td></tr>
    <tr><th>Phone</th><td><?= esc($student['phone']) ?></td></tr>
    <tr><th>Email</th><td><?= esc($student['email']) ?></td></tr>
    <tr><th>Photo</th><td><img src="<?= base_url('uploads/' . $student['photo']) ?>" width="120" height="140" style="border:1px solid #ccc;"></td></tr>
  </table>

  <div class="text-center mt-4">
    <button onclick="window.print()" class="btn btn-primary">🖨 Print</button>
    <a href="<?= base_url('admission') ?>" class="btn btn-secondary">Back to List</a>
  </div>
</div>

<?= $this->include('templates/footer') ?>