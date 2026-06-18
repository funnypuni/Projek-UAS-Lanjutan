<?php
session_start();
include 'config/koneksi.php';

$message = "";

if(isset($_POST['login'])){

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = $_POST['password'];

    $query = mysqli_query($conn,
    "SELECT * FROM users
    WHERE username='$username'");

    if(mysqli_num_rows($query) > 0){

        $user = mysqli_fetch_assoc($query);

        if(password_verify($password, $user['password'])){

            $_SESSION['id_users'] = $user['id_users'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['full_name'] = $user['full_name'];

            header("Location: home.php");
            exit;

        }else{
            $message = "Password salah!";
        }

    }else{
        $message = "Username tidak ditemukan!";
    }
}
?>

<?php include 'header_login.php'; ?>

<link rel="stylesheet" href="css/login.css">
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<div class="container">

<h2 align="center">Login</h2><br>

<p><?php echo $message; ?></p>

<form method="POST">
    
    <input type="text" name="username" placeholder="Username" required><br><br>

    <input type="password" name="password" placeholder="Password" required><br><br>

    <button type="submit" name="login">
        Login
    </button>

</form><br><br>

<p align="center">
    Belum punya akun?
    <a href="pendaftaran.php">Daftar</a>
</p>

</body>
</html>