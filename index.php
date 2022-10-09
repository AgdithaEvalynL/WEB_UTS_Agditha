<?php
        if(isset($_POST['LoginAdmin'])){
            session_start();
            header("Location:LoginAdmin.php");
        }
        if(isset($_POST['LoginUser'])){
            session_start();
            header("Location:LoginUser.php");
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link href="landingpage.css?v2" rel="stylesheet">
</head>
<body>
    <h1>WELCOME TO LAWSON LIBRARY</h1>
    <h3>LOGIN AS WHO?</h3>
    
    <form method='POST' action=''>
    <div class="admin" align="center">
            <a href="LoginAdmin.php">
            <img src="https://icons.veryicon.com/png/o/miscellaneous/matripe/admin-8.png" width="100x" height="100px"> 
            </a><br><sup>ADMIN<br><br></sup>
    </div><span>
    <div class="user" align="center">
        <a href="LoginUser.php">
            <img src="https://icons.veryicon.com/png/o/miscellaneous/chi-mai-network/user-345.png" width="100x" height="100px">
            </a><sup><br>USER</sup>
    </div>
    </span>
    </form>
</body>
</html>