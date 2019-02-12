<?php
function connect_db() {
$servername = "localhost";
$username = "a1600507";
$password = "weXEkE52i";
$dbname = "a1600507";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} else {
}
return $conn;
}
?>
