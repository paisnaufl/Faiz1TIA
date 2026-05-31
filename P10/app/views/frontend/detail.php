<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail - MasalahTempo</title>
    <link rel="stylesheet" href="/Faiz1TIA/P10/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Faiz1TIA/P10/public/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/Faiz1TIA/P10/public/assets/css/style.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="?aksi=frontend">
                <i class="bi bi-newspaper"></i> MasalahTempo
            </a>
            <div>
                <a href="?aksi=index" class="btn btn-light btn-sm">Login Admin</a>
            </div>
        </div>
    </nav>

    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <a href="?aksi=frontend" class="btn btn-outline-secondary mb-3"><i class="bi bi-arrow-left"></i> Kembali</a>
                <div class="card shadow-sm border-0">
                    <img src="public/uploads/<?= $berita['foto']; ?>" class="card-img-top" alt="<?= $berita['judul']; ?>">
                    <div class="card-body p-4">
                        <span class="btn bg-primary mb-2"><?= $berita['kategori']; ?></span>
                        <h2 class="fw-bold mb-3"><?= $berita['judul']; ?></h2>
                        <div class="text-muted mb-4 border-bottom pb-3">
                            <i class="bi bi-calendar3"></i> <?= date('d M Y', strtotime($berita['tanggal'])); ?>
                        </div>
                        <p><?= $berita['deskripsi']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/Faiz1TIA/p10/public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/Faiz1TIA/p10/public/assets/js/main.js"></script>
</body>

</html>