<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | INFORMATIKA</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="login.php" method= "post" enctype="multipart/form-data">
        <label for="email">Email</label> <br>
        <input type="email" name="email"> <br>
        <label for="password">Password</label> <br>
        <input type="password" name="password"> <br> <br>
        <input type="checkbox" name="remember" value="1">
        <label for="remember">Ingatkan saya!</label> <br> <br>
        <input type="submit" value="login" > <br> <br>
    </form>
    <p>Belum punya akun? <a href="register.php"> Daftar</a></p>
</body>
</html>