<?= $this->extend('layouts/admin.php'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mt-5">Login</h5>

                <?php if (session()->getFlashdata('msg')): ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="<?= base_url('admins/checkLogin') ?>">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" class="form-control" placeholder="Email" required />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password" class="form-control" placeholder="Password" required />
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary mb-4">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
