<?php
// Lakukan koneksi ke database
include 'koneksi.php';

if (isset($_POST['submit'])) {
    // Ambil data dari form
    $id = $_GET['id'];
    $kategori = $_POST['kategori'];

    // Buat dan eksekusi query UPDATE
    $query = "UPDATE kategori_buku SET nama_kategori=? WHERE id_kategori=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "si", $kategori, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo '<div class="alert alert-success" role="alert">Data berhasil diupdate.</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Data gagal diupdate.</div>';
    }

    // Tutup statement
    mysqli_stmt_close($stmt);
}

// Ambil data kategori berdasarkan id
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM kategori_buku WHERE id_kategori = $id");
$data = mysqli_fetch_array($query);
?>

<div class="container">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <h1 class="justify-content-center d-flex"><b>Ubah Kategori Buku</b></h1>
            <div class="row">
                <div class="col">
                    <form action="" method="POST">
                        <div class="row my-3">
                            <div class="col-md-3">Nama Kategori</div>
                            <div class="col-md-9"><input type="text" class="form-control" name="kategori" value="<?php echo $data['nama_kategori']; ?>"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col justify-content-end d-flex">
                                <button type="submit" class="btn btn-primary mx-2" name="submit">Simpan</button>
                                <button type="reset" class="btn btn-secondary mx-2">Reset</button>
                                <a href="?page=kategori" class="btn btn-primary ml-2">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>