<nav class="sidebar">
    <a href="admin.php" class="brand-box text-decoration-none">
        <div class="logo-icon">⚡</div>
        <div class="brand-font fs-4 fw-bold">EduFlow</div>
    </a>
    
    <div class="d-flex flex-column">
        <a href="admin.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'admin.php') ? 'active' : ''; ?>">
            <span>🏠</span> Dashboard
        </a>
        
        <div class="menu-label">Master Data</div>
        
        <a href="admin_jurusan.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'admin_jurusan.php') ? 'active' : ''; ?>">
            <span>📚</span> Jurusan
        </a>
        <a href="admin_kelas.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'admin_kelas.php') ? 'active' : ''; ?>">
            <span>🏫</span> Data Kelas
        </a>
        <a href="admin_mapel.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'admin_mapel.php') ? 'active' : ''; ?>">
            <span>📝</span> Mata Pelajaran
        </a>
        <a href="admin_tahun.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'admin_tahun.php') ? 'active' : ''; ?>">
            <span>📆</span> Tahun Ajaran
        </a>
        
        <div class="menu-label">Akademik</div>
        
        <a href="admin_user.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'admin_user.php') ? 'active' : ''; ?>">
            <span>👥</span> Guru & Siswa
        </a>
        <a href="admin_plotting.php" class="nav-link <?= (basename($_SERVER['PHP_SELF']) == 'admin_plotting.php') ? 'active' : ''; ?>">
            <span>🔐</span> Plotting Kelas
        </a>

        <a href="../logout.php" class="nav-link text-danger mt-5">
            <span>🚪</span> Keluar
        </a>
    </div>
</nav>