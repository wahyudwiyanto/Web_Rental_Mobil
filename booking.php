<?php
// Mengecek apakah form telah dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $mobil = $_POST['mobil'];
    $tanggal_sewa = $_POST['tanggal_sewa'];
    $durasi_sewa = $_POST['durasi_sewa'];

    // Validasi form (contoh sederhana)
    if (empty($nama) || empty($email) || empty($telepon) || empty($mobil) || empty($tanggal_sewa) || empty($durasi_sewa)) {
        echo 'Silakan lengkapi semua field dalam form pesanan.';
        return;
    }

    // Proses penyimpanan pesanan ke database atau sistem lainnya
    // ...

    // Menampilkan pesan sukses
    echo 'Pesanan Anda berhasil diproses. Terima kasih!';
}
?>
