<body>
    <div class="wrapper">
        <h1>Sign Up</h1>
        <form method="post" action="<?= base_url('auth/registrasi'); ?>">
            <input type="text" id="name" name="name" placeholder="Name" value="<?= set_value('name'); ?>">
            <small class="text-danger"><?= form_error('name'); ?></small>
            <input type="text" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
            <small class="text-danger"><?= form_error('email'); ?></small>
            <input type="password" id="password1" name="password1" placeholder="Password">
            <small class="text-danger"><?= form_error('password1'); ?></small>
            <input type="password" id="password2" name="password2" placeholder="Re-Enter Password">
            <button type="submit" class="my-3">Sign Up</button>
        </form>
        <div class="member">Sudah Mendaftar? <a href="<?= base_url('auth'); ?>">Masuk
            </a>
        </div>
    </div>
</body>