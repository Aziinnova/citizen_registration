
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Page</title>
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
	    include "db_conn.php";
$searchErr = '';
$employee_details='';

  $stmt = $con->prepare("select * from new where id like '%$search%' or name like '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);

	   


if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from new where id like '%$search%' or name like '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($employee_details);
         
    }
    else
    {
        $searchErr = "Please enter the information";
    }
    
}
 
?>

        </header>

	
    <nav1>
    <div class="container">
        <div class="menu">
            <ul> 
                <li><a href="report.php">report</a></li>
                <li><a href="registration.php">new account</a></li>
                <li><a href="mantrans_rec.php">treansfer recive</a></li>
                <li><a href="mantrans_send.php">transfer</a></li>
                <li><a href="manrelease.php">release</a></li>
                <li><a href="m_search.php">search</a></li>
                <li><a href="logout.php">logout</a></li>
                <li><a class="bi bi-brightness-high-fill" id="toggleDark"></a></li>
            </ul>
        </div>
        </nav1>
    </nav>


    
    <div class="container3">
        <header>report</header>
        <form action="#">
					<div class="graph">
				<div class="tables">
																
					<table class="table">
                				<thead>
           
						<tr>
                                              <th>ID</th>
				<th>name citizen</th>
                                              <th>sex</th>
					<th>worker name</th>
					<th>issue date</th>
						</tr>
						 <tbody>
                <?php
                 if(!$employee_details)
                 {
                    echo '<tr>No data found</tr>';
                 }
                 else{
                    foreach($employee_details as $key=>$value)
                    {
                        ?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $value['name'];?></td>
                   
                        <td><?php echo $value['sex'];?></td>
			 <td><?php echo $value['give_name'];?></td>
                        <td><?php echo $value['date_get'];?></td>
		
                       
			
                    </tr>
                         
                        <?php
                    }
                     
                 }
                ?>
             
					</thead>
                                    </table>

                                                <div class="buttons">                     
                                                    <button class="sumbit">
                                                      <span class="btnText"  onClick="window.print()">Print</span>
					
                                                    </button>
                                                </div>
        </form>
    </div>
</body>
</html>
