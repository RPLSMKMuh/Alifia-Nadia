<?php

include 'koneksi.php';

if (!isset($_SESSION['role'])) {
    header("Location: login.php");
    exit();
}

$no = 0;
$query = mysqli_query($conn, "SELECT * FROM buku LEFT JOIN kategori_buku as kb ON buku.id_kategori = kb.id_kategori LEFT JOIN ulasan_buku as ub ON buku.id_buku = ub.id_buku");
$data = mysqli_fetch_array($query);

?>

<style>
    .box {
        display: flex;
        flex-wrap: wrap;
    }
</style>

<div class="container-fluid">
    <div class="btn-aksi justify-content-between align-items-center d-flex m-4">
        <a href="?page=buku" class="btn shadow-sm btn-primary fs-2 mx-2"><i class="fa-solid fa-backward-step"></i> Kembali</a>
        <!-- <a href="cetak_desk.php" class="btn mx-2 shadow-sm btn-secondary"><i class="fa-solid fa-print"></i> Cetak</a> -->
    </div>


    <div class="col box">
        <div class="col mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Sampul buku</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-capitalize"><img src="<?php echo $data['foto']; ?>" alt="" style="width:25rem;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                deskripsi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align:justify;"><?php echo $data['deskripsi']; ?></div>
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
                                Kategori buku</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800 text-capitalize"><?php echo $data['nama_kategori']; ?></div>
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
                                Penulis</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['penulis']; ?> Buku</div>
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
                                penerbit</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['penerbit']; ?> Ulasan</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
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
                                tahun terbit</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data['tahun_terbit']; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>