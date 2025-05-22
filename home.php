
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

include "connection.php";

$session_username = $_SESSION['username'];
$query = "SELECT username FROM users WHERE username = '$session_username'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
$username = $user['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>
<body>
    <nav class="w-full bg-sky-500 p-4 flex justify-between items-center text-white">
        <div>
            Haloo bub, <strong><?= htmlspecialchars($username); ?></strong>
        </div>
        <a class="px-4 py-2 bg-blue-700 rounded hover:bg-blue-800" href="logout.php">Logout</a>
    </nav>   

    <a href="tambah.php" class="button">+ Tambah User</a>
    <br><br>
    <table>
        <tr><th>No</th><th>Username</th><th>Aksi</th></tr>
        <?php
        $no = 1;
        $result = mysqli_query($conn, "SELECT * FROM users");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>$no</td>
                    <td>{$row['username']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}'>Edit</a> | 
                        <a href='hapus.php?id={$row['id']}' onclick=\"return confirm('Hapus user ini?')\">Hapus</a>
                    </td>
                  </tr>";
            $no++;
        }
        ?>
    </table>

    
</body>
</html>
