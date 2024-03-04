<?php

$id =$_GET['id'];
$query = mysqli_query($conn, "DELETE FROM ulasan_buku WHERE id_ulasan = $id");

?>

<script>
    alert('Data berhasil dihapus.')
    location.href = "index.php?page=ulasan";
</script>