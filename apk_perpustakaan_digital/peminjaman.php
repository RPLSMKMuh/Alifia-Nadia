<div class="container-fluid">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <h1 class="justify-content-center d-flex text-capitalize"><b>Daftar pinjam <?php echo $_SESSION['username']; ?></b></h1>
            <div class="row">
                <div class="col-md-12">
                    <a href="?page=peminjaman_tambah" class="btn btn-primary my-3"><i class="fa fa-plus"></i> Tambah Peminjaman</a>
                    <table class="table shadow-sm table-hover">
                        <tr>
                            <th class="table-primary">No</th>
                            <th class="table-primary">Buku</th>
                            <th class="table-primary">Tanggal Peminjaman</th>
                            <th class="table-primary">Tanggal Pengembalian</th>
                            <th class="table-primary">Status Peminjaman</th>
                            <th class="table-primary">Aksi</th>
                        </tr>
                        <?php
                        $no = 0;
                        $id_user = $_SESSION['id_user']; // Simpan nilai dari $_SESSION['id_user'] ke dalam variabel $id_user
                        $query = mysqli_query($conn, "SELECT * FROM peminjaman as pj LEFT JOIN user ON user.id_user = pj.id_user LEFT JOIN buku ON buku.id_buku = pj.id_buku WHERE pj.id_user = '$id_user'");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>

                            <tr>
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $data['judul'] ?></td>
                                <td><?php echo $data['tgl_pinjam'] ?></td>
                                <td><?php echo $data['tgl_pengembalian'] ?></td>
                                <td><?php echo $data['status_pinjam'] ?></td>
                                <td>
                                    <?php
                                    if($data['status_pinjam'] != 'dikembalikan') {
                                    ?>
                                <a href="?page=peminjaman_ubah&&id=<?php echo $data['id_peminjaman'] ?>" class="btn btn-primary my-1">Ubah</a>
                                <a href="?page=peminjaman_hapus&&id=<?php echo $data['id_peminjaman'] ?>" class="btn btn-danger my-1" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</a>
                                <?php } ?>
                            </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>