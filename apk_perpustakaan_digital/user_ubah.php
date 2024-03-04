<div class="container">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <h1 class="justify-content-center d-flex">Ubah Daftar User</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST">

                        <?php
                        $id = $_GET['id'];
                        if (isset($_POST['submit'])) {
                            // Periksa input nomor telepon untuk keamanan
                            // $role = $_SESSION['role'];
                            $nama_lengkap = $_POST['nama_lengkap'];
                            $alamat = $_POST['alamat'];
                            $username = $_POST['username'];
                            $email = $_POST['email'];
                            $telepon = $_POST['telepon'] ; // Periksa apakah telepon diisi atau tidak

                            // Update data user ke database
                            $query = mysqli_query($conn, "UPDATE user SET nama_lengkap= '$nama_lengkap', alamat='$alamat', username= '$username', email='$email', telepon='$telepon' WHERE id_user=$id");

                            // Beri pesan alert berdasarkan hasil query
                            if ($query) {
                                echo "<script>alert('Data berhasil diperbarui.')</script>";
                            } else {
                                echo "<script>alert('Data gagal diperbarui.')</script>";
                            }
                        }

                        // Ambil data user berdasarkan ID
                        $query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = $id");
                        $data = mysqli_fetch_array($query);
                        ?>

                        <!-- input -->
                        <div class="row my-3">
                            <div class="col-md-3">Nama Lengkap</div>
                            <div class="col-md-8"><input type="text" value="<?php echo $data['nama_lengkap']; ?>" class="form-control" name="nama_lengkap"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Username</div>
                            <div class="col-md-8"><input type="text" value="<?php echo $data['username']; ?>" class="form-control" name="username"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Email</div>
                            <div class="col-md-8"><input type="text" value="<?php echo $data['email']; ?>" class="form-control" name="email"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Alamat</div>
                            <div class="col-md-8"><input type="text" value="<?php echo $data['alamat']; ?>" class="form-control" name="alamat"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">No. Telepon</div>
                            <div class="col-md-8"><input type="text" value="+62 <?php echo $data['telepon']; ?>" class="form-control" name="telepon"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <a href="?page=user" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
