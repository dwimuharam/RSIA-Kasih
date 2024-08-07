<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <table class="table table-bordered text-center">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>

        <?= $this->session->flashdata('message'); ?>

        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Tambahkan Produk Baru</a>
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>Subtitle</td>
            <td>Kategori</td>
            <td>Status</td>
            <td>Stok</td>
            <td>Keterangan</td>
            <td>Harga</td>
            <td>Harga Awal</td>
            <td>Gambar</td>
            <td colspan="2">Action</td>
        </tr>

        <?php
        $no = 1; ?>
        <?php foreach ($produk as $prd) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $prd['nama_produk']; ?></td>
                <td><?= $prd['sub_nama_produk']; ?></td>
                <td><?= $prd['kategori']; ?></td>
                <td><?= $prd['is_active']; ?></td>
                <td><?= $prd['stok']; ?></td>
                <td><?= $prd['keterangan']; ?></td>
                <td><?= $prd['harga']; ?></td>
                <td><?= $prd['harga_awal']; ?></td>
                <td>
                    <img src="<?= base_url('assets/img/') . $prd['image']; ?>" width="70">
                </td>
                <td>
                    <div class="btn btn-sm" style="color:blue;"><i class="fa fa-fw fa-pen"></i></div>
                </td>
                <td onclick="javascript: return confirm('Anda yakin akan menghapus <?= $prd['nama_produk']; ?>?')">
                    <a href="<?= base_url(); ?>daftarproduk/hapus/<?= $prd['id_produk']; ?>" class="btn btn-sm" style="color: blue;"><i class="fa fa-fw fa-trash"></i></a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->