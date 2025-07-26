<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>


    <?php if(session()->getFlashdata('success')): ?>
  <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<?php if(session()->getFlashdata('error')): ?>
  <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>





<h2>Fees List</h2>

<form method="get" class="row g-2 mb-3">
    <div class="col-md-4">
        <label>Course</label>
        <select name="course" class="form-control">
            <option value="">-- All Courses --</option>
            <?php foreach ($courses as $c): ?>
                <option value="<?= $c['course'] ?>" <?= ($selectedCourse == $c['course']) ? 'selected' : '' ?>>
                    <?= ucfirst($c['course']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="col-md-4">
        <label>Admission Year</label>
        <select name="year" class="form-control">
            <option value="">-- All Years --</option>
            <?php foreach ($years as $y): ?>
                <option value="<?= $y['year'] ?>" <?= ($selectedYear == $y['year']) ? 'selected' : '' ?>>
                    <?= $y['year'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="col-md-2 d-flex align-items-end">
        <button type="submit" class="btn btn-primary">Apply Filter</button>
    </div>
</form>




<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Course</th>
            <th>Installment No.</th>
            <th>Amount</th>
            <th>Payment Date</th>
            <th>Receipt No.</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($fees as $fee): ?>
            <tr>
                <td><?= $fee['id'] ?></td>
                <td><?= $fee['student_id'] ?></td>
                <td><?= esc($fee['student_name']) ?> (ID: <?= $fee['student_id'] ?>)</td>
                <td><?= esc($fee['student_name']) ?> - <?= esc($fee['course']) ?></td>
                <td><?= $fee['installment_number'] ?></td>
                <td><?= $fee['amount'] ?></td>
                <td><?= $fee['payment_date'] ?></td>
                <td><?= $fee['receipt_number'] ?></td>
            
                <td><a href="<?= site_url('admin/fees/edit/'.$fee['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                <a href="<?= site_url('admin/fees/delete/'.$fee['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this fee record?');">Delete</a>
                <a href="<?= site_url('admin/fees/view/' . $fee['student_id']) ?>" class="btn btn-info btn-sm">View</a>

                </td>
                
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



<?= $this->endSection() ?>
