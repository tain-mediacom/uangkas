<?php 

    // koneksi
    $username = "root";
    $password = "";
    $host = "localhost";
    $dbname = "dbuangkas";
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    function userRegister($conn) {
        $username = $_POST["username"];
        $hp = $_POST["hp"];
        $password = $_POST["password"];
        $confPassword = $_POST["confPassword"];

        if ($password !== $confPassword) {
            echo 
            "
            <script>
            alert('Password dan Konfirmasi Password tidak sama !');
            window.location.href = 'register.php';
            </script>
            ";
            die();
        }

        $hasPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (username, hp, password) VALUES (?, ?, ?)");
        $stmt->execute([$username, $hp, $hasPassword]);

        return $stmt->rowCount();
    }

    if (isset($_POST["register"])) {
        $register = userRegister($conn, $_POST);
        if ($register > 0) {
            echo 
            "
            <script>
            alert('Registrasi Berhasil, Silahkan Login !');
            window.location.href = 'login.php';
            </script>
            ";
            die();
        }
    }

?>

<?php include_once "templates/auth/header.php" ?>
    <div class="bg">
        <h1>Uang<span>Kas</span></h1>
        <form class="auth" action="" method="post">
            <input type="text" name="username" required placeholder="Username">
            <input type="text" name="hp" required placeholder="hp">
            <input type="password" name="password" required placeholder="Password">
            <input type="password" name="confPassword" required placeholder="Konfirmasi Password">  
            <button type="submit" name="register">Register</button>
            <p>Sudah punya akun ? <a href="login.php">Login</a></p>
        </form>
    </div>
<?php include_once "templates/auth/footer.php" ?>