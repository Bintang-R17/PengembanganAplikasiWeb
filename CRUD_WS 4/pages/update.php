<?php include '../function/koneksi.php'; 
function input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$query = "SHOW COLUMNS FROM mahasiswa LIKE 'kelas'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$enum_list = explode(",", str_replace("'", "", substr($row['Type'], 5, -1)));

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = input($_POST["nama"]);
    $kelas = input($_POST["kelas"]);
    $nim = input($_POST["NIM"]);
    
    $errors = [];
    if (empty($nama)) $errors[] = "Nama tidak boleh kosong";
    if (empty($kelas)) $errors[] = "Kelas harus dipilih";
    if (empty($nim)) {
        $errors[] = "NIM tidak boleh kosong";
    } elseif (!preg_match("/^\d{8}$/", $nim)) {
        $errors[] = "NIM harus 8 digit angka";
    }
    
    if (empty($errors)) {
        $sql = "UPDATE mahasiswa SET nama=?, kelas=?, NIM=? WHERE id=?";
        
        if ($stmt = $koneksi->prepare($sql)) {
            $stmt->bind_param("sssi", $nama, $kelas, $nim, $id);
            
            if ($stmt->execute()) {
                header("Location: data_mahasiswa.php");
                exit();
            } else {
                $error = "Gagal mengupdate data: " . $stmt->error;
            }
            $stmt->close();
        }
    } else {
        $error = implode("<br>", $errors);
    }
}

$sql = "SELECT * FROM mahasiswa WHERE id = ?";
if ($stmt = $koneksi->prepare($sql)) {
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
    
    if (!$data) {
        header("Location: data_mahasiswa.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
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
    <main class="container flex-grow-1">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-user-edit me-2"></i>Edit Data Mahasiswa</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
                        
                        <form method="POST">
                            <div class="mb-4">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" 
                                       value="<?= htmlspecialchars($data['nama'] ?? '') ?>" required>
                            </div>
                            <div class="mb-4">
                                <label for="kelas" class="form-label">Kelas</label>
                                <select class="form-select" id="kelas" name="kelas" required>
                                    <?php foreach ($enum_list as $kelas_value): ?>
                                        <option value="<?= htmlspecialchars($kelas_value) ?>"
                                                <?= ($data['kelas'] ?? '') === $kelas_value ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($kelas_value) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="NIM" class="form-label">NIM</label>
                                <input type="text" class="form-control" id="NIM" name="NIM" 
                                       value="<?= htmlspecialchars($data['NIM'] ?? '') ?>" required>
                            </div>
                            <div class="d-grid gap-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Update
                                </button>
                                <a href="data_mahasiswa.php" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Kembali
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <footer class="footer text-white text-center py-3   ">
        <p class="mb-0">Dikerjakan oleh Bintang Rizqi Anugrah/23523195/A</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>