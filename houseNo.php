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

  $stmt = $con->prepare("SELECT * FROM new_house WHERE home_no LIKE '%$search%' OR name LIKE '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
   $image_details = mysqli_query($conn, "SELECT * FROM image");
$rows = mysqli_fetch_all($image_details, MYSQLI_ASSOC);

if (isset($_POST['save'])) {
    if (!empty($_POST['search'])) {
        $search = $_POST['search'];
        $stmt = $con->prepare("SELECT * FROM new_house WHERE home_no LIKE '%$search%' OR name LIKE '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $searchErr = "Please enter the information";
    }
}
?> <form class="form-horizontal" action="#" method="post">
        </header>
        <div class="wrapper2">
            <div class="title">old house list</div>
            <form  class="form">
                <input type="text" name="search" placeholder="home number" required>
                <input type="submit" name="save" value="search">
                
        
                  
                      <div class="list">
                  
                        <table class="tablelist" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>number </th>
                              <th>name</th>
                              <th>father name</th>
                              <th>grand name</th>
                              <th>house number</th>
                            </tr>
                          </thead>
			   <?php
                if (!$employee_details) {
                    echo '<tr><td colspan="16">No data found</td></tr>';
                } else {
                    foreach ($employee_details as $key => $value) {
    echo '<tr>';
    echo '<td>' . ($key + 1) . '</td>';
    echo '<td>' . $value['name'] . '</td>';
    echo '<td>' . $value['last_name'] . '</td>';
    echo '<td>' . $value['gname'] . '</td>';
    echo '<td>' . $value['home_no'] . '</td>';


	 echo '</tr>';
                    }
                }
?>
                        </table>
                      </div>
            </form>
                      <form action="new.php" class="form">
                    <div class="buttons">
                      <input type="submit" name="next" value="go">
                    </div>
                  </form>
                  </div>
            </nav>
    <nav1>
    <div class="container1">
        <div class="menu">
            <ul> 
                <li2><a href="housenotype.php">house number list</a></li2>
                <li1><a href="renew.php">renew</a></li1>
                <li1><a href="lost.php">lost</a></li1>
                <li1><a href="trans_rec.php">receive</a></li1>
                <li1><a href="Search.php">search</a></li1>
                <li1><a href="logout.php">logout</a></li1>
                <li1><a class="bi bi-brightness-high-fill" id="toggleDark"></a></li1>
            </ul>
        </div>
        </nav1>
    </nav1>
</body>
</html>
