<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Courses</h2>
<a href="<?= site_url('admin/courses/create') ?>" class="btn btn-primary mb-3">Add New Course</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($courses as $course): ?>
        <tr>
            <td><?= $course['id'] ?></td>
            <td><?= $course['name'] ?></td>
            <td><?= $course['slug'] ?></td>
            <td>
                <a href="<?= site_url('admin/courses/edit/'.$course['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="<?= site_url('admin/courses/delete/'.$course['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>
