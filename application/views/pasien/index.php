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

                        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Tambahkan Pasien Baru</a>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Profile</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No. KTP</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No. HP</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pasien as $psn) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><img src="<?= base_url('assets/img/profile/') . $psn['image']; ?>" width="100">
                                    <td><?= $psn['nama']; ?></td>
                                    <td><?= $psn['no_ktp']; ?></td>
                                    <td><?= $psn['jenis_kelamin']; ?></td>
                                    <td><?= $psn['tempat_lahir']; ?></td>
                                    <td><?= $psn['tanggal_lahir']; ?></td>
                                    <td><?= $psn['umur']; ?></td>
                                    <td><?= $psn['alamat']; ?></td>
                                    <td><?= $psn['no_hp']; ?></td>
                                    </td>
                                    <td>
                                        <div class="btn btn-sm" style="color:blue;"><i class="fa fa-fw fa-pen"></i></div>
                                    </td>
                                    <td onclick="javascript: return confirm('Anda yakin akan menghapus <?= $psn['nama']; ?>?')">
                                        <a href="<?= base_url(); ?>daftaruser/hapususer/<?= $psn['id']; ?>" class="btn btn-sm" style="color: blue;"><i class="fa fa-fw fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

    </main>