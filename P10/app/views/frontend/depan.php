<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Faiz1TIA/P10/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Faiz1TIA/P10/public/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/Faiz1TIA/P10/public/assets/css/style.css">
</head>
<body class="bg-light">
    <nav class="navbar navar-expand-lg navbar-dark bg-primary mb-4 shadow-sm">
        <div class="container">
            <a href="?aksi=frontend" class="navbar-brand fw-bold">
                <i class="bi bi-newspapaer"></i>Masalah Tempo
            </a>
            <div>
                <a href="?aksi=index" class="btn btn-light btn-sm">Login Admin</a>
            </div>
        </div>
    </nav>
    <div class="container pb-5">
        <h2 class="mb-4">Berita Terbaru</h2>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
            <?php while($row = mysqli_fetch_assoc($berita)) : ?>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="public/uploads/<?=$row['foto'];?>" alt="<?= $row['judul']; ?>" class="card-img-top" style="height:200px; object-fit:cover">
                        <div class="card-body">
                            <small class="text-muted d-block mb-2">
                                <i class="bi bi-calendar3"></i><?= date('d M Y', strtotime($row['tanggal'])); ?>
                            </small>
                            <h5 class="card-title fw-bold"><?=$row['judul'];?></h5>
                            <p class="card-text text-secondary">
                                <?= substr($row['deskripsi'],0,90); ?>...
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-3">
                            <a href="#" class="btn btn-outline-primary w-100">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
        </div>
    </div>
    <script src="/Faiz1TIA/p10/public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/Faiz1TIA/p10/public/assets/js/main.js"></script>
</body>
</html>