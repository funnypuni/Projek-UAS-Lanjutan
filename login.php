<?php
session_start();
include 'config/koneksi.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = mysqli_query($conn,
        "SELECT * FROM users
         WHERE email='$email'
         AND password='$password'"
    );

    if(mysqli_num_rows($query) > 0){

        $data = mysqli_fetch_assoc($query);

        $_SESSION['id'] = $data['id'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['email'] = $data['email'];

        header("Location: home.php");
        exit;

    }else{
        $error = "Email atau Password salah!";
    }
}
?>

<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<div class="login-box">
    <h2>Login</h2>

    <?php if(isset($error)){ ?>
        <div class="error"><?= $error; ?></div>
    <?php } ?>

    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">
            Login
        </button>
    </form>
</div>

</body>
</html>