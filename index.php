
<!DOCTYPE html>
<html>
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
        <div class="wrapper">
            <style>
                .wrapper {
                    min-height: 380px;
                }
            </style>
    <div class="container">
      



      	<form class="form"
      	      action="php/check-login.php" 
      	      method="post" >
      	    
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
			    <div class="wrapper">
        <div class="title">login page</div>
	
	
		  <div class="inputBox">
		  		   
		    <input type="Username" 
		          placeholder="name"
		           name="username" 
		           id="username">
		  </div>


		  <div class="inputBox">
		  
		   
		    <input type="password" 
		           name="password"  placeholder="password"
		         
		           id="password">
		  </div>
		 
		  <select class="form-control"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="user">User</option>
			  <option value="admin">manager</option>
			   <option value="bank">bank</option>
		  </select>
	</form>

		  <button type="submit" 
		          class="btn">login</button>
	 <i class="bi bi-brightness-high-fill" id="toggleDark"></i>
      </div> 
</body>
</html>
 
