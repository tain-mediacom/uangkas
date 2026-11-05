<?php include_once "templates/auth/header.php" ?>
    <div class="bg">
        <h1>Uang<span>Kas</span></h1>
        <form class="auth" action="" method="post">
            <input type="text" name="hp" required placeholder="Hp">
            <input type="password" name="password" required placeholder="Password"> 
            <button type="submit" name="login">Login</button>
            <p>Belum punya akun ? <a href="register.php">Register</a></p>
        </form>
    </div>
<?php include_once "templates/auth/footer.php" ?>