<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

</head>
<body>

  
    <nav class="main">
        <header>
           <div class="image-text">
               <span class="=image">
                   <img src="logo.jpg" alt="logo">
               </span>
           </div>
        </header>
        <div class="wrapper">
            <style>
                .wrapper {
                    min-height: 380px;
                }
            </style>
            <div class="title">አዲስ ሰራተኛ መዝግብ</div>
	 
            <div class="container">
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM pass WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO pass (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>
        <form action="registration.php" method="post">

	  
            <div class="inputBox">
                <input type="text"  name="fullname" placeholder="ሙሉ ስም">
            </div>

	    
	    

	     
            <div class="form-group">
                <input type="emamil"  name="email" placeholder="email">
            </div>
            <div class="form-group">
                <input type="password"  name="password" placeholder="የይለፍ ቃል">
            </div>
            <div class="form-group">
                <input type="password"  name="repeat_password" placeholder="የይለፍ ቃል">
            </div>
            <div class="form-btn">
              
	       <button type="submit" class="btn" name ="submit" >መዝግብ</button>
            </div>
        </form>
        <div>
         
    <nav1>
    <div class="container">
        <div class="menu">
            <ul> 
                <li><a href="report.html">ሪፖርት</a></li>
                <li><a href="register.html">አዲስ አካውንት</a></li>
                <li><a href="mantrans_rec.html">ዝውውር መቀበያ</a></li>
                <li><a href="mantrans_send.html">ዝውውር መላኪያ</a></li>
                <li><a href="manrelease.html">መልቀቂያ</a></li>
                <li><a href="mansearch.html">ፈልግ</a></li>
                <li><a href="login.html">ውጣ</a></li>
                <li><a class="bi bi-brightness-high-fill" id="toggleDark"></a></li>
            </ul>
        </div>
        </nav1>
      </div>     
            
        
        
    </nav>
</body>
</html>
