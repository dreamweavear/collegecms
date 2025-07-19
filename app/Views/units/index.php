<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Units</h2>
<a href="<?= site_url('admin/units/create') ?>" class="btn btn-primary mb-3">Add New Unit</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Paper</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($units as $unit): ?>
        <tr>
            <td><?= $unit['id'] ?></td>
            <td><?= $unit['paper_name'] ?></td>
            <td><?= $unit['name'] ?></td>
            <td>
                <a href="<?= site_url('admin/units/edit/'.$unit['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="<?= site_url('admin/units/delete/'.$unit['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>
