<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>


<h2>Add Unit</h2>
<form method="post" action="<?= site_url('admin/units/store') ?>">
    <div class="form-group">
        <label for="paper_id">Paper</label>
        <select name="paper_id" class="form-control" required>
            <?php foreach ($papers as $paper): ?>
                <option value="<?= $paper['id'] ?>"><?= esc($paper['name']) ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="name">Unit Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Save</button>
</form>

<hr>



<h4>Existing Units</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Paper</th>
            <th>Unit Name</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($units as $unit): ?>
            <tr>
                <td><?= $unit['id'] ?></td>
                <td>
                    <?php
                    foreach ($papers as $paper) {
                        if ($paper['id'] == $unit['paper_id']) {
                            echo esc($paper['name']);
                            break;
                        }
                    }
                    ?>
                </td>
                <td><?= esc($unit['name']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>



<?= $this->endSection() ?>