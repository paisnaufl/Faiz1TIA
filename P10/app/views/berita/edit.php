<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="adminHMD professional admin dashboard template">
    <title>Tables | adminHMD</title>

    <link rel="stylesheet" href="/Faiz1TIA/P10/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Faiz1TIA/P10/public/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/Faiz1TIA/P10/public/assets/css/style.css">
</head>

<body>
    <div class="admin-shell">
        <div class="sidebar-backdrop" data-sidebar-close></div>

        <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
            <div class="sidebar-header">
                <a class="brand-mark" href="index.html" aria-label="adminHMD dashboard">
                    <span class="brand-icon"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i></span>
                    <span class="brand-copy">
                        <span class="brand-title">MasalahTempo</span>
                        <span class="brand-subtitle">Just Friend</span>
                    </span>
                </a>
            </div>

            <nav class="sidebar-nav">
                <a class="nav-link active" href="tables.html" aria-current="page">
                    <span class="nav-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
                    <span class="nav-text">Berita</span>
                </a>
                <a class="nav-link" href="index.php?aksi=user" aria-current="page">
                    <span class="nav-icon"><i class="bi bi-person" aria-hidden="true"></i></span>
                    <span class="nav-text">User</span>
                </a>
                <a class="nav-link" href="modals.html">
                    <span class="nav-icon"><i class="bi bi-window-stack" aria-hidden="true"></i></span>
                    <span class="nav-text">Modals</span>
                </a>
                <a class="nav-link" href="settings.html">
                    <span class="nav-icon"><i class="bi bi-gear" aria-hidden="true"></i></span>
                    <span class="nav-text">Settings</span>
                </a>
                <a class="nav-link" href="blank.html">
                    <span class="nav-icon"><i class="bi bi-file-earmark" aria-hidden="true"></i></span>
                    <span class="nav-text">Blank Page</span>
                </a>
            </nav>
        </aside>

        <div class="admin-main">
            <nav class="navbar admin-navbar navbar-expand bg-white">
                <div class="container-fluid px-3 px-lg-4">
                    <button class="sidebar-toggle" type="button" data-sidebar-toggle aria-controls="adminSidebar"
                        aria-expanded="true" aria-label="Toggle sidebar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <form class="d-none d-md-flex ms-3 flex-grow-1" role="search">
                        <input class="form-control search-input" type="search"
                            placeholder="Search users, orders, reports" aria-label="Search">
                    </form>

                    <div class="navbar-actions ms-auto">
                        <button class="icon-button theme-toggle" type="button" data-theme-toggle
                            aria-label="Switch color theme" title="Switch color theme">
                            <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </nav>

            <main class="dashboard-content">
                <div class="container-fluid px-3 px-lg-4 py-4">
                    <div class="page-heading">
                        <div class="page-heading-copy">
                            <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
                            <div>
                                <p class="eyebrow mb-1">Data</p>
                                <h1 class="h3 mb-1">Edit</h1>
                            </div>
                        </div>

                    </div>
                    <section class="panel">
                        <div class="panel-body p-4">
                            <form action="/Faiz1TIA/P10/index.php?aksi=update" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?=$berita['id'];?>">
                                <div class="mb-3">
                                    <label class="form-label">Judul</label>
                                    <input type="text" name="judul" class="form-control" value="<?=$berita['judul'];?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control" value="<?=$berita['deskripsi'];?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kategori</label>
                                    <select name="kategori" class="form-control" required>
                                        <option value="Teknologi" <?= ($berita['kategori'] == 'Teknologi') ? 'selected' : ''; ?>>Teknologi</option>
                                        <option value="Olahraga" <?= ($berita['kategori'] == 'Olahraga') ? 'selected' : ''; ?>>Olahraga</option>
                                        <option value="Pendidikan" <?= ($berita['kategori'] == 'Pendidikan') ? 'selected' : ''; ?>>Pendidikan</option>
                                        <option value="Politik" <?= ($berita['kategori'] == 'Politik') ? 'selected' : ''; ?>>Politik</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Foto Lama</label>
                                    <img src="/Faiz1TIA/p10/public/uploads/<?=$berita['foto'];?>" width="150" class="img-thumnail">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Ganti Foto</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" value="<?= $berita['tanggal'];?>" required>
                                </div>
                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-save">Update</i>
                                    </button>
                                    <a href="/Faiz1TIA/P10/index.php?aksi=index">
                                        <i class="bi bi-arrow-left">Kembali</i>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </main>

            <footer class="admin-footer">
                <div class="container-fluid px-3 px-lg-4">
                    <span>Copyright 2026 adminHMD. <br> Developed by <a target="_blank" class="fw-bold text-success"
                            href="https://github.com/HasanMahmudDev">Md. Hasan Mahmud</a> • Distributed by <a
                            target="_blank" class="fw-bold text-success" href="https://themewagon.com">ThemeWagon</a>
                    </span>
                    <span>Professional dashboard template.</span>
                    <span>Responsive table examples.</span>
                </div>
            </footer>
        </div>
    </div>

    <script src="/p10/public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/p10/public/assets/js/main.js"></script>
</body>

</html>