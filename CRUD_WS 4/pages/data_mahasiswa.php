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
        <div class="col-md-10">
            <h4 class="mb-4 text-center">Data Mahasiswa</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>NIM</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM mahasiswa";
                        $hasil = mysqli_query($koneksi, $sql);
                        while ($data = mysqli_fetch_assoc($hasil)): ?>
                            <tr>
                                <td><?= htmlspecialchars($data['nama']) ?></td>
                                <td><?= htmlspecialchars($data['kelas']) ?></td>
                                <td><?= htmlspecialchars($data['NIM']) ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="update.php?id=<?= $data['id'] ?>" 
                                           class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="../function/delete.php?id=<?= $data['id'] ?>" 
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Yakin ingin menghapus?')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <a href="index.php" class="btn btn-secondary btn-lg w-100 my-3 text-white">Kembali</a>
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
