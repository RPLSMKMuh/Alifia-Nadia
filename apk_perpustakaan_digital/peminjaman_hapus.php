<?php

$id =$_GET['id'];
$query = mysqli_query($conn, "DELETE FROM peminjaman WHERE id_peminjaman = $id");

?>

<script>
    alert('Data berhasil dihapus.')
    location.href = "index.php?page=peminjaman";
</script>