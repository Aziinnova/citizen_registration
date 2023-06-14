<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Receiving Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

</head>
<body>





    <?php
 include 'connect_test_db.php';
 include 'database.php';
$searchErr = '';
$employee_details='';

  $stmt = $con->prepare("SELECT * FROM man_sen WHERE id LIKE '%$search%' OR name LIKE '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
   

if (isset($_POST['save'])) {
    if (!empty($_POST['search'])) {
        $search = $_POST['search'];
        $stmt = $con->prepare("SELECT * FROM man_sen WHERE id LIKE '%$search%' OR name LIKE '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $searchErr = "Please enter the information";
    }
}
?>

    <nav class="main">
        <header>
           <div class="image-text">
               <span class="=image">
                   <img src="logo.jpg" alt="logo">
               </span>
           </div>
        </header>
        
    </nav>
    

    <form class="form-horizontal" action="#" method="post">
    
     </header>
      <div class="wrapper3">
            <div class="title">man receive</div>
            <form  class="form">
              
	      
                      <div class="list">   </div>
         
  
  </nav>

       <table class="tablelist" id="dataTable" width="100%" cellspacing="1">
        <thead>
          <tr>
            <th>ID</th>
	    
            <th>name</th>
                              <th>father name</th>
                              <th>grand name</th>
                              <th>birth date</th>
                              <th>sex</th>
                              <th>sub-city</th>
            <th>post</th>
	    <th>house number</th>
          
	    <th>sub-city</th>
	   <th> post</th>
            <th>house no</th>
	 
	 
          </tr>
        </thead>


        <tbody>
	  <?php
                if (!$employee_details) {
                    echo '<tr><td colspan="16">No data found</td></tr>';
                } else {
                    foreach ($employee_details as $key => $value) {
                        echo '<tr>';
 
   echo '<td>' . $value['m_id'] . '</td>';
                        echo '<td>' . $value['name'] . '</td>';
                        echo '<td>' . $value['fname'] . '</td>';
                        echo '<td>' . $value['gname'] . '</td>';
                        echo '<td>' . $value['date'] . '</td>';
                        echo '<td>' . $value['sex'] . '</td>';
                        echo '<td>' . $value['wer'] . '</td>';
                        echo '<td>' . $value['kefl'] . '</td>';
  echo '<td>' . $value['home_n'] . '</td>';
  
  echo '<td>' . $value['new_w'] . '</td>';
   echo '<td>' . $value['new_k'] . '</td>';
  echo '<td>' . $value['new_home_n'] . '</td>';
  
                       
                     
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
                <li><a href="logout.php">logout</a></li>
                <li><a class="bi bi-brightness-high-fill" id="toggleDark"></a></li>
            </ul>
        </div>
        </nav1>
    </nav>
</body>
</html>
