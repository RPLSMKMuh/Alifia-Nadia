<div class="container">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <h1 class="justify-content-center d-flex"><b>Tambah User</b></h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST">

                        <?php
                        if (isset($_POST['submit'])) {
                            // $role = $_SESSION['role'];
                            $id_user = $_POST['id_user'];
                            $nama_lengkap = $_POST['nama_lengkap'];
                            $email = $_POST['email'];
                            $username = $_POST['username'];
                            $alamat = $_POST['alamat'];
                            $telepon = $_POST['telepon'];

                            $query = mysqli_query($conn, "INSERT INTO user (username, email, nama_lengkap, alamat, telepon) VALUES ('$username', '$email', '$nama_lengkap', '$alamat', '$telepon')");
                            // $result = mysqli_query($conn, $query);

                            if ($query) {
                                echo "<script>alert('Data berhasil ditambahkan.')</script>";
                            } else {
                                echo "<script>alert('Data gagal ditambahkan.')</script>";
                            }
                        }
                        ?>

                        <?php //print_r($_POST); die; 
                        ?>

                        <!-- input -->
                        <div class="row mb-3">
                            <div class="col-md-3">Level</div>
                            <div class="col-md-8">
                                <select name="id_user" class="form-control">
                                    <?php
                                    $role = mysqli_query($conn, "SELECT*FROM user");
                                    while ($user = mysqli_fetch_array($role)) {
                                    ?>
                                        <option value="<?php echo $user['id_user']; ?>"><?php echo $user['role']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Nama</div>
                            <div class="col-md-8"><input type="text" class="form-control" name="nama_lengkap"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Username</div>
                            <div class="col-md-8"><input type="text" class="form-control" name="username"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Email</div>
                            <div class="col-md-8"><input type="text" class="form-control" name="email"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Alamat</div>
                            <div class="col-md-8"><input type="text" class="form-control" name="alamat"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">No. Telepon</div>
                            <div class="col-md-8"><input type="number" class="form-control" name="telepon" value="+62 "></div>
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