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
                <li1><a href="housenotype.php">house number type</a></li1>
				<li1><a href="renew.php">renew</a></li1>
                <li1><a href="lost.php">lost</a></li1>
                <li1><a href="Trans_rec.php">man receive</a></li1>
                <li1><a href="Search.php">search</a></li1>
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
		$name = $_REQUEST['name'];
		$last_name = $_REQUEST['last_name'];
		$gname = $_REQUEST['gname'];
		$bdate = $_REQUEST['bdate'];
		$sex = $_REQUEST['sex'];
		$city = $_REQUEST['city'];
		$scity = $_REQUEST['scity'];
		$home_no = $_REQUEST['home_no'];
		$cert = $_REQUEST['cert'];
		
		
		
		// Performing insert query execution
		// here our table name is people
		$sql = "INSERT INTO new_house VALUES ('$id ','$name',
			'$last_name','$gname','$bdate','$city','$sex','$scity','$home_no','$cert')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in  successfully</h3>";

			echo nl2br("\n$name\n $last_name\n "
				. "$gname\n $bdate\n $city\n $scity\n $sex\n $home_no");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
	</div>
	</div>
</body>

</html>
