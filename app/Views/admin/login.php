

<?= $this->include('templates/header') ?>

<div class="container mt-2" style="max-width: 400px;">
    <h3 class="mb-4 text-center">Admin Login</h3>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
    <form action="<?= base_url('/check') ?>" method="post">
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required />
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required />
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>

<?= $this->include('templates/footer') ?>