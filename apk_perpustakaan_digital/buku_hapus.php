<?php
include 'koneksi.php';

$id =$_GET['id'];
$query = mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id");

?>

<script>
    alert('Data berhasil dihapus.')
    location.href = "index.php?page=buku";
</script>