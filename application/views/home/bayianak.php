<!-- Toko Kesehatan -->
<!-- Kesehatan Bayi & Anak -->
<section id="artikel-1">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bc-artikel">
            <li class="breadcrumb-item bc-artikel-first"><a href="<?= base_url('#navbar'); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('toko'); ?>">Toko Kesehatan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kesehatan Bayi & Anak</li>
        </ol>
    </nav>

    <!-- Produk Section -->
    <section id="bayi&anak">
        <div class="container product-container">
            <div class="row">
                <div class="col-12 mx-2 category-name">
                    <h5><i class="fa-solid fa-baby"></i>Kesehatan Bayi & Anak</h5>
                </div>
            </div>
            <div class="row mt-4">
                <?php foreach ($produk as $prd) : ?>
                    <div class="col-md-3 my-3">
                        <div class="card-body-toko text-center">
                            <img src="<?= base_url('assets/img/') . $prd['image']; ?>" alt="">
                            <h5><?= $prd['nama_produk']; ?></h5>
                            <h6><?= $prd['sub_nama_produk']; ?></h6>
                            <h6><span class="text-muted text-decoration-line-through">Rp <?= $prd['harga_awal']; ?></span> Rp <?= $prd['harga']; ?></h6>
                            <?= anchor('toko/tambah_ke_keranjang/' . $prd['id_produk'], '<div class="btn btn-sm btn-primary my-3">Beli Sekarang</div>') ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
        </div>
    </section>