<?php
include 'koneksi.php';

// Fungsi untuk menampilkan rating dalam bentuk bintang
function displayRating($rating)
{
    // Jumlah maksimum bintang yang akan ditampilkan
    $maxStars = 5;
    // Tentukan jumlah bintang yang akan berwarna
    $numColoredStars = round($rating);

    // Tampilkan bintang berwarna
    for ($i = 1; $i <= $numColoredStars; $i++) {
        echo '<i class="fa fa-star" style="color: gold;"></i>';
    }

    // Tampilkan bintang berwarna abu-abu (jika ada)
    for ($i = $numColoredStars + 1; $i <= $maxStars; $i++) {
        echo '<i class="fa fa-star" style="color: lightgrey;"></i>';
    }
}

$no = 0;
$query = mysqli_query($conn, "SELECT * FROM ulasan_buku as ub LEFT JOIN user ON user.id_user = ub.id_user LEFT JOIN buku ON buku.id_buku = ub.id_buku");

?>

<div class="container-fluid">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <?php if (!isset($_SESSION['role']) || $_SESSION['role'] != 'peminjam') : ?>
                <h1 class="justify-content-center d-flex"><b>Ulasan Pengguna</b></h1>
            <?php else : ?>
                <h1 class="justify-content-center d-flex"><b>Ulasan Anda</b></h1>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-12">
                    <?php if ($_SESSION['role'] == 'peminjam') : ?>
                        <a href="?page=ulasan_tambah" class="btn btn-primary my-3">+ Tambah Ulasan</a>
                    <?php endif; ?>
                    <table id="example" class="table shadow-sm table-hover">
                        <thead>
                            <tr>
                                <th class="table-primary">No</th>
                                <?php if ($_SESSION['role'] != 'peminjam') : ?>
                                    <th class="table-primary">Role</th>
                                    <th class="table-primary">Username</th>
                                <?php endif; ?>
                                <th class="table-primary">Buku</th>
                                <th class="table-primary">Ulasan</th>
                                <th class="table-primary">Rating</th>
                                <th class="table-primary">Aksi</th>
                            </tr>
                        </thead>
                        <?php
                        while ($data = mysqli_fetch_array($query)) :
                        ?>
                            <tr>
                                <td><?php echo ++$no; ?></td>
                                <?php if ($_SESSION['role'] != 'peminjam') : ?>
                                    <td><?php echo $data['role'] ?></td>
                                    <td><?php echo $data['username'] ?></td>
                                <?php endif; ?>
                                <td><?php echo $data['judul'] ?></td>
                                <td><?php echo $data['ulasan'] ?></td>
                                <td><?php echo displayRating($data['rating']) ?></td>
                                <td>
                                    <a href="?page=ulasan_ubah&&id=<?php echo $data['id_ulasan'] ?>" class="btn btn-primary my-1">Ubah</a>
                                    <a href="?page=ulasan_hapus&&id=<?php echo $data['id_ulasan'] ?>" class="btn btn-danger my-1" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>