<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Add Paper</h2>
<form method="post" action="<?= site_url('admin/papers/store') ?>">
    <div class="form-group">
        <label for="course_id">Course</label>
        <select name="course_id" class="form-control" required>
            <?php foreach ($courses as $course): ?>
                <option value="<?= $course['id'] ?>"><?= esc($course['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="name">Paper Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Save</button>
</form>



<hr>

<h4>Existing Papers</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Course</th>
            <th>Name</th>
            <th>Slug</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($papers as $paper): ?>
            <tr>
                <td><?= $paper['id'] ?></td>
                <td>
                    <?php
                    // Course name fetch karna:
                    foreach ($courses as $course) {
                        if ($course['id'] == $paper['course_id']) {
                            echo esc($course['name']);
                            break;
                        }
                    }
                    ?>
                </td>
                <td><?= esc($paper['name']) ?></td>
                <td><?= esc($paper['slug']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?= $this->endSection() ?>


// table add kiya hai upar purana filled paper dikhanae ke