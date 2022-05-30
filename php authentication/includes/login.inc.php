<?php

if (isset($_POST['login-submit'])){

    require 'dbh.inc.php';
   
    $user = $_POST['userid'];
    $password = $_POST['pass'];

    if (empty($user)||empty($password)){
        header("Location:../index.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE user_name=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:../index.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "s", $user);
            mysqli_stmt_execute($stmt);
            $results = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($results)){
                $pwdcheck = password_verify($password, $row['password']);
                if ($pwdcheck == false){
                    header("Location:../index.php?error=wrongpassword");
                    exit();
                }elseif($pwdcheck == true){
                    session_start();
                    $_SESSION['username'] = $row['user_name'];
                    header("Location:../index.php?login=success");
                    exit();
                }else{
                    header("Location:../index.php?error=wrongpassword");
                    exit();
                }
            }else{
                header("Location:../index.php?error=nouser");
                exit();
            }
        }
    }
}

?>