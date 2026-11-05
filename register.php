<?php include_once "templates/auth/header.php" ?>
    <div class="bg">
        <h1>Uang<span>Kas</span></h1>
        <form class="auth" action="" method="post">
            <input type="text" name="username" required placeholder="Username">
            <input type="text" name="hp" required placeholder="hp">
            <input type="password" name="password" required placeholder="Password">
            <input type="password" name="confPassword" required placeholder="Konfirmasi Password">  
            <button type="submit" name="login">Register</button>
            <p>Sudah punya akun ? <a href="login.php">Login</a></p>
        </form>
    </div>
<?php include_once "templates/auth/footer.php" ?>