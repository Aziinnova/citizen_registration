<?php

// If upload button is clicked ...
$filename = $_FILES["uploadfile"]["name"];
    
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "imag/" . $filename;

//require_once 'connection.php';
  $db = mysqli_connect("localhost", "root", "", "cc");


if (isset($_POST['upload'])) {
    

    // Create database connection
  

    // Prepare the SQL statement with prepared statements
    $stmt = mysqli_prepare($db, "INSERT INTO image (img) VALUES (?)");
    mysqli_stmt_bind_param($stmt, "s", $filename);

    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        // Move the uploaded image to the "image" folder
        if (move_uploaded_file($tempname, $folder)) {} else {}
    }  
}
?>

