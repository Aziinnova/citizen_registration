
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
               
                <li><a href="mantrans_rec.php">man receive</a></li>
                <li><a href="mantrans_send.php">man send</a></li>
                <li><a href="manrelease.php">man release</a></li>
                <li><a href="search.php">search</a></li>
                <li><a href="logout.php">logout</a></li>
                <li><a class="bi bi-brightness-high-fill" id="toggleDark"></a></li>
            </ul>
	    </div>
        </div>
        </nav1>
        <div class="wrapper">
          
	   <div class="title">new employee registration </div>
	 
            <div class="container">
	      
        <?php
        if (isset($_POST["submit"])) {
        $username = $_POST["username"];
	$role = $_POST["role"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
          // $passwordHash = password_hash($password, PASSWORD_DEFAULT);
	   $passwordHash = md5($password);

           $errors = array();
           
           if (empty($username) OR empty($role) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
            }
	    
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<4) {
            array_push($errors,"Password must be at least 4 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
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
            
            $sql = "INSERT INTO users (role ,username, email, password) VALUES ( ?, ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"ssss",$role ,$username, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>

<div>
	
        
        <form action="registration.php" method="post">

	  
            <div class="inputBox">
                <input type="text"  name="username" placeholder="full name">
            </div>

	     
            <div class="form-group">
                <input type="emamil"  name="email" placeholder="email">
            </div>
            <div class="form-group">
                <input type="password"  name="password" placeholder="password">
            </div>
            <div class="form-group">
                <input type="password"  name="repeat_password" placeholder="repeat_password">
            </div>
           
	     <div class="form-control">
                        
                           <select class="form-control"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="user">User</option>
			  <option value="admin">manger</option>
			   <option value="bank">bank</option>
		  </select>
             </div>
	      <div class="form-btn">
            <input type="submit" value="register" name="submit" class="btn btnary">
        </div>
	</form>
</div>




 
      </div>
	    </div>
	    </div>
</body>
</html>
