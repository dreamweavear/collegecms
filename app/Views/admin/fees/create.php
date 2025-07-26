<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Add Fee</h2>

<h4>Filter Students</h4>
<form method="get" action="<?= site_url('admin/fees/create') ?>" class="row g-2 mb-3">
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

<?php if (!empty($students)): ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Student</th>
                <th>Course</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= esc($student['name']) ?></td>
                    <td><?= esc($student['course']) ?></td>
                    <td>
                        <a href="<?= site_url('admin/fees/add/'.$student['id']) ?>" class="btn btn-primary btn-sm">Add Fee</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No students found for selected course/year.</p>
<?php endif; ?>

<?= $this->endSection() ?>
