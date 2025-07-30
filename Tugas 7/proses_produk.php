<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Status Pengiriman Data</h3>
            </div>
            <div class="card-body">
                <?php
                // Memeriksa apakah data dikirim melalui metode POST
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    // Validasi sederhana: Periksa apakah field yang wajib diisi (required) tidak kosong
                    if (!empty($_POST['nama_produk']) && !empty($_POST['harga']) && !empty($_POST['kategori'])) {
                        
                        // 1. Ambil data dan amankan dari serangan XSS
                        $nama_produk = htmlspecialchars($_POST['nama_produk']);
                        $deskripsi   = htmlspecialchars($_POST['deskripsi']);
                        $harga       = htmlspecialchars($_POST['harga']);
                        $kategori    = htmlspecialchars($_POST['kategori']);

                        // 2. Tampilkan pesan sukses dan data yang diterima
                        echo '<div class="alert alert-success" role="alert">';
                        echo '<strong>Terima kasih!</strong> Data produk berhasil diterima.';
                        echo '</div>';
                        
                        echo '<h4>Detail Produk yang Diterima:</h4>';
                        echo '<ul class="list-group">';
                        echo '<li class="list-group-item"><strong>Nama Produk:</strong> ' . $nama_produk . '</li>';
                        echo '<li class="list-group-item"><strong>Deskripsi:</strong> ' . $deskripsi . '</li>';
                        // Format harga agar lebih mudah dibaca
                        echo '<li class="list-group-item"><strong>Harga:</strong> Rp ' . number_format($harga, 0, ',', '.') . '</li>';
                        echo '<li class="list-group-item"><strong>Kategori:</strong> ' . $kategori . '</li>';
                        echo '</ul>';

                    } else {
                        // Jika ada field wajib yang kosong
                        echo '<div class="alert alert-danger" role="alert">';
                        echo '<strong>Error!</strong> Mohon lengkapi semua field yang wajib diisi (Nama Produk, Harga, dan Kategori).';
                        echo '</div>';
                    }
                } else {
                    // Jika halaman diakses langsung tanpa melalui form
                    echo '<div class="alert alert-warning" role="alert">';
                    echo 'Akses tidak diizinkan. Silakan isi formulir terlebih dahulu.';
                    echo '</div>';
                }
                ?>
                <a href="index.html" class="btn btn-primary mt-3">Kembali ke Formulir</a>
            </div>
        </div>
    </div>
</body>
</html>