<?php

include 'koneksi.php';

?>

<div class="container-fluid">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <h1 class="justify-content-center d-flex"><b>Kategori Buku</b></h1>
            <div class="row">
                <div class="col-md-12">
                    <a href="?page=kategori_tambah" class="btn btn-primary my-3">+ Tambah Data</a>
                    <table class="table table-hover shadow-sm">
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                            $no = 0;
                            $query = mysqli_query($conn, "SELECT * FROM kategori_buku");
                            while ($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo ++$no; ?></td>
                            <td><?php echo $data['nama_kategori'] ?></td>
                            <td>
                                <a href="?page=kategori_ubah&&id=<?php echo $data['id_kategori'] ?>" class="btn btn-primary">Ubah</a>
                                <a href="?page=kategori_hapus&&id=<?php echo $data['id_kategori'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>