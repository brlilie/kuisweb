<?php
session_start(); 
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($user) {
    $hashedPassword = $user['password'];

    if (strlen($hashedPassword) >= 60 && substr($hashedPassword, 0, 4) === '$2y$') {
        if (password_verify($password, $hashedPassword)) {
            $_SESSION["username"] = $user["username"];
            header('Location: home.php');
            exit;
        } else {
            echo '<script>
                alert("Login gagal: username atau password salah.");
                window.location.href = "index.php";
            </script>';
            exit;
        }
    } else {
        echo '<script>
            alert("Login gagal cuy");
            window.location.href = "index.php";
        </script>';
        exit;
    }
} else {
    echo '<script>
        alert("Login gagal: username tidak ditemukan.");
        window.location.href = "index.php";
    </script>';
    exit;
}
?>
