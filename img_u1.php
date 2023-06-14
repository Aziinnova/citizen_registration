<?php
//require_once 'connection.php';
 $db = mysqli_connect("localhost", "root", "", "cc");

// If upload button is clicked ...
$filename = $_FILES["uploadfile"]["name"];
    
    $tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "imag/" . $filename;



$title = $_REQUEST['title'];
$name = $_REQUEST['name'];

 



  


    $stmt = $db->prepare( "INSERT INTO image (title,name, img) VALUES (?,?,?)");
    
   $stmt->bind_param( "sss",$title,$name, $filename);











    // Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        
        (move_uploaded_file($tempname, $folder)) ;
    }  

?>

