<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Edit Courses</h2>
<form action="<?= site_url('admin/courses/update/'.$course['id']) ?>" method="post">
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?= esc($course['name']) ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection() ?>
