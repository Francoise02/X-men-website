<?php

if (isset($_POST['submit-button'])){
    
    require 'dbh.inc.php';

    $f_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $username = $_POST['userid'];
    $password = $_POST['passwd'];
    $password_repeat = $_POST['pass'];

    if(empty($f_name)||empty($last_name)||empty($username)||empty($password)||empty($password_repeat)){
        header("Location: ../add_admin.php?error=emptyfields");
        exit();
    }
    elseif($password !== $password_repeat){
        header("Location: ../add_admin.php?error=passwordcheck");
        exit();
    }
    else{
        $sql = "SELECT user_name FROM users WHERE user_name=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:../add_admin.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0){
                header("Location:../add_admin.php?error=usertaken");
                exit(); 
            }else{
                $sql = "INSERT INTO users (first_name, last_name, user_name, password) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location:../add_admin.php?error=sqlerror");
                    exit();
                }else{
                    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssss", $f_name, $last_name, $username, $hashedpassword);
                    mysqli_stmt_execute($stmt);
                    header("Location:../add_admin.php?add_admin=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location:../add_admin.php");
    exit();
}



?>