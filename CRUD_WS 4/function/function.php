<?php function input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function handleError($message, $stmt = null) {
    if ($stmt) $stmt->close();
    return "<div class='alert alert-danger mt-4'>" . $message . "</div>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = input($_POST["nama"]);
    $kelas = input($_POST["kelas"]);
    $nim = input($_POST["NIM"]);
    
    if (empty($nama) || empty($kelas) || empty($nim)) {
        echo handleError("Semua field harus diisi");
        exit();
    }

    $sql = "INSERT INTO mahasiswa (nama, kelas, NIM) VALUES (?, ?, ?)";
    
    if ($stmt = $koneksi->prepare($sql)) {
        $stmt->bind_param("sss", $nama, $kelas, $nim);
        
        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            echo handleError("Gagal menambahkan Mahasiswa: " . $stmt->error, $stmt);
        }
        $stmt->close();
    } else {
        echo handleError("Gagal mempersiapkan statement: " . $koneksi->error);
    }
    $koneksi->close();
}

$enum_list = [];
$result = mysqli_query($koneksi, "SHOW COLUMNS FROM mahasiswa WHERE Field = 'kelas'");
if ($result) {
    $row = mysqli_fetch_array($result);
    preg_match("/^enum\(\'(.*)\'\)$/", $row['Type'], $matches);
    $enum_list = explode("','", $matches[1]);
}

// Get ENUM values
$query = "SHOW COLUMNS FROM mahasiswa LIKE 'kelas'";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$enum_list = explode(",", str_replace("'", "", substr($row['Type'], 5, -1)));

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = input($_POST["nama"]);
    $kelas = input($_POST["kelas"]);
    $nim = input($_POST["NIM"]);
    
    $sql = "UPDATE mahasiswa SET nama=?, kelas=?, NIM=? WHERE id=?";
    
    if ($stmt = $koneksi->prepare($sql)) {
        $stmt->bind_param("sssi", $nama, $kelas, $nim, $id);
        
        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            $error = "Gagal mengupdate data: " . $stmt->error;
        }
        $stmt->close();
    }
}

$sql = "SELECT * FROM mahasiswa WHERE id = ?";
if ($stmt = $koneksi->prepare($sql)) {
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
}


?>
