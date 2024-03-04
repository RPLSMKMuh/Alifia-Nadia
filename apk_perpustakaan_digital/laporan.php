<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>

</head>

<div class="container-fluid">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <h1 class="justify-content-center d-flex text-capitalize"><b><?php echo ($_SESSION['role'] != 'peminjam') ? 'Laporan peminjaman buku' : 'Laporan peminjaman buku ' . $_SESSION['username']; ?></b></h1>
            <div class="row">
                <div class="col-md-12">
                    <a href="cetak.php" target="_blank" class="btn btn-primary my-3"><i class="ri-printer-fill mr-2 shadow-sm"></i>Cetak Data</a>
                    <table id="example" class="table shadow-sm table-hover" style="width:100%">
                        <thead>
                        <tr>
                            <th class="table-primary">No</th>
                            <?php if ($_SESSION['role'] != 'peminjam') { ?>
                                <th class="table-primary">User</th>
                            <?php } ?>
                            <th class="table-primary">Kategori</th>
                            <th class="table-primary">Judul Buku</th>
                            <th class="table-primary">Penulis</th>
                            <th class="table-primary">Penerbit - Tahun Terbit</th>
                            <th class="table-primary">Tanggal Peminjaman</th>
                            <th class="table-primary">Tanggal Pengemblian</th>
                            <th class="table-primary">Status Peminjaman</th>
                        </tr>
                        </thead>
                        <?php
                        $no = 0;
                        $query = mysqli_query($conn, "SELECT * FROM peminjaman as pj LEFT JOIN user ON user.id_user = pj.id_user LEFT JOIN buku ON buku.id_buku = pj.id_buku LEFT JOIN kategori_buku as katbuk ON katbuk.id_kategori = buku.id_kategori");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo ++$no; ?></td>
                                <?php if ($_SESSION['role'] != 'peminjam') { ?>
                                    <td><?php echo $data['username'] ?></td>
                                <?php } ?>
                                <td><?php echo $data['nama_kategori'] ?></td>
                                <td><?php echo $data['judul'] ?></td>
                                <td><?php echo $data['penulis'] ?></td>
                                <td><?php echo $data['penerbit'] ?> - <?php echo $data['tahun_terbit'] ?></td>
                                <td><?php echo $data['tgl_pinjam'] ?></td>
                                <td><?php echo $data['tgl_pengembalian'] ?></td>
                                <td><?php echo $data['status_pinjam'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


