<?php

include 'koneksi.php';

// Fungsi untuk menampilkan rating dalam bentuk bintang
function displayRating($rating)
{
    // Jumlah maksimum bintang yang akan ditampilkan
    $maxStars = 5;
    // Hitung rata-rata rating
    $averageRating = $rating; // Gunakan rating langsung karena sudah dalam bentuk rata-rata

    // Tampilkan bintang berwarna
    for ($i = 1; $i <= $maxStars; $i++) {
        // Jika rating lebih besar dari atau sama dengan $i, tandai bintang sebagai berwarna emas
        if ($averageRating >= $i) {
            echo '<i class="fa fa-star" style="color: gold;"></i>';
        } else {
            echo '<i class="fa fa-star" style="color: lightgrey;"></i>';
        }
    }
}

// insert data dari buku ke koleksi_pribadi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['tambah_ke_koleksi'])) {
        $id_user = $_SESSION['id_user'];
        $id_buku = $_POST['id_buku'];

        // Memasukkan data ke dalam tabel koleksi_pribadi
        $query_insert = "INSERT INTO koleksi_pribadi (id_user, id_buku) VALUES ('$id_user', '$id_buku')";
        $result = mysqli_query($conn, $query_insert);
        if ($result) {
            echo '<script>alert("Buku berhasil ditambahkan ke koleksi pribadi.");</script>';
        } else {
            echo '<script>alert("Gagal menambahkan buku ke koleksi pribadi.");</script>';
        }
    }
}

?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Stylesheet untuk bintang -->
    <style>
        .fa-star {
            color: gold;
        }
    </style>
</head>

<div class="container-fluid">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <h1 class="justify-content-center d-flex mb-4"><b>Daftar Buku</b></h1>
            <?php if ($_SESSION['role'] != 'peminjam') { ?>
                <a href="?page=buku_tambah" class="btn shadow-sm btn-primary"><i class="fa-solid fa-plus"></i> Tambah Buku</a>
            <?php } ?>

            <!-- div -->
            <div class="buku d-flex" style="flex-wrap:wrap; gap:2rem; margin-top:3rem;">
                <?php
                $no = 0;
                $query = mysqli_query($conn, "SELECT * FROM buku LEFT JOIN kategori_buku as kb ON buku.id_kategori = kb.id_kategori LEFT JOIN ulasan_buku as ub ON buku.id_buku = ub.id_buku");
                while ($data = mysqli_fetch_assoc($query)) {
                    // Hitung rata-rata rating dari ulasan buku
                    $totalRating = 0;
                    $numReviews = 0;
                    if ($data['rating'] != null) {
                        $totalRating += $data['rating'];
                        $numReviews++;
                    }
                    $averageRating = ($numReviews > 0) ? $totalRating / $numReviews : 0;
                ?>
                    <!-- card -->
                    <div class="card card-buku shadow d-flex" style="width:18rem;">
                        <div class="card-header text-center text-capitalize">
                            tamat <i class="fa-solid fa-circle-check" style="color:#03ac13;"></i>
                        </div>
                        <!-- img -->
                        <div class="card-body">
                            <img src="<?php echo $data['foto']; ?>" class="card-img-top" style="width:15rem; height:20rem;" alt="...">
                            <h4 class="card-title my-3 text-capitalize" style="color:black; font-weight:600;"><?php echo $data['judul']; ?></h4>

                            <!-- keterangan -->
                            <p class="card-text">
                            <table class="text-capitalize" style="width:100%;">
                                <tr class="my-2">
                                    <td width="110">Kategori</td>
                                    <td width="20">:</td>
                                    <td><?php echo $data['nama_kategori']; ?></td>
                                </tr>
                                <tr class="my-2">
                                    <td width="110">Penulis</td>
                                    <td width="20">:</td>
                                    <td><?php echo $data['penulis']; ?></td>
                                </tr>
                                <tr class="my-2">
                                    <td width="110">Penerbit</td>
                                    <td width="20">:</td>
                                    <td><?php echo $data['penerbit']; ?></td>
                                </tr>
                                <tr class="my-2">
                                    <td width="110">Tahun Terbit</td>
                                    <td width="20">:</td>
                                    <td><?php echo $data['tahun_terbit']; ?></td>
                                </tr>
                                <tr class="my-2">
                                    <td width="110">Rating</td>
                                    <td width="20">:</td>
                                    <td>
                                        <?php displayRating($averageRating); ?>
                                    </td>
                                </tr>

                            </table>
                            </p>
                            <a href="?page=buku_deskripsi" class="btn btn-warning my-2 shadow-sm" style="width: -webkit-fill-available;"><i class="fa-solid fa-list"></i> Detail</a>
                            <!-- end keterangan -->

                            <?php if ($_SESSION['role'] != 'peminjam') { ?>
                                <div class="btn-aksi btn-block justify-content-between d-flex">
                                    <a href="?page=buku_ubah&id=<?php echo $data['id_buku']; ?>" class="btn shadow-sm btn-primary"><i class="fa-regular fa-pen-to-square"></i> Perbarui</a>
                                    <a href="?page=buku_hapus&id=<?php echo $data['id_buku']; ?>" class="btn shadow-sm btn-secondary"><i class="fa-solid fa-trash-can"></i> Hapus</a>
                                </div>
                            <?php } ?>

                            <?php if ($_SESSION['role'] == 'peminjam') { ?>
                                <div class="btn-aksi">
                                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                        <input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>">
                                        <button type="submit" name="tambah_ke_koleksi" class="btn shadow-sm btn-primary btn-block">
                                            <i class="fa-regular fa-bookmark"></i> Tambah ke Koleksi</button>
                                    </form>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
