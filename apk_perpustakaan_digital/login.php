<?php
session_start();
require_once "koneksi.php";

$error = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? '';

    if (!empty($username) || !empty($password)) {
        $error = "Username atau password salah.";
    } else {
        $hashed = MD5($password);
    }

    // check user credential
    $query = "SELECT * FROM user WHERE md5(username) = '".md5($username)."' and md5(password) = '".md5($password)."' ";
    $result = mysqli_query($conn, $query);
    // print_r($result);die;
    if (!$result) {
        $error = "ERROR: " . mysqli_error($conn);
    }


    if ($result->num_rows > 0) {
        // Mengambil data user dari hasil query
        $user = $result->fetch_assoc();
        //$_SESSION['id_user'] = $user['id_user'];
        //$_SESSION['role'] = $user['role'];
        $_SESSION = $user;
        //print_r($_SESSION);die;
        if (in_array($user['role'], ['admin', 'petugas', 'peminjam'])) {
            header("Location: index.php");
            exit;
        }
    } else {
        $error = "Username atau password salah.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="template/css/sb-admin-2.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-header">
                        <h2 class="justify-content-center d-flex mb-4" style="color:black;"><b>Login</b></h2>
                    </div>
                    <div class="card-body">
                        <div> <?php echo $error; ?> </div>
                        <form method="post" action="login.php">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-block" style="background:#4e73df; color:#fff;">Login</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p class="text-center">Belum punya akun? <a href="registrasi.php">Daftar di sini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>