
<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Chapters</h2>
<a href="<?= site_url('admin/chapters/create') ?>" class="btn btn-primary mb-3">Add New Chapter</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Chapter Title</th>
            <th>Slug</th>
            <th>Unit</th>
            <th>Paper</th>
            <th>Course</th>
            <th>Actions</th>
        </tr>
    </thead>
        <tbody>
            <?php foreach ($chapters as $chapter): ?>
        <tr>
            <td><?= $chapter->id ?></td>
            <td><?= esc($chapter->name) ?></td>
            <td><?= esc($chapter->slug) ?></td>
            <td><?= esc($chapter->unit_name) ?></td>
            <td><?= esc($chapter->paper_name) ?></td>
            <td><?= esc($chapter->course_name) ?></td>      
            <td>
            <a href="<?php echo site_url('admin/chapters/delete/'.$chapter->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>

            <a href="<?php echo site_url('admin/chapters/edit/'.$chapter->id); ?>" class="btn btn-sm btn-danger" >Edit</a>

            </td>
        </tr>
                        <?php endforeach; ?>
        </tbody>
    </table>
<?= $this->endSection() ?>

