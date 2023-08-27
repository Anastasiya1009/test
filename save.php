<?php
// Получение данных из формы
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$company_name = $_POST['company_name'];
$position = $_POST['position'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$phone3 = $_POST['phone3'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_users";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO accounts (first_name, last_name, email, company_name, position, phone1, phone2, phone3)
        VALUES ('$first_name', '$last_name', '$email', '$company_name', '$position', '$phone1', '$phone2', '$phone3')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>