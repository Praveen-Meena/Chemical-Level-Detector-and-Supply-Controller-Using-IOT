<?php
$servername = "localhost";
$username = "id20516053_root";
$password = "}xaLzNj4P*y=c9&^";
$dbname = "id20516053_chemicals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT tank_capacity FROM tank";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '{"tank_capacity":"' . $row["tank_capacity"].'"}';
  }
} 
else {
  echo "0 results";
}

$conn->close();
?>
<?php
