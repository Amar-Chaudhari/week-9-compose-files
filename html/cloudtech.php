<html>
	<body>
<?php
$servername = "10.10.2.2";
$username = "clouduser";
$password = "Super123";
$dbname = "cloudtech";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM labs";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
	echo "<h1>" . $row["data"] . "</h1>";
	}
} else {
	echo "0 results";
}
$conn->close();
?>
	</body>
</html>
