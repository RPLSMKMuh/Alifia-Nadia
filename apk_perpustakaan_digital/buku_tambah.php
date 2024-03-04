<?php include 'koneksi.php'; ?>

<div class="container">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <h1 class="justify-content-center d-flex mb-4"><b>Tambah Daftar Buku</b></h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <?php
                        if (isset($_POST['submit'])) {
                            $id_kategori = $_POST['id_kategori'];
                            $judul = $_POST['judul'];
                            $penulis = $_POST['penulis'];
                            $penerbit = $_POST['penerbit'];
                            $tahun_terbit = $_POST['tahun_terbit'];
                            $deskripsi = $_POST['deskripsi'];
                            $namafoto = $_FILES['foto']['name'];
                            // tempat yang akan dituju saat mengupload foto
                            $fotopindah = 'uploads/' . $namafoto;
                            // darimana foto itu diambil
                            move_uploaded_file($_FILES['foto']['tmp_name'], $fotopindah);

                            $query = "INSERT INTO buku(id_kategori, judul, penulis, penerbit, tahun_terbit, deskripsi, foto) VALUES ('$id_kategori', '$judul', '$penulis', '$penerbit', '$tahun_terbit', '$deskripsi', '$fotopindah')";
                            $result = mysqli_query($conn, $query);
                            // print_r($_FILES);
                            //die;

                            if ($result) {
                                echo "<script>alert('Data berhasil ditambahkan.')</script>";
                            } else {
                                echo "<script>alert('Data gagal ditambahkan.')</script>";
                            }
                        }
                        ?>

                        <!-- input -->
                        <div class="row my-3">
                            <div class="col-md-3">Kategori</div>
                            <div class="col-md-8">
                                <select name="id_kategori" id="id_kategori" class="form-control">
                                    <?php
                                    $query = mysqli_query($conn, "SELECT * FROM kategori_buku");
                                    while ($kategori = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?php echo $kategori['id_kategori']; ?>">
                                            <?php echo $kategori['nama_kategori']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <?php //print_r($_POST); die; 
                        ?>

                        <div class="row my-3">
                            <div class="col-md-3">Judul</div>
                            <div class="col-md-8"><input type="text" class="form-control" name="judul"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Penulis</div>
                            <div class="col-md-8"><input type="text" class="form-control" name="penulis"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Penerbit</div>
                            <div class="col-md-8"><input type="text" class="form-control" name="penerbit"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Tahun Terbit</div>
                            <div class="col-md-8"><input type="text" class="form-control" name="tahun_terbit"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Deskripsi</div>
                            <div class="col-md-8"><textarea class="form-control" name="deskripsi"></textarea></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Foto</div>
                            <div class="col-md-8"><input type="file" class="form-control" name="foto"></div>
                        </div>


                        <div class="row">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <a href="?page=buku" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
