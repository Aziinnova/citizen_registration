<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    
</head>
<body>

<header>
    <nav class="main">
           <div class="image-text">
               <span class="=image">
                   <img src="logo.jpg" alt="logo">
               </span>
           </div>
   </header>
    <nav1>
    <div class="container">
        <div class="menu">
            <ul> 
                 <li><a href="report.php">report</a></li>
                <li><a href="registration.php">new account</a></li>
                <li><a href="mantrans_rec.php">man receive</a></li>
                <li><a href="mantrans_send.php">man send</a></li>
                <li><a href="manrelease.php">man release</a></li>
                <li><a href="m_search.php">search</a></li>
                <li1><a href="logout.php">logout</a></li1>
                <li1><a class="bi bi-brightness-high-fill" id="toggleDark"></a></li1>
            </ul>
        </div>
	</div>
    </nav1>
   
      <div class="wrapper">
	<div class="container">
	   <center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => log
		$conn = mysqli_connect("localhost", "root", "", "login_register");

    
  
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$id = $conn->insert_id;
		$m_id = $_REQUEST['m_id'];
		$name = $_REQUEST['name'];
		$fname = $_REQUEST['fname'];
		
		$gname = $_REQUEST['gname'];	
		$date = $_REQUEST['date'];
		$sex = $_REQUEST['sex'];
		
		$wer = $_REQUEST['wer'];	
		$kefl = $_REQUEST['kefl'];
 		$home_n = $_REQUEST['home_n'];
		
		$new_w = $_REQUEST['new_w'];
		$new_k= $_REQUEST['new_k'];
		$new_home_n = $_REQUEST['new_home_n'];

		
	
	
		
		// Performing insert query execution
		// here our table name is people
		$sql = "INSERT INTO man_sen VALUES ('$id','$m_id','$name',
			'$fname','$gname','$date','$sex','$wer','$kefl','$home_n','$new_w','$new_k','$new_home_n')";

																																     
		if(mysqli_query($conn, $sql)){
			echo "<h3>send data successfully</h3>";

			echo nl2br("\n$name\n \n$pos $last_name\n "
				. "$gname\n $gname\n $city\n $scity\n $sex\n $home_no");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}




		
		// Close connection
		mysqli_close($conn);
		?>

			</center>

</body>

</html>
