<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Sending Page</title>
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
                <li><a href="mantrans_rec.php">man receive</a></li>
                <li><a href="mantrans_send.php">man send</a></li>
                <li><a href="manrelease.php">man release</a></li>
                <li><a href="search.php">search</a></li>
                <li><a href="logout.php">logout</a></li>
                <li><a class="bi bi-brightness-high-fill" id="toggleDark"></a></li>
            </ul>
        </div>
        </nav1>
    </nav>
    <div class="container3">
        <header>transfer shipping form</header>

        <form action="h.php">
            <div class="form first">
                <div class="details personal">
                    <span class="title"></span>
                    <div class="fields">

                        <div class="input-field">
                            <label>ID no</label>
                            <input type="text" name='m_id' placeholder="ID" required>
                        </div>

                        <div class="input-field">
                            <label>name</label>
                            <input type="text" name='name' placeholder="name" required>
                        </div>

                        <div class="input-field">
                            <label>father name</label>
                            <input type="text" name='fname' placeholder="father name " required>
                        </div>

                        <div class="input-field">
                            <label>grnad name</label>
                            <input type="text" name='gname' placeholder="grnad name" required>
                        </div>
                       
                        <div class="input-field">
                            <label>birth date</label>
                            <input type="date" name='date' placeholder="birth date " required>
                        </div>

                        <div class="input-field">
                            <label>sex</label>
                            <select name='sex'required>
                                <option disabled selected>select sex</option>
                                <option>male</option>
                                <option>female</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>sub city</label>
                            <input type="text" name='wer' placeholder="sub city" required>
                        </div>

                        <div class="input-field">
                            <label>post code</label>
                            <input type="text" name='kefl' placeholder="post code" required>
                        </div>

                        <div class="input-field">
                            <label>house number</label>
                            <input type="text"  name='home_n'placeholder="house number" required>
                        </div>
                </div>

                        <div class="details personal">
                            <span class="title">where to send information </span>
                            <div class="fields">

                                <div class="input-field">
                                    <label>sub city</label>
                                    <input type="text" name='new_w' placeholder="sub city" required>
                                </div>
        
                                <div class="input-field">
                                    <label>post</label>
                                    <input type="text" name='new_k' placeholder="post" required>
                                </div>
        
                                <div class="input-field">
                                    <label>house number</label>
                                    <input type="text" name='new_home_n' placeholder="house number" required>
                                </div>
                        </div>
                        </div>
                    <div class="input-field">
                        <label>certificate</label>
                        <input type="file" placeholder="#" >
                    </div>

                    <div class="button">                     
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                        </button>
                    </div>
        </form>
    </div>
</body>
</html>
