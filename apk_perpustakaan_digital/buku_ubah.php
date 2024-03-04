<div class="container">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <h1 class="justify-content-center d-flex mb-4"><b>Ubah Daftar Buku</b></h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <?php
                        include 'koneksi.php';

                        $id = $_GET['id'];
                        if (isset($_POST['submit'])) {
                            $id_kategori = $_POST['id_kategori'];
                            $judul = $_POST['judul'];
                            $penulis = $_POST['penulis'];
                            $penerbit = $_POST['penerbit'];
                            $tahun_terbit = $_POST['tahun_terbit'];
                            $deskripsi = $_POST['deskripsi'];

                            // Perhatikan bahwa nama input untuk file harus sama dengan nama field di database
                            $foto = $_FILES['foto']['name'];
                            $temp_foto = $_FILES['foto']['tmp_name'];
                            // Lokasi penyimpanan file secara permanen
                            $folder_foto = 'uploads/' . $foto;
                            // Pindahkan file ke folder yang ditentukan
                            move_uploaded_file($temp_foto, $folder_foto);

                            $query = mysqli_query($conn, "UPDATE buku SET id_kategori='$id_kategori', judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit', deskripsi='$deskripsi', foto='$folder_foto' WHERE id_buku='$id'");

                            if ($query) {
                                echo "<script>alert('Data berhasil diperbarui.')</script>";
                            } else {
                                echo "<script>alert('Data gagal diperbarui.')</script>";
                            }
                        }

                        $query = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku = $id");
                        $data = mysqli_fetch_array($query);
                        ?> 
                        
                        <!-- input -->
                        <div class="row my-3">
                            <div class="col-md-3">Kategori</div>
                            <div class="col-md-8">
                                <select name="id_kategori" id="id_kategori" class="form-control">
                                    <?php
                                    $query_kategori = mysqli_query($conn, "SELECT * FROM kategori_buku");
                                    while ($kategori = mysqli_fetch_array($query_kategori)) {
                                        $selected = ($kategori['id_kategori'] == $data['id_kategori']) ? 'selected' : '';
                                    ?>
                                        <option value="<?php echo $kategori['id_kategori']; ?>" <?php echo $selected; ?>>
                                            <?php echo $kategori['nama_kategori']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-3">Judul</div>
                            <div class="col-md-8"><input type="text" value="<?php echo $data['judul']; ?>" class="form-control" name="judul"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Penulis</div>
                            <div class="col-md-8"><input type="text" value="<?php echo $data['penulis']; ?>" class="form-control" name="penulis"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Penerbit</div>
                            <div class="col-md-8"><input type="text" value="<?php echo $data['penerbit']; ?>" class="form-control" name="penerbit"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Tahun Terbit</div>
                            <div class="col-md-8"><input type="text" value="<?php echo $data['tahun_terbit']; ?>" class="form-control" name="tahun_terbit"></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Deskripsi</div>
                            <div class="col-md-8"><textarea class="form-control" name="deskripsi"><?php echo $data['deskripsi']; ?></textarea></div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Rating</div>
                            <div class="col-md-8">
                                <select class="form-control" name="rating">
                                    <?php
                                    for ($i = 1; $i <= 5; $i++) {
                                        $selected = ($i == $data['rating']) ? 'selected' : '';
                                        echo "<option value='$i' $selected>$i</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-3">Foto Sampul</div>
                            <div class="col-md-8">
                                <input type="file" name="foto">
                                <input type="hidden" name="foto_lama" value="<?php echo $data['foto']; ?>">
                            </div>
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