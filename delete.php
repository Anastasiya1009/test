<?php
// Получение данных из формы удаления
$id = $_POST['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_users";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM accounts WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "Account deleted successfully";
} else {
    echo "Error deleting account: " . $conn->error;
}

$conn->close();

header("Location: index.php");
exit;
?>