<?php
session_start();
// Cek sesi login
if (!isset($_SESSION['status_login']) || $_SESSION['role'] != 'admin') {
    header("Location: ../index.php");
    exit;
}
include '../config/koneksi.php';

// Hitung Data Cepat
$jml_guru = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE role='guru'"));
$jml_siswa = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE role='murid'"));
$jml_kelas = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM kelas"));
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - EduFlow</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <?php include '../layout/sidebar.php'; ?>

    <main class="main-content">
        
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h2 class="brand-font mb-1">Halo, <?= $_SESSION['nama']; ?>! 👋</h2>
                <p class="text-muted small">Semua sistem berjalan normal hari ini.</p>
            </div>
            <div class="bg-white py-2 px-4 rounded-pill shadow-sm d-flex align-items-center gap-2">
                <span class="badge bg-success rounded-circle p-1"> </span>
                <span class="small fw-bold text-muted">Tahun Ajaran Aktif</span>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card-stat">
                    <div class="icon-stat bg-blue-soft">👨‍🏫</div>
                    <p class="text-muted small mb-1 fw-bold">TOTAL PENGAJAR</p>
                    <h2 class="brand-font mb-0"><?= $jml_guru; ?> Guru</h2>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-stat">
                    <div class="icon-stat bg-orange-soft">🎓</div>
                    <p class="text-muted small mb-1 fw-bold">TOTAL SISWA</p>
                    <h2 class="brand-font mb-0"><?= $jml_siswa; ?> Siswa</h2>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-stat">
                    <div class="icon-stat bg-green-soft">🏫</div>
                    <p class="text-muted small mb-1 fw-bold">KELAS AKTIF</p>
                    <h2 class="brand-font mb-0"><?= $jml_kelas; ?> Rombel</h2>
                </div>
            </div>
        </div>

        <div class="mt-5 p-5 bg-white rounded-4 shadow-sm text-center">
            <div style="font-size: 50px; margin-bottom: 20px;">🚀</div>
            <h4 class="brand-font">Siap memulai hari?</h4>
            <p class="text-muted">Kelola data jurusan, kelas, dan pengguna melalui menu di samping.</p>
        </div>

    </main>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>