<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Edit Unit</h2>
<form action="<?= site_url('admin/units/update/'.$unit['id']) ?>" method="post">
    <div class="mb-3">
        <label>Paper</label>
        <select name="paper_id" class="form-control" required>
            <?php foreach ($papers as $paper): ?>
                <option value="<?= $paper['id'] ?>" <?= $paper['id'] == $unit['paper_id'] ? 'selected' : '' ?>>
                    <?= $paper['name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Unit Name</label>
        <input type="text" name="name" class="form-control" value="<?= esc($unit['name']) ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection() ?>
