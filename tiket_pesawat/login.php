<?php
session_start();
include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>

<div >
<h2>Login</h2>

<?php if(isset($_GET['error'])){ ?>
<div class="error">Username atau Password salah</div>
<?php } ?>

<form method="POST" action="form_tiket.php">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button name="login">Login</button>
</form>

</div>

</body>
</html>