<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h2 class="mt-4 mb-3"><?= $judul; ?></h2>

            <div class="row">
                <div class="col-lg">
                    <?= $this->session->flashdata('message'); ?>
                    <table class="table table-bordered text-center">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>

                        <?= $this->session->flashdata('message'); ?>

                        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Tambahkan User Baru</a>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Profile</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">ID</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tanggal Registrasi</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($dftruser as $usr) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><img src="<?= base_url('assets/img/profile/') . $usr['image']; ?>" width="100">
                                    <td><?= $usr['nama']; ?></td>
                                    <td><?= $usr['email']; ?></td>
                                    <td><?= $usr['role_id']; ?></td>
                                    <td><?= $usr['is_active']; ?></td>
                                    <td><?= date('d F Y', $usr['date_created']); ?></td>
                                    </td>
                                    <td>
                                        <div class="btn btn-sm" style="color:blue;"><i class="fa fa-fw fa-pen"></i></div>
                                    </td>
                                    <td onclick="javascript: return confirm('Anda yakin akan menghapus <?= $usr['nama']; ?>?')">
                                        <a href="<?= base_url(); ?>daftaruser/hapususer/<?= $usr['id_user']; ?>" class="btn btn-sm" style="color: blue;"><i class="fa fa-fw fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

    </main>