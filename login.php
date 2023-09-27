<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 PHP</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background-color: #f0f0f0;">
<div style="background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); max-width: 300px; width: 100%; text-align: center;">

<h1>Login</h1>

<form action="login.php" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit" name="login" style="background-color: #4CAF50; /* Green */ color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Login</button>
</form>
</div>

<?php
function cekLogin($username, $password) {
    if ($username === 'admin' && $password === 'mimin') {
        header('Location: admin.php');
        exit();
    } else {
     echo 'Login gagal, coba lagi.';
    }
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    cekLogin($username, $password);
}
?>

</body>
</html>
