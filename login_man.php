
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


    <nav class="main">
        <header>
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
                <li><a href="mantrans_rec.php">ዝውውር መቀበያ</a></li>
                <li><a href="mantrans_send.php">ዝውውር መላኪያ</a></li>
                <li><a href="manrelease.php">መልቀቂያ</a></li>
                <li><a href="search.php">search</a></li>
                <li><a href="logout.php">logout</a></li>
                <li><a class="bi bi-brightness-high-fill" id="toggleDark"></a></li>
            </ul>
	    </div>
        </div>
        </nav1>
        <div class="wrapper">
            <style>
                .wrapper {
                    min-height: 380px;
                }
            </style>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM pass WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: newhouseno.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
    


    <div class="wrapper">
        <div class="title"> manager የመግቢያ ቅጽ</div>
        <form action="index.php" class="form" method='post'>
            <div class="inputBox">
                <input type="Username" placeholder="name"  name='email'>
            </div>
            <div class="inputBox">
                <input type="password" placeholder="pass" name='password'>
            </div>
            
            <button type="submit" name='login' class="btn">login</button>
        </form>
        <i class="bi bi-brightness-high-fill" id="toggleDark"></i>
    </div>
<p> 	

    </div>
</body>
</html>

