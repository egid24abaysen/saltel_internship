<?php
// Database connection parameters
$servername = "localhost";
$username = "Aba-Art";
$password = "123";
$database = "crusade";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query
$sql = "SELECT  name,phone,since FROM explicit";

// Execute query
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_array()) {
        echo "<table><tr><th>Name: </th><tr><td>" . $row["name"]. "</td></tr><tr><th> - Phone: </th><tr><td>" . $row["phone"]. "</td></tr><tr><th> - Since: </th><tr><td>". $row["since"] . "";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>