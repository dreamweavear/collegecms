<?= $this->include('templates/headeradmin') ?>

<div class="d-flex flex-column min-vh-100">
  <div class="d-flex flex-grow-1">

    <!-- 🧠 Main Content Area -->
    <main class="flex-fill p-4">
      <div class="container-fluid pb-5">

        <!-- ✅ Flash Messages -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success text-center col-md-8 mx-auto">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger text-center col-md-8 mx-auto">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <h2 class="text-center">Admitted Student List</h2>
        <a href="<?= base_url('admin/admission/create') ?>" class="btn btn-primary mb-3">Add New</a>

        <table class="table table-bordered table-striped table-hover">
          <thead class="table-light">
            <tr>
              <th>ID</th><th>Name</th><th>Father</th><th>Course</th><th>DOB</th>
              <th>Phone</th><th>Email</th><th>Photo</th><th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($students as $s): ?>
            <tr>
              <td><?= esc($s['id']) ?></td>
              <td><?= esc($s['name']) ?></td>
              <td><?= esc($s['father_name']) ?></td>
              <td><?= esc($s['course']) ?></td>
              <td><?= esc($s['dob']) ?></td>
              <td><?= esc($s['phone']) ?></td>
              <td><?= esc($s['email']) ?></td>
              <td>
                <img src="<?= base_url('uploads/' . $s['photo']) ?>" width="100" alt="photo" class="img-thumbnail">
              </td>
              <td>
                <a href="<?= base_url('admin/admission/edit/' . $s['id']) ?>" class="btn btn-sm btn-warning mb-1">Edit</a>
                <a href="<?= base_url('admin/admission/delete/' . $s['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

      </div>
    </main>
            </div>
            </div>

  </div> <!-- end d-flex (content + sidebar) -->

  <!-- ✅ Footer -->
  <?= $this->include('templates/footerdash') ?>
</div>
