<?php

include 'koneksi.php';

if (!isset($_SESSION['role'])) {
    header("Location: login.php");
    exit(); 
}

$nama_hari = array(
    'Sunday' => 'Minggu',
    'Monday' => 'Senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu'
);


// Mendapatkan tanggal saat ini dalam format l, d M Y
$tanggal = date('l, d M Y');

// Mengganti nama hari dalam Bahasa Indonesia
foreach ($nama_hari as $hari_inggris => $hari_indonesia) {
    $tanggal = str_replace($hari_inggris, $hari_indonesia, $tanggal);
}
?>

<style>
    .box {
        display: flex;
        flex-wrap: wrap;
    }
</style>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="cetak.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="col box">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Kategori</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM kategori_buku")); ?> Kategori Buku</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Buku</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM buku")); ?> Buku</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total ulasan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM ulasan_buku")); ?> Ulasan</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4 cards -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Pengguna</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user")); ?> Pengguna</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- users -->
    <div class="card mx-4 border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <table class="table table-border text-capitalize">
                <tr>
                    <td width="200"><i class="fas fa-user-tag text-gray-300"></i> Username</td>
                    <td width="1">:</td>
                    <td><?php echo $_SESSION['nama_lengkap']; ?></td>
                </tr>
                <tr>
                    <td width="200"><i class="fas fa-envelope text-gray-300"></i> Email</td>
                    <td width="1">:</td>
                    <td class="text-lowercase"><?php echo $_SESSION['email']; ?></td>
                </tr>
                <tr>
                    <td width="200"><i class="fas fa-users text-gray-300"></i> Role User</td>
                    <td width="1">:</td>
                    <td><?php echo $_SESSION['role']; ?></td>
                </tr>
                <tr>
                    <td width="200"><i class="fas fa-clock text-gray-300"></i> Waktu Login</td>
                    <td width="1">:</td>
                    <td><?php date_default_timezone_set('Asia/Jakarta'); echo date('H:i:s'); ?> WIB</td>
                </tr>
                <tr>
                    <td width="200"><i class="fas fa-calendar text-gray-300"></i> Tanggal Login</td>
                    <td width="1">:</td>
                    <td><?php echo $tanggal; ?></td>
                </tr>
            </table>
        </div>
    