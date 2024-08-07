<!-- Register Paien Baru -->
<section id="register-pasien">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bc-about">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Registrasi Pasien Baru</li>
        </ol>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Registrasi Pasien Baru</h2>
                <hr>
            </div>
        </div>
        <div class="row form-register">
            <div class="col-md-6">
                <div class="mb-4">
                    <label for="formGroupExampleInput" class="form-label">Nama Pasien</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Lengkap Anda">
                </div>
                <div class="mb-4">
                    <label for="formGroupExampleInput" class="form-label">No. Kartu Identitas</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="No. Kartu Identitas">
                </div>
                <div class="mb-4">
                    <label for="#">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="formGroupExampleInput" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tempat Lahir Anda">
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="formGroupExampleInput" class="form-label">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tanggal Lahir Anda">
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="formGroupExampleInput" class="form-label">Umur</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Umur Anda">
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="#">Alamat</label>
                        <textarea rows="5" cols="40" name="nama_variabel"></textarea>
                    </div>
                    <div class="mb-4 mt-4">
                        <label for="formGroupExampleInput" class="form-label">No. Handphone</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="No. Handphone">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</section>