<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qrs";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data from the database
$sql = "SELECT * FROM logs";
$result = $conn->query($sql);

// Display the results

    
    

        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    
    
  


?>
