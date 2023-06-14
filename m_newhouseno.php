<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New House No List Entry</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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
    <div class="container1">
        <div class="menu">
            <ul> 
                <li1><a href="report.php">report</a></li1>
		<li1><a href="registration.php">new account</li1>
                <li2><a href="mantrans_rec.php"></a></li2>
		 <li1><a href="trans_rec.php">man receive</a></li1>
               
                <li1><a href="mantrans_send.php">man transfer</a></li1>
                <li1><a href="Search.php">search</a></li1>
                <li1><a href="logout.php">logout</a></li1>
                <li1><a class="bi bi-brightness-high-fill" id="toggleDark"></a></li1>
            </ul>
        </div>
    </nav1>
    <div class="container2">
        <header>new citizen registration</header>

       	<form action="insert.php" method="post">
          <div class="form first">
                <div class="details personal">

                    <div class="fields">
                        <div class="input-field">
                            <label>name</label>
                            <input type="text" name="name" placeholder="name" required>
                        </div>

                        <div class="input-field">
                            <label>father name</label>
                            <input type="text"  name="last_name" placeholder="father name" required>
                        </div>

                        <div class="input-field">
                            <label>grand name</label>
                            <input type="text" name="gname" placeholder="grnad name" required>
                        </div>
                       
                        <div class="input-field">
                            <label>birth date </label>
                            <input type="date" name='bdate' placeholder="birth date" required>
                        </div>

                        <div class="input-field">
                            <label>sex</label>
                            <select name='sex' >
                                <option disabled selected>select sex</option>
                                <option>male</option>
                                <option>female</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>sub city</label>
                            <input type="text" name="city" placeholder="sub city" required>
                        </div>

                        <div class="input-field">
                            <label>post code</label>
                            <input type="text" name='scity' placeholder="post code" required>
                        </div>

                        <div class="input-field">
                            <label>house number</label>
                            <input type="text" name='home_no' placeholder="house number" required>
                        </div>
             
                    <div class="input-field">
                        <label>birht cert</label>
                        <input type="file" name='cert' placeholder="#" >
                    </div>
         
                    <div class="input-field">
                        <label>other </label>
                        <input type="file" name='other' placeholder="#" >
                    </div>
       
    
    <div class="buttons">                     
        <button class="sumbit">
            <span class="btnText">Submit</span>
        </button>
    </div>
</form>
    </div>
</body>
</html>
