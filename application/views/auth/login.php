<body>
    <div class="wrapper">
        <div class="card-body">
            <h1>Login</h1>
            <?= $this->session->flashdata('message'); ?>
            <form method="post" action="<?= base_url('auth'); ?>">
                <div>
                    <input id="email" name="email" type="text" placeholder="Email" value="<?= set_value('email'); ?>" />
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div>
                    <input id="password" name="password" type="password" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button class="my-3" type="submit">Login</button>
            </form>
            <div class="member">Belum Mendaftar? <a href="<?= base_url('auth/registrasi'); ?>">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</body>