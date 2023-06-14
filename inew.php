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
                <li1><a href="housenotype.php">house number list</a></li1>
				<li1><a href="renew.php">renew</a></li1>
                <li1><a href="lost.php">lost</a></li1>
                <li1><a href="Trans_rec.php">man recive</a></li1>
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
		
require_once 'connection.php';
require_once 'phpqrcode/qrlib.php';
$path = 'image/';
$qrcode = $path.time().".png";
$qrimage = time().".png";		
$filename = $_FILES["uploadfile"]["name"];
    
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "imag/" . $filename;
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$id = $conn->insert_id;
		$name = $_REQUEST['name'];
		$fname = $_REQUEST['fname'];
		$gname = $_REQUEST['gname'];
		$e_name = $_REQUEST['e_name'];
		$e_fname = $_REQUEST['e_fname'];
		$e_gname = $_REQUEST['e_gname'];
		$bdate = $_REQUEST['bdate'];
 		$sex = $_REQUEST['sex'];
		$bdate_place = $_REQUEST['bdate_place'];
		$mar = $_REQUEST['mar'];
		$blod = $_REQUEST['blod'];
		$city = $_REQUEST['city'];
		$sub_city = $_REQUEST['sub_city'];
		$pos = $_REQUEST['pos'];
		$home_name = $_REQUEST['home_name'];
		$home_no = $_REQUEST['home_no'];
		$phone = $_REQUEST['phone'];
		$r_name = $_REQUEST['r_name'];
		$r_fname = $_REQUEST['r_fname'];
		$r_gname = $_REQUEST['r_gname'];
		$r_phone = $_REQUEST['r_phone'];
		$date_get = $_REQUEST['date_get'];
		$date_ex = $_REQUEST['date_ex'];
		$give_name = $_REQUEST['give_name'];


		
if(isset($_REQUEST['sbt-btn']))
{
		$qrtext = $_REQUEST['qrtext'];
		$q=$name."".$qrtext;
		 QRcode :: png($name, $qrcode, 'H', 4, 4);
		echo "<img src='".$qrcode."'>";}




		

    // Prepare the SQL statement with prepared statements
   //stmt = mysqli_prepare($conn, "INSERT INTO image (img) VALUES (?)");
		
    //mysqli_stmt_bind_param($stmt, "s", $filename);
    
	 $stmt = $conn->prepare( "INSERT INTO n (name,fname,gname,e_name,e_fname,e_gname,bdate,sex,bdate_place, img) VALUES (?,?,?,?,?,?,?,?,?,?)");
    
		$stmt->bind_param( "ssssssssss",$name,$fname,$gname,$e_name,$e_fname,$e_gname,$bdate,$sex,$bdate_place, $filename);


		

//,$mar,$blod,$city,$sub_city,$pos,$home_no,$phone,$r_name,$r_fname,$r_gname,$r_phone,$date_get,//$date_ex,$give_name,$qrtext,$qrimage,

	//	,home_no,phone,r_name,r_fname,r_gname,r_phone,date_get,date_ex,give_name





		
		
		// Performing insert query execution
		// here our table name is people
		$sql = "INSERT INTO new VALUES ('$id','$name',
			'$fname','$gname','$e_name','$e_fname','$e_gname','$bdate','$sex','$bdate_place','$mar','$blod','$city','$sub_city','$pos','$home_name','$home_no','$phone','$r_name','$r_fname','$r_gname','$r_phone' ,'$date_get','$date_ex','$give_name','$qrtext','$qrimage')";







		// Execute the prepared statement
    if (mysqli_stmt_execute($stmt)) {
        (move_uploaded_file($tempname, $folder));} 																					     
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in  successfully</h3>";

			echo nl2br("\n$name\n \n$pos $last_name\n "
				. "$gname\n $bdate\n $city\n $scity\n $sex\n $home_no");
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
