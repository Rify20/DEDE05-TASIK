<?php
session_start();

// USERNAME & PASSWORD ADMIN — kamu bisa ganti sendiri
$ADMIN_USER = 'admin';
$ADMIN_PASS = 'dede05tasik2024';

// Jika tombol login ditekan
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = $_POST['username'];
    $p = $_POST['password'];

    if ($u === $ADMIN_USER && $p === $ADMIN_PASS) {
        $_SESSION['is_admin'] = true;
        header('Location: admin-dashboard.php');
        exit;
    } else {
        $error = 'Username atau password salah!';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="font-family:sans-serif;padding:20px;text-align:center;">
    <h2>Login Admin</h2>
    <form method="post" style="max-width:300px;margin:auto;">
        <input name="username" placeholder="Username" required style="padding:10px;width:100%;margin-bottom:10px;">
        <input name="password" type="password" placeholder="Password" required style="padding:10px;width:100%;margin-bottom:10px;">
        <button type="submit" style="padding:10px;width:100%;">Masuk</button>
    </form>

    <div style="color:red;margin-top:10px;">
        <?php echo $error; ?>
    </div>
</body>
</html>
