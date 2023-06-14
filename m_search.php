<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Number List</title>
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
      

<?php
 include 'connect_test_db.php';
 include 'database.php';
$searchErr = '';
$employee_details='';

  $stmt = $con->prepare("SELECT * FROM new WHERE id LIKE '%$search%' OR qrtext LIKE '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
   

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



    <form class="form-horizontal" action="#" method="post">
    
     </header>
      <div class="wrapper3">
            <div class="title">new house list</div>
            <form  class="form">
                <input type="text" name="search" placeholder="ID" required>
                <input type="submit" name="save" value="search">
               <!-- <input type="submit" name="ScanFP" value="Scan Finger Print"> -->
                      <div class="list">   </div>
         
  


       <table class="tablelist" id="dataTable" width="70%" cellspacing="1">
        <thead>
          <tr>
            <th>ID</th>
	    
            <th>name</th>
                              <th>father name</th>
                              <th>grand name</th>
                              <th>birth date</th>
                              <th>sex</th>
                              <th>sub city</th>
            <th>post</th>
	    <th>houser number</th>
          
	    <th >blod</th>
	   <th> marriage state</th>
            <th> phone</th>
	    <th >issue date</th>
	    <th>date</th>
	    <th>q_id</th>
	     <th>barcode</th>
          </tr>
        </thead>


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
                        echo '<td>' . $value['gname'] . '</td>';
                        echo '<td>' . $value['bdate'] . '</td>';
                        echo '<td>' . $value['sex'] . '</td>';
                        echo '<td>' . $value['sub_city'] . '</td>';
                        echo '<td>' . $value['pos'] . '</td>';
                        echo '<td>' . $value['home_no'] . '</td>';
                        echo '<td>' . $value['blod'] . '</td>';
                        echo '<td>' . $value['mar'] . '</td>';
                        echo '<td>' . $value['phone'] . '</td>';
                        echo '<td>' . $value['date_get'] . '</td>';
                        echo '<td>' . $value['date_ex'] . '</td>';
                        echo '<td>' . $value['qrtext'] . '</td>';
                        
                        echo '<td><img src="image/' . $value['qrimage'] . '"></td>';
                        echo '</tr>';
                    }
                }
                ?>
             
         </tbody>
      </table>
         <nav1>
    <div class="container">
        <div class="menu">
            <ul> 
               <li><a href="report.php">report</a></li>
                <li><a href="registration.php">new account</a></li>
                <li><a href="mantrans_rec.php">man receive</a></li>
                <li><a href="mantrans_send.php">man send</a></li>
                <li><a href="manrelease.php">man release</a></li>
                <li><a href="m_search.php">search</a></li>
                <li1><a href="logout.php">logout</a></li1>
                <li1><a class="bi bi-brightness-high-fill" id="toggleDark"></a></li1>
            </ul>
        </div>
        </nav1>
    </div>
</div>

</body>
</html>
