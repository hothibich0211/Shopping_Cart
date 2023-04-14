<?php 
/* 
 * PayPal and database configuration 
 */ 
  
// PayPal configuration 
define('PAYPAL_ID', 'hothibich2003@gmail.com'); 
define('PAYPAL_SANDBOX', true); // true or false 
 
define('PAYPAL_RETURN_URL', 'http://localhost/payment/success.php'); 
define('PAYPAL_CANCEL_URL', 'http://localhost/payment/cancel.php'); 
define('PAYPAL_NOTIFY_URL', 'http://localhost/payment/ipn.php'); 
define('PAYPAL_CURRENCY', 'USD'); 
 
// // Database configuration 
// define('DB_SERVER', 'localost'); 
// define('DB_USERNAME', 'root'); 
// define('DB_PASSWORD', ''); 
// define('DB_NAME', 'adv_shopping_cart'); 

// $db = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adv_shopping_cart";

// Tạo kết nối đến cơ sở dữ liệu
$mysqli = new mysqli($servername, $username, $password, $dbname);


// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
else {
    echo "Connected successfully to the database!";
}
 
// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true) ? "https://www.sandbox.paypal.com/cgi-bin/webscr" : "https://www.paypal.com/cgi-bin/webscr");
?>