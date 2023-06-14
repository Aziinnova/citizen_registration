<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
    $filename = $_FILES["uploadfile"]["name"];
    
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "imag/" . $filename;

    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cc";

    // Create database connection
    $db = mysqli_connect($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL statement with prepared statements
    $stmt = mysqli_prepare($db, "INSERT INTO image (name) VALUES (?)");
    mysqli_stmt_bind_param($stmt, "s", $filename);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        // Move the uploaded image to the "image" folder
        if (move_uploaded_file($tempname, $folder)) {
            $msg = "Image uploaded successfully!";
        } else {
            $msg = "Failed to upload image!";
        }
    } else {
        $msg = "Failed to execute the SQL query!";
    }

    // Close the prepared statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($db);
}

include 'display.php';
?>

<div id="msg">
    <?php
    echo $msg;
    ?>
</div>