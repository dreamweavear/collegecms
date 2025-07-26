<?= $this->extend('admin/layout') ?>
<?= $this->section('content') ?>

<h2>Change Password</h2>

<?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->get('success') ?></div>
<?php endif; ?>
<?php if(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->get('error') ?></div>
<?php endif; ?>


<!-- change_password.php view में form action ऐसा करें -->
<!-- change_password.php view में -->
<form method="post" action="<?= site_url('admin/auth/change-password') ?>">
        <?= csrf_field() ?> <!-- CSRF टोकन जोड़ें -->


    <div class="mb-3">
        <label>Old Password</label>
        <input type="password" name="old_password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>New Password</label>
        <input type="password" name="new_password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Confirm New Password</label>
        <input type="password" name="confirm_password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Change Password</button>
</form>



<?= $this->endSection() ?>
