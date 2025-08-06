<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $id = intval($_POST['id']);
        
        if ($id <= 0) {
            throw new Exception('ID produk tidak valid');
        }
        
        // Cek apakah produk ada
        $stmt = $pdo->prepare("SELECT * FROM produk WHERE id = ?");
        $stmt->execute([$id]);
        $produk = $stmt->fetch();
        
        if (!$produk) {
            throw new Exception('Produk tidak ditemukan');
        }
        
        // Hapus gambar dari server jika ada
        if (!empty($produk['gambar']) && file_exists('../' . $produk['gambar'])) {
            unlink('../' . $produk['gambar']);
        }
        
        // Hapus dari database
        $stmt = $pdo->prepare("DELETE FROM produk WHERE id = ?");
        $result = $stmt->execute([$id]);
        
        if ($result) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Produk berhasil dihapus'
            ]);
        } else {
            throw new Exception('Gagal menghapus produk');
        }
        
    } catch (Exception $e) {
        echo json_encode([
            'status' => 'error',
            'message' => $e->getMessage()
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Method tidak diizinkan'
    ]);
}
?> 