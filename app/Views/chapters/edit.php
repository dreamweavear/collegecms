<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Edit Chapter</h2>
<form action="<?= site_url('admin/chapters/update/'.$chapter['id']) ?>" method="post">
    <div class="mb-3">
        <label>Course</label>
        <select name="course_id" class="form-control" required>
            <?php foreach ($courses as $course): ?>
                <option value="<?= $course['id'] ?>" <?= $course['id'] == $selected['course_id'] ? 'selected' : '' ?>>
                    <?= esc($course['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Paper</label>
        <select name="paper_id" class="form-control" required>
            <?php foreach ($papers as $paper): ?>
                <option value="<?= $paper['id'] ?>" <?= $paper['id'] == $selected['paper_id'] ? 'selected' : '' ?>>
                    <?= esc($paper['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Unit</label>
        <select name="unit_id" class="form-control" required>
            <?php foreach ($units as $unit): ?>
                <option value="<?= $unit['id'] ?>" <?= $unit['id'] == $selected['unit_id'] ? 'selected' : '' ?>>
                    <?= esc($unit['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Chapter Name</label>
        <input type="text" name="name" class="form-control" value="<?= esc($chapter['name']) ?>" required>
    </div>

    <div class="mb-3">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control" value="<?= esc($chapter['slug']) ?>" required>
    </div>

    <div class="mb-3">
        <label>Content</label>
        <!-- ✅ Important: ID must be editor -->
        <textarea name="content" id="editor" class="form-control"><?= $chapter['content'] ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update Chapter</button>
</form>

<!-- TinyMCE CDN -->
<script src="https://cdn.tiny.cloud/1/b2kytk0kpljz3uc9a5bo3vm4r3azd0jdov9qzdltds0ixm1h/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- TinyMCE Initialize -->
<script>
    tinymce.init({
        selector: 'textarea[name="content"]'
    });
</script>


<!-- ✅ Load TinyMCE from local path -->
<script src="<?= base_url('js/tinymce/tinymce.min.js') ?>"></script>

<script>
    tinymce.init({
        selector: '#editor',
        height: 400,
        plugins: 'code link lists fullscreen',
        toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist | code fullscreen',
        menubar: false
    });
</script>

<?= $this->endSection() ?>
