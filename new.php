<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Registeration Page</title>
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
                <li1><a href="housenotype.php">new home </a></li1>
				<li1><a href="renew.php">renew</a></li1>
                <li1><a href="lost.php">lost</a></li1>
                <li1><a href="Trans_rec.php">trans_rec</a></li1>
                <li1><a href="Search.php">search</a></li1>
                <li1><a href="logout.php">logout</a></li1>
                <li1><a class="bi bi-brightness-high-fill" id="toggleDark"></a></li1>
            </ul>
        </div>
    </nav1>
    <div class="container">
        <header>new regestration</header>

       	<form action="inew.php" method="post" enctype="multipart/form-data"> 
            <div class="form first">
                <div class="details personal">
                    <span class="title">new citizen registration</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>name_amharic</label>
                            <input type="text" name="name" placeholder="name amharic" pattern='^[A-Za-z]+$' required>
                        </div>


			
                        <div class="input-field">
                            <label>father_name_amharic</label>
                            <input type="text" name='fname' placeholder="father name amharic"   pattern='^[A-Za-z]+$' required>
                        </div>

                        <div class="input-field">
                            <label>grand_name_amharic</label>
                            <input type="text" name='gname' placeholder="grand name amharic"  pattern='^[A-Za-z]+$' required>
                        </div>
                        <div class="input-field">
                            <label>Name</label>
                            <input type="text" name='e_name' placeholder="Enter Name"  pattern='^[A-Za-z]+$' required>
                        </div>
                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" name='e_fname' placeholder="Enter Father Name"   pattern='^[A-Za-z]+$'required>
                        </div>
                        <div class="input-field">
                            <label>G.Father Name</label>
                            <input type="text" name='e_gname' placeholder="Enter G.Father Name"   pattern='^[A-Za-z]+$'required>
                        </div>
                        <div class="input-field">
                            <label>birth date</label>
                            <input type="date" name='bdate' placeholder="birth date" required>
                        </div>
                        <div class="input-field">
                            <label>sex</label>
                            <select name='sex'required >
                                <option disabled selected>sex select</option>
                                <option>male</option>
                                <option>female</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>birth place</label>
                            <input type="text" name='bdate_place' placeholder="birth place"  pattern='^[A-Za-z]+$' required>
                        </div>
                    
                <div class="input-field">
                    <label>education level</label>
                    <input type="text" placeholder="education level" required>
                </div>
                <div class="input-field">
                    <label>marriage state</label>
                    <select name='mar' required>
                        <option disabled selected>state of the marriage</option>
                        <option>married</option>
                        <option>forever alone</option> 
                        <option>divorced</option>
                        
                    </select>
                </div>
                <div class="input-field">
                    <label>blod</label>
                    <select name='blod' required>
                        <option disabled selected>select blod</option>
                        <option>A</option>
                        <option>B</option> 
                        <option>O+</option>
			 <option>O-</option>
                        <option>AB</option>
                    </select>
                </div>
            </div>
        </div>
                <div class="details ID">
                    <span class="title">residential address</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>city</label>
                            <input type="text" name='city' placeholder="city"  pattern='^[A-Za-z]+$' required>
                        </div>

                        <div class="input-field">
                            <label>sub_city</label>
                            <input type="text" name='sub_city' placeholder="sub city" pattern='^[A-Za-z]+$' required>
                        </div>

                        <div class="input-field">
                            <label>postal_code</label>
                            <input type="text" name='pos' placeholder="post_code"  required>
                        </div>
                        
                        <div class="input-field">
                            <label>name of place of residence</label>
                            <input type="text" name='home_name' placeholder="name of place of residence"  pattern='^[A-Za-z]+$' required>
                        </div>

                        <div class="input-field">
                            <label>home_no</label>
                            <input type="text" name='home_no' placeholder="home_no" required>
                        </div>

                        <div class="input-field">
                            <label>phone</label>
                            <input type="number" name='phone' placeholder="phone" required>
                        </div>  
                   </div>           
                </div> 
                <div class="details family">
                    <span class="title">emergency</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>name_emergency</label>
                            <input type="text" name='r_name' placeholder="name"  pattern='^[A-Za-z]+$' required>
                        </div>

                        <div class="input-field">
                            <label>father name</label>
                            <input type="text" name='r_fname' placeholder="father name"  pattern='^[A-Za-z]+$' required>
                        </div>

                        <div class="input-field">
                            <label>grand father name</label>
                            <input type="text" name='r_gname' placeholder="grand name"  pattern='^[A-Za-z]+$' required>
                        </div>

                        <div class="input-field">
                            <label>phone</label>
                            <input type="number" name='r_phone'   placeholder="phone" required>
                        </div>
                    </div>
                </div>

                <div class="date">
                    <span class="title">date of issuing body</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>date of issue</label>
                            <input type="date" name='date_get' placeholder="date of issue" required>
                        </div>

                        <div class="input-field">
                            <label>end_date</label>
                            <input type="date" name='date_ex' placeholder="end date" required>
                        </div>

			
                        <div class="input-field">
                            <label>identification body name</label>
                            <input type="text"  name='give_name' placeholder="full name"  pattern='^[A-Za-z]+$' required>
                        </div>
               
                <div class="Other">
                    <span class="title">photo</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>photo</label>
                           
	 
              <input class="form-control" type="file" name="uploadfile" value="tret" />
	       <button class="submit" type="submit" name="sbt-btn">UPLOAD</button>
                        </div>


     <div class="input-field">
                            <label>QR-ID</label>
                            <input type="text"  name='qrtext' placeholder="QR_ID" required>
			     <input type="submit" name="sbt-btn" value="QR Generate" class="submit" />
     </div>
     
		  

		<!--	
                    <div class="buttons">                     
                        <button1 class="sumbit">
                            <span class="btnscan">Scan Finger Print</span>
                            
                        </button1>-->
	
           
                </div> 
            </div>  

            <div class="details family">
                <span class="title">other doc</span>

                <div class="fields">
                    <div class="input-field">
                        <label>cert</label>
                        <input type="file"  name="uploadfil" placeholder="#" >
                    </div>

                    <div class="input-field">
                        <label>cert mar</label>
                        <input type="file" placeholder="#" >
                    </div>

                    <div class="input-field">
                        <label>school cert</label>
                        <input type="file" placeholder="#" >
                    </div>


		    
                    <div class="input-field">
                        <label>other cert</label>
                        <input type="file" placeholder="#" >
                    </div>

                    <div class="input-field">
                        <label>other one</label>
                        <input type="file" placeholder="#" >
                    </div>

                    <div class="input-field">
                        <label>other two</label>
                        <input type="file" placeholder="#" >
                    </div>
                </div>
            </div>

<div class="input-field">
                          
                           
	 
              
	       <button class="submit" type="submit" name="sbt-btn">Submit</button>
                        </div>
	    
   
    </div>
</form>
</body>
</html>
