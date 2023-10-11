<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="index.html">
</head>
<body>
    
    <div class="kotak_login"> 
        <p class="tulisan_login">Silahkan Login</p>
        <form action="ceklogin.php" method="post" role="form">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="username" autocomplete="off" required>
            <label>Password</label>
            <input type="text" name="password" required class="form_login" placeholder="password" autocomplete="off" required>
            <input type="submit" class="tombol_login" value="Login" >
            <input type="submit" class="tombol_back" value="Back">
        </form>
    </div>
</body>
</html>