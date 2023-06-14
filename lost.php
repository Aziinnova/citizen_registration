<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost Page</title>
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
	
<?php
 include 'connect_test_db.php';
 include 'database.php';
$searchErr = '';
$employee_details='';


   

if (isset($_POST['save'])) {
    if (!empty($_POST['search'])) {
        $search = $_POST['search'];
        $stmt = $con->prepare("SELECT * FROM new WHERE id LIKE '%$search%' OR qrtext LIKE '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $searchErr = "Please enter the information";
    }
}
	?>
	<form class="form-horizontal" action="#" method="post"><div class="wrapper3">

	    </header>
      <div class="wrapper3"><div class="title">lost Id</div>
            <form  class="form">
               
                <div class="btn">
                    <label>document attachment</label>
                    <input type="file" placeholder="#" required>
		     <input type="text" name="search" placeholder="Id Number" required>
                <input type="submit" name="save" value="regester">
                </div> <div class="list">   </div>
                <table class="tablelist" id="dataTable" width="100%" cellspacing="1">
                    <thead>
                      <tr>
                        <th>Id </th>
                        <th>name</th>
                        <th>father name</th>
                        <th>issue date</th>
                        <th>end date</th>
                      </tr>
                    </thead>
                  
            </nav>
         <tbody>
	  <?php
                if (!$employee_details) {
                    echo '<tr><td colspan="16">No data found</td></tr>';
                } else {
                    foreach ($employee_details as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . ($key + 1) . '</td>';
                        echo '<td>' . $value['name'] . '</td>';
                        echo '<td>' . $value['fname'] . '</td>';
                    
                        echo '<td>' . $value['date_get'] . '</td>';
                        echo '<td>' . $value['date_ex'] . '</td>';
                       
                    }
                }
                ?>
             
         </tbody>
      </table>
    <nav1>
    <div class="container">
        <div class="menu">
            <ul> 
                <li2><a href="housenotype.php">house Number list</a></li2>
                <li1><a href="renew.php">renew</a></li1>
                <li1><a href="lost.php">lost</a></li1>
                <li1><a href="trans_rec.php">recive</a></li1>
                <li1><a href="Search.php">search</a></li1>
                <li1><a href="login.php">logout</a></li1>
                <li1><a class="bi bi-brightness-high-fill" id="toggleDark"></a></li1>
            </ul>
        </div>
        </nav1>
    </nav1>
</body>
</html>
