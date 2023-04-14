<?php
// Replace "/full/path/to/config.php" with the actual full path to your config.php file
require_once 'config.php';

// // Create a new MySQLi object and establish a database connection
// $DB_SERVER = "localhost";
// $DB_USERNAME = "username";
// $DB_PASSWORD = "password";
// $DB_NAME = "adv_shopping_cart";

// Tạo kết nối đến cơ sở dữ liệu
$conn = $link = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database!";
?>
