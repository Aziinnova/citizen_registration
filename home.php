<?php
session_start();
include "db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
?>
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
                <span class="image">
                    <img src="logo.jpg" alt="logo">
                </span>
            </div>
        </header>
        <?php if ($_SESSION['role'] == 'admin') { ?>
            <!-- For Admin -->
            <div class="card" style="width: 1rem;">
                <div class="card-body text-center">
                    <h5 class="card-title"></h5>
                </div>
            </div>
            <div class="p-3">
                <?php
                include 'report.php';
                if (mysqli_num_rows($res) > 0) {
                ?>
                <h1 class="display-4 fs-1">Members</h1>
                <table class="table" style="width: 32rem;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">User name</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($rows = mysqli_fetch_assoc($res)) {
                        ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $rows['name'] ?></td>
                            <td><?= $rows['username'] ?></td>
                            <td><?= $rows['role'] ?></td>
                        </tr>
                        <?php
                            $i;
                        }
                        ?>
                    </tbody>
                </table>
                <?php } ?>
            </div>
        <?php } elseif ($_SESSION['role'] == 'bank') { ?>
            <!-- For Manager -->
         <div class="wrapper1">
            <div class="title">Id renew</div>
            <form action="qrscan1.php" class="form">
                <button type="submit" class="btn">Scan qrcode</button>

	    
        <?php } else { ?>
            <!-- For User -->
            <div class="user-role-content">
                <!-- Add your HTML content specific to the user role here -->
            </div>
            <nav class="main">
                <header>
                    <div class="image-text">
                        <span class="image">
                            <img src="logo.jpg" alt="logo">
                        </span>
                    </div>
                </header>
                <div class="wrapper1">
                    <div class="title">house Number type</div>
                    <form action="newhouseno.php" class="form">
                        <button type="submit" class="btn">new</button>
                    </form>
                    <form action="houseNo.php" class="form">
                        <button type="submit" class="btn">old</button>
                    </form>
                    <nav1>
                        <div class="container">
                            <div class="menu">
                                <ul> 
                                    <li2><a href="housenotype.php">house Number list</a></li2>
<li1><a href="lost.php">lost</a></li1>
                                    <li1><a href="trans_rec.php">receive</a></li1>
                                    <li1><a href="Search.php">search</a></li1>
                                    <li1><a href="logout.php">logout</a></li1>
                                    <li1><a class="bi bi-brightness-high-fill" id="toggleDark"></a></li1>
                                </ul>
                            </div>
                        </div>
                    </nav1>
                </nav>
            <?php } ?>
        </div>
    </body>
    </html>
    <?php
} else {
    header("Location: index.php");
    exit();
}
?>                                   