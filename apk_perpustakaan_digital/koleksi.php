<?php
include 'koneksi.php';
$no = 0;
$id_user = $_SESSION['id_user'];
$query = mysqli_query($conn, "SELECT * FROM koleksi_pribadi kp LEFT JOIN buku b ON kp.id_buku = b.id_buku LEFT JOIN kategori_buku as kb ON b.id_kategori = kb.id_kategori LEFT JOIN ulasan_buku as ub ON b.id_buku = ub.id_buku WHERE kp.id_user = $id_user");

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

// hapus
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['hapus_koleksi'])) {
        $id_koleksi = $_POST['id_koleksi'];

        // Lakukan query untuk menghapus data sesuai dengan id koleksi
        $query_delete = "DELETE FROM koleksi_pribadi WHERE id_koleksi='$id_koleksi'";
        $result = mysqli_query($conn, $query_delete);
        if ($result) {
            echo '<script>alert("Data berhasil dihapus dari koleksi pribadi.");</script>';
            // Refresh halaman untuk memperbarui tampilan koleksi
            echo '<script>window.location.href = "koleksi.php";</script>';
        } else {
            echo '<script>alert("Gagal menghapus data dari koleksi pribadi.");</script>';
        }
    }
}

?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

    <style>
        .fa-star {
            color: gold;
            /* Warna bintang */
        }

        .card-buku {
            border: none;
        }

        .card-buku:hover {
            /* transform: scale(1.005); */
            transition: all .2s;
        }

        .card-buku:hover img {
            transform: scale(1.05);
            transition: all .3s;
        }
    </style>

</head>

<div class="container-fluid">

    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <h1 class="justify-content-center d-flex mb-4"><b>Daftar Buku dalam Koleksi Pribadi</b></h1>

            <!-- div -->
            <div class="buku d-flex" style="flex-wrap:wrap; gap:2rem; margin-top:3rem;">
                    <!-- card -->
                <?php
                while ($data = mysqli_fetch_assoc($query)) {
                ?>
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
                                        <?php displayRating($data['rating']); ?>
                                    </td>
                                </tr>

                            </table>
                            </p>
                            <a href="?page=buku_deskripsi" class="btn btn-warning my-2 shadow-sm" style="width: -webkit-fill-available;"><i class="fa-solid fa-list"></i> Detail</a>
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <input type="hidden" name="id_koleksi" value="<?php echo $data['id_koleksi']; ?>">
                                <button type="submit" name="hapus_koleksi" class="btn shadow-sm btn-danger btn-block">
                                    <i class="fa-solid fa-trash"></i> Hapus dari Koleksi
                                </button>
                            </form>
                            <!-- end keterangan -->
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>
