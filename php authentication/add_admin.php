<?php 
require 'header.php';
?>

<main>
    
    <div class= "wrapper-main">
        <section class= "section">
            <h1>Enter Administrator Details</h1>
            <?php 
                if(isset($_GET['error'])){
                    if($_GET['error'] == "emptyfields"){
                        echo "<p class= signup_error> Kindly don't leave out any fields</p>";
                    }
                    elseif($_GET['error'] == "passwordcheck"){
                        echo "<p class= signup_error> Passwords don't match!</p>";
                    }
                    elseif($_GET['error'] == "usertaken"){
                        echo "<p class= signup_error> Username already exists</p>";
                    }
                    elseif($_GET['error'] == "passwordcheck"){
                        echo "<p class= signup_error> Passwords don't match!</p>";
                    }
                }
                if(isset($_GET['add_admin'])){
                    if($_GET['add_admin'] == "success"){
                        echo "<p class= signup_success> Administrator added successfully!</p>";
                        header("Location:display.php");
                        exit();
                    }
                }
            ?>
            <form class= "add-admin" action="includes/add_admin.inc.php" method="post">
                <input type="text" name="fname" placeholder="Enter First Name">
                <input type="text" name="lname" placeholder="Enter Last Name:">
                <input type="text" name="userid" placeholder="Enter Username">
                <input type="password" name="passwd" placeholder="Enter Password:">
                <input type="password" name="pass" placeholder="Confirm Password:">
                <button type= "submit" name="submit-button">Add Administrator</button>
        </section>
    </div>
</main>

