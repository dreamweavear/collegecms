<?= $this->include('templates/headerdash1') ?>

<style>
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        background: linear-gradient(135deg, #e0f0ff, #f6fcff);
    }
    main {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .login-box {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 400px;
    }
    footer {
        margin-top: auto;
        background-color: #0078d4;
        color: white;
        padding: 10px;
        text-align: center;
    }
</style>

<main>
    <div class="login-box">
        <h3 class="mb-4 text-center text-primary">🔒 Admin Login</h3>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/check') ?>" method="post">
            <div class="mb-3">
                <label><strong>Username</strong></label>
                <input type="text" name="username" class="form-control" required autofocus />
            </div>
            <div class="mb-3">
                <label><strong>Password</strong></label>
                <input type="password" name="password" class="form-control" required />
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</main>

<footer>
    © <?= date('Y') ?> Arun Computer College | Powered by Admin Panel
</footer>

<?= $this->include('templates/footerdash') ?>
