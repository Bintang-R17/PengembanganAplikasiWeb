<?php
include 'koneksi.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id > 0) {
    $sql = "DELETE FROM mahasiswa WHERE id = ?";
    
    if ($stmt = $koneksi->prepare($sql)) {
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
            header("Location: ../pages/data_mahasiswa.php");
            exit();
        } else {
            die("Error deleting record: " . $stmt->error);
        }
        
        $stmt->close();
    }
}

$koneksi->close();
header("Location: index.php");
?>