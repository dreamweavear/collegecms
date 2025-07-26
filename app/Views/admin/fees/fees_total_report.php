

<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Pending Fees Report</h2>

<form method="get" class="row g-3 mb-3">
    <div class="col-md-4">
        <label>Filter by Course</label>
        <select name="course" class="form-control">
            <option value="">-- All Courses --</option>
            <?php foreach ($courses as $c): ?>
                <option value="<?= $c['course'] ?>" <?= $courseFilter == $c['course'] ? 'selected' : '' ?>>
                    <?= ucfirst($c['course']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-4">
        <label>Filter by Session (Year)</label>
        <select name="session" class="form-control">
            <option value="">-- All Sessions --</option>
            <?php foreach ($sessions as $s): ?>
                <option value="<?= $s['session'] ?>" <?= $sessionFilter == $s['session'] ? 'selected' : '' ?>>
                    <?= $s['session'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-4 d-flex align-items-end">
        <button type="submit" class="btn btn-primary">Apply Filter</button>
    </div>
</form>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Student Name</th>
            <th>Course</th>
            <th>Course Fee</th>
            <th>Discount</th>
            <th>Total Paid</th>
            <th>Pending Fees</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach ($students as $student): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= esc($student['name']) ?></td>
                <td><?= esc($student['course']) ?></td>
                <td>₹<?= number_format($student['course_fee']) ?></td>
                <td>₹<?= number_format($student['discount']) ?></td>
                <td>₹<?= number_format($student['total_paid']) ?></td>
                <td><strong>₹<?= number_format($student['pending']) ?></strong></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>
