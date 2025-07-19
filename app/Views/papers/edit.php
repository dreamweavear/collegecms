<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Edit Paper</h2>
<form action="<?= site_url('admin/papers/update/'.$paper['id']) ?>" method="post">
    <div class="mb-3">
        <label>Course</label>
        <select name="course_id" class="form-control" required>
            <?php foreach ($courses as $course): ?>
                <option value="<?= $course['id'] ?>" <?= $course['id'] == $paper['course_id'] ? 'selected' : '' ?>>
                    <?= $course['name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?= esc($paper['name']) ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection() ?>
