<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renewal Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

</head>
<?php
// Array with names
$a[] = "Anna";

// get the q parameter from URL
$q = $_REQUEST["q"];

$con = mysqli_connect('localhost', 'root', '', 'login_register');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// lookup all hints from array if $q is different from ""
if ($q != "") {
  $result = mysqli_query($con, "SELECT * FROM new WHERE name='$q'");
  $rowcount = mysqli_num_rows($result);
  if ($rowcount == 0) {
    //$ret = mysqli_query($con, "INSERT INTO `logs`(name,Time) VALUES ('$q',NOW())");
    if ($ret) {
      echo '<div class="alert alert-success"><strong>Success!</strong> Employee successfully registered</div>' . date('l jS \of F Y h:i:s A');
    } else {
      // Handle the case where insertion fails
      echo '<div class="alert alert-danger"><strong>Error!</strong> Failed to register employee</div>';
    }
  } else {
    echo '<div class="alert alert-warning"><strong>Warning!</strong> Employee is already in the database</div>';
    echo date('l jS \of F Y h:i:s A');

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Father's Name</th><th>Grandfather's Name</th><th>Birth Date</th><th>Sex</th><th>Sub-City</th><th>Position</th><th>Home Number</th><th>Blood Type</th><th>Marital Status</th><th>Phone</th><th>Issue</th><th>Date_Ex</th>><th>QR-ID</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["fname"] . "</td>";
	    echo "<td>" . $row["gname"] . "</td>";
	    echo "<td>" . $row["bdate"] . "</td>";
	    echo "<td>" . $row["sex"] . "</td>";
	    echo "<td>" . $row["sub_city"] . "</td>";
	    echo "<td>" . $row["pos"] . "</td>";
	    echo "<td>" . $row["home_no"] . "</td>";
	    echo "<td>" . $row["blod"] . "</td>";
	    echo "<td>" . $row["mar"] . "</td>";
	    echo "<td>" . $row["phone"] . "</td>";
	    echo "<td>" . $row["date_get"] . "</td>";
	    echo "<td>" . $row["date_ex"] . "</td>";
	    echo "<td>" . $row["qrtext"] . "</td>";
	   
          
	    
            echo "</tr>";
        }
        echo "</table>";
    }
  }
}

mysqli_close($con);
?>

</body>
</html>
