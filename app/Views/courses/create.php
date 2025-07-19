<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Add Course</h2>
<form method="post" action="<?= site_url('admin/courses/store') ?>">
    <div class="form-group">
        <label for="name">Course Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>



    <button type="submit" class="btn btn-success">Save</button>
</form>

<hr>

<h4>Existing Courses</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Course Name</th>
            <th>Slug</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($courses as $course): ?>
            <tr>
                <td><?= $course['id'] ?></td>
                <td><?= esc($course['name']) ?></td>
                <td><?= esc($course['slug']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>
