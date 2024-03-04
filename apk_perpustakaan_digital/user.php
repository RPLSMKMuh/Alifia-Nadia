<?php

require_once 'koneksi.php';

?>

<div class="container-fluid">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <h1 class="justify-content-center d-flex"><b>Daftar User</b></h1>
            <div class="row">
                <div class="col-md-12">
                    <a href="?page=user_tambah" class="btn btn-primary my-3 shadow-sm"> <i class="ri ri-user-add-line"></i> Tambah User</a>
                    <table class="table table-striped table-hover shadow-sm">
                        <tr>
                            <th class="table-primary">No</th>
                            <th class="table-primary">Level</th>
                            <th class="table-primary">Nama</th>
                            <th class="table-primary">Username</th>
                            <th class="table-primary">Email</th>
                            <th class="table-primary">Alamat</th>
                            <th class="table-primary">No. Telepon</th>
                            <th class="table-primary">Aksi</th>
                        </tr>

                        <?php
                        $no = 0;
                        $query = mysqli_query($conn, "SELECT * FROM user");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $data['role'] ?></td>
                                <td><?php echo $data['nama_lengkap'] ?></td>
                                <td><?php echo $data['username'] ?></td>
                                <td><?php echo $data['email'] ?></td>
                                <td><?php echo $data['alamat'] ?></td>
                                <td>+62 <?php echo $data['telepon'] ?></td>
                                <td>
                                    <a href="?page=user_ubah&id=<?php echo $data['id_user'] ?>" class="btn btn-primary my-1">Ubah</a>
                                    <a href="?page=user_hapus&id=<?php echo $data['id_user'] ?>" class="btn btn-danger my-1" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>