<?php 
require 'header.php';
?>

<main>
    <div class= "wrapper-main">
        <section class= "section-main">
            <?php 
                if (isset($_SESSION['username'])){
                    echo "<p class = user-login>You are logged in!</p>";
                }else{
                    echo "<p class = user-login>You are logged out!</p>";
                }
            ?>
        </section>
    </div> 
</main>
