<?php
include "connection.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
$user = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST['username'];
    mysqli_query($conn, "UPDATE users SET username = '$new_username' WHERE id = $id");
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit Username</h2>
    <form method="POST">
        <label>Username Baru:</label><br>
        <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
    <br>
    <a href="home.php">Kembali</a>
</body>
</html>
