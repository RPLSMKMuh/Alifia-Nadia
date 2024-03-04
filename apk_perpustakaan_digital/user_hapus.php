<?php

$id =$_GET['id'];
$query = mysqli_query($conn, "DELETE FROM user WHERE id_user = $id");

?>

<script>
    alert('Data berhasil dihapus.')
    location.href = "index.php?page=user";
</script>