<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- My Style -->
    <link href="<?= base_url('assets/css/styles-register.css'); ?>" rel="stylesheet" />

    <!-- Logo title bar -->
    <link rel="icon" href="assets/img/Logo RSIA Kasih-01 1.png" type="image/x-icon">


    <title><?= $judul; ?></title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/Logo RSIA Kasih-01 1.png" alt="Logo" width="30" class="d-inline-block align-text-top me-3">RSIA Kasih</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?= base_url('#navbar'); ?>">Beranda</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?= base_url('#layanan'); ?>">Layanan</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?= base_url('#artikel'); ?>">Artikel</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?= base_url('about'); ?>">Tentang</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#footer">Kontak</a>
                    </li>
                </ul>
                <div>
                    <button class="button-secondary mx-2" onclick="location.href='#'">Login</button>
                </div>
            </div>
        </div>
    </nav>