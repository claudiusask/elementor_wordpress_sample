<?php ob_start();
include 'header.php'; ?>
<?php
    if(empty($_SESSION['login'])){
        header("Location: http://localhost:8100/parking/login.php");
        exit();
    }
    ob_end_flush();
?>

<div class="container">
    
    <div class="user-acc">
        <?php 
        echo $_SESSION['login']['current_user']; 
        ?>
    </div>

    <div class="starter-template">
        <h1>Welcome to Marina Car Parking</h1>
    </div>
    <div>
    <?php include 'tickets.php' ?>
    </div>
    

</div><!-- /.container -->

<?php include 'footer.php'; ?>