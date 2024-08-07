<!-- Toko Kesehatan -->
<!-- Kesehatan Bayi & Anak -->
<section id="artikel-1">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bc-artikel">
            <li class="breadcrumb-item bc-artikel-first"><a href="<?= base_url('#navbar'); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Toko Kesehatan</li>
        </ol>
    </nav>

    <!-- Pilihan Kategori -->
    <section id="toko">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12">
                    <h2>Belanja Sesuai Kategori</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <button class="btn-category-toko">
                        <div class="card card-toko" onclick="location.href='<?= base_url('toko/bayianak'); ?>'">
                            <div class="card-body">
                                <img src="<?= base_url('assets/img/toko-kategori-1.png'); ?>" alt="">
                                <h5>Kesehatan Bayi & Anak</h5>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col-md-4">
                    <button class="btn-category-toko">
                        <div class="card card-toko-secondary" onclick="location.href='<?= base_url('toko/popokdantisu'); ?>'">
                            <div class="card-body">
                                <img src="<?= base_url('assets/img/toko-kategori-2.png'); ?>" alt="">
                                <h5>Popok & Tisu Basah</h5>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col-md-4">
                    <button class="btn-category-toko">
                        <div class="card card-toko" onclick="location.href='<?= base_url('toko/kehamilan'); ?>'">
                            <div class="card-body">
                                <img src="<?= base_url('assets/img/toko-kategori-3.png'); ?>" alt="">
                                <h5>Kehamilan & Menyusui</h5>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col-md-4 my-3">
                    <button class="btn-category-toko">
                        <div class="card card-toko-secondary" onclick="location.href='<?= base_url('toko/perlengkapan'); ?>'">
                            <div class="card-body">
                                <img src="<?= base_url('assets/img/toko-kategori-4.png'); ?>" alt="">
                                <h5>Perlengkapan Bayi & Anak</h5>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="col-md-4 my-3">
                    <button class="btn-category-toko">
                        <div class="card card-toko" onclick="location.href='<?= base_url('#'); ?>'">
                            <div class="card-body">
                                <img src="<?= base_url('assets/img/toko-kategori-5.png'); ?>" alt="">
                                <h5>Nutrisi Bayi & Anak</h5>
                            </div>
                        </div>
                    </button>
                </div>
                <!-- <div class="col-md-4 my-3">
                    <button class="btn-category-toko">
                        <div class="card card-toko-secondary" onclick="location.href='<?= base_url('#'); ?>'">
                            <div class="card-body">
                                <img src="<?= base_url('assets/img/toko-kategori-1.png'); ?>" alt="">
                                <h5>Kesehatan Bayi & Anak</h5>
                            </div>
                        </div>
                    </button>
                </div> -->
            </div>
    </section>