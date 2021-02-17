<?php
$servername = "172.17.0.2";
$username = "root";
$password = "secretpassword";
$dbname = "Trucorp";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["ID"]. "<br> - Nama: " . $row["Nama"]. "<br> kantor " . $row["Kantor(Pusat/Cabang)"]. "<br> <br>";
  }
} else {
  echo "no results";
}
$conn->close();
?>
