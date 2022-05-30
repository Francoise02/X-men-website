<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUTHENITICATION PAGE</title>
    <link rel= "stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php">
                <img src= "assets/xlogo.png" class= "logo" width= "200" alt= "X-MEN LOGO">
            </a>
        </nav>
        <div class=header-login>
            <?php 
                if(isset($_SESSION['username'])){
                    echo '<a href ="add_admin.php"><p class=add_admin>Add Administrator</p></a>';
                    echo '<a href ="home.php"><p class=add_admin>Home Page</p></a>';
                    echo '<form action="includes/logout.inc.php" method= "post">
                    <button class=logout type="submit" name= "logout-submit">Logout</button>  
                </form>';
                }else{
                    echo '<form class= login-form action="includes/login.inc.php" method= "post" >
                    <input type= "text" name="userid" placeholder="Username:">
                    <input type= "password" name="pass" placeholder="Password:">
                    <button class=login type= "submit" name= "login-submit">Login</button>
                </form>';
                }
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                        echo "<p class= signin_error> Kindly don't leave out any fields</p>";
                    }
                    elseif($_GET['error'] == "wrongpassword"){
                        echo "<p class= signin_error> Password is incorrect!</p>";
                    }
                    elseif($_GET['error'] == "nouser"){
                        echo "<p class= signin_error> Username doesn't exist!</p>";
                    }
                }
                if(isset($_GET['login'])){
                    if($_GET['login'] == "success"){
                        echo "<p class= signin_success> Welcome {$_SESSION['username']}</p>";
                    }
                }
            ?>
        </div>
    </header>
</body>
</html>