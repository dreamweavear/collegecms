<?= $this->include('templates/header') ?>

<div class="container mt-5">

  <div class="alert alert-success text-center">
    ✅ Admission form submitted successfully!
  </div>

  <h3 class="text-center mb-4">📄 Admission Confirmation</h3>

  <div class="table-responsive">
    <table class="table table-bordered shadow-sm">
      <tbody>
        <tr><th>Name</th><td><?= esc($student['name']) ?></td></tr>
        <tr><th>Father's Name</th><td><?= esc($student['father_name']) ?></td></tr>
        <tr><th>Date of Birth</th><td><?= esc($student['dob']) ?></td></tr>
        <tr><th>Course</th><td><?= esc($student['course']) ?></td></tr>
        <tr><th>Phone</th><td><?= esc($student['phone']) ?></td></tr>
        <tr><th>Email</th><td><?= esc($student['email']) ?></td></tr>
        <tr>
          <th>Photo</th>
          <td>
            <img src="<?= base_url('uploads/' . $student['photo']) ?>" width="120" height="140" class="img-thumbnail">
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="text-center mt-4 d-print-none">
    <button onclick="window.print()" class="btn btn-primary me-2">
      🖨 Print Receipt
    </button>

    <a href="<?= base_url('admin/admission/create') ?>" class="btn btn-success me-2">
      ➕ New Admission
    </a>

    <a href="<?= base_url('admin/admission') ?>" class="btn btn-secondary">
      🔙 Back to List  Pagal oP ji ho gaya 
    </a>
  </div>

</div>

<?= $this->include('templates/footer') ?>
