<?php
$servername = "172.20.0.2";
$username = "root";
$password = "secretpassword";
$dbname = "mysql";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
$jumlah_user = $result->num_rows;
echo "Jumlah user pada database: $jumlah_user user";

$conn->close();
?>
