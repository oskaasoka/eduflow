<?php
session_start();
include 'config/koneksi.php';

// Jika tombol login ditekan
if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek User di Database
    $query = mysqli_query($conn, "SELECT * FROM user WHERE username_user='$username'");
    
    // Jika Username Ada
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);
        
        // Cek Password
        if ($password == $data['password_user']) {
            // Set Session
            $_SESSION['status_login'] = true;
            $_SESSION['nama'] = $data['nama_user'];
            $_SESSION['role'] = $data['role'];
            $_SESSION['id_user'] = $data['id_user'];

            // Redirect (Arahkan) sesuai Role
            if ($data['role'] == 'admin') {
                header("Location: pages/admin.php");
            } elseif ($data['role'] == 'guru') {
                header("Location: pages/guru.php");
            } elseif ($data['role'] == 'murid') {
                header("Location: pages/siswa.php");
            }
            exit;
        } else {
            $error = "Password salah, coba ingat-ingat lagi.";
        }
    } else {
        $error = "Akun tidak ditemukan.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - EduFlow</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="login-body">

    <div class="login-card">
        <div class="text-center mb-5">
            <div class="logo-box">⚡</div>
            <h2 class="brand-font mb-1">EduFlow</h2>
            <p class="text-muted">Platform belajar masa kini.</p>
        </div>

        <?php if(isset($error)): ?>
            <div class="alert alert-danger border-0 rounded-3 small py-2 mb-4 text-center">
                ⚠️ <?= $error ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label small fw-bold text-muted ps-1">Username / NIS</label>
                <input type="text" name="username" class="form-control" placeholder="Ketik username kamu..." required>
            </div>
            
            <div class="mb-4">
                <label class="form-label small fw-bold text-muted ps-1">Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>

            <button type="submit" name="btn_login" class="btn btn-primary w-100 mb-3">
                Masuk Sekarang
            </button>
            
            <div class="text-center">
                <a href="#" class="text-decoration-none small text-muted">Lupa password?</a>
            </div>
        </form>
    </div>

</body>
</html>