<?php include '../function/koneksi.php'; include '../function/function.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../style/style.css">

</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg px-4 py-3" style="background-color: darkturquoise;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-4"><a href="index.php" class="nav-link text-white">Home</a></li>
                    <li class="nav-item px-4"><a href="index.php" class="nav-link text-white">Materi Kuliah</a></li>
                    <li class="nav-item px-4"><a href="index.php" class="nav-link text-white">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4 fw-bold">Registrasi Mahasiswa</h2>
                        <form method="POST" action="">
                            <div class="mb-4">
                                <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
                            </div>
                            <div class="mb-4">
                                <label for="kelas" class="form-label fw-semibold">Kelas</label>
                                <select class="form-select form-select-lg" id="kelas" name="kelas" required>
                                    <option value="">Pilih Kelas</option>
                                    <?php foreach ($enum_list as $kelas_value): ?>
                                        <option value="<?= htmlspecialchars($kelas_value) ?>">
                                            <?= htmlspecialchars($kelas_value) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="NIM" class="form-label fw-semibold">NIM</label>
                                <input type="text" class="form-control form-control-lg" id="NIM" name="NIM" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg w-100">Submit</button>
                          </form>
                          <a href="data_mahasiswa.php" class="btn btn-primary btn-lg w-100 my-3 text-white">Lihat Data</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-white text-center py-3 mt-auto" style="background-color: darkturquoise;">
        <p class="mb-0">Dikerjakan oleh Bintang Rizqi Anugrah/23523195/A</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>