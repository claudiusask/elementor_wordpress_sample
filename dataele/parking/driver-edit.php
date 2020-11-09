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
    <div id="edit-driver-box">
   <?php
   if(!empty($_POST)){
       $sql =   "UPDATE tblDriver SET name = '".$_POST['name']."',
                age = '".$_POST['age']."',
                contact_no= '".$_POST['contact_no']."',
                cnic= '".$_POST['cnic']."',
                driving_license_no= '".$_POST['driving_license_no']."' WHERE id=".$_POST['id']." ";
    //    echo $sql;
    //    echo "<pre>";
    //    print_r($_POST);
    //    exit;
    //if(mysqli_query($conn, $sql)){
    $result = $conn->query($sql);    
    if($result == True){
        echo "Record updated successfully";
        // header("Location: http://localhost:8100/parking/driver.php");
        // exit();
    }
    else{
        echo "failed.";
    }
    $conn->close();

   }
   if(!empty($_GET['driver_id'])){
       $driver_id = $_GET['driver_id'];
       $sql = "SELECT * FROM tblDriver WHERE id=".$driver_id;
    //    echo "<pre>";
    //    print_r($sql);
    //    exit();
       
       $result = $conn->query($sql);

       if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        ?>
        
        <form action="" method="POST">
        <div class="section">
        <div class="form-wrapper">
        <div class="page-info">
            <h3>Edit <span class="editer-h3"><?php echo $row['name']; ?></span> Information</h3>
        </div>

            <div class="field-group">
                    <div class="label-wrapper">
                        <label>
                        ID
                        </label>
                    </div>
                    <div class="field-wrapper">
                        <input type="text" name="id" value="<?php echo $row['id']; ?>" readonly>

                    </div>
            </div>
            <div class="field-group">
                    <div class="label-wrapper">
                        <label>
                        NAME
                        </label>
                    </div>
                    <div class="field-wrapper">
                        <input type="text" name="name" value="<?php echo $row['name']; ?>">

                    </div>
            </div>
            <div class="field-group">
                    <div class="label-wrapper">
                        <label>
                        Age
                        </label>
                    </div>
                    <div class="field-wrapper">
                        <input type="text" name="age" value="<?php echo $row['age']; ?>">

                    </div>
            </div>
            <div class="field-group">
                    <div class="label-wrapper">
                        <label>
                        Contact No.
                        </label>
                    </div>
                    <div class="field-wrapper">
                        <input type="text" name="contact_no" value="<?php echo $row['contact_no']; ?>">

                    </div>
            </div>
            <div class="field-group">
                    <div class="label-wrapper">
                        <label>
                        CNIC or Identity No.
                        </label>
                    </div>
                    <div class="field-wrapper">
                        <input type="text" name="cnic" value="<?php echo $row['cnic']; ?>">

                    </div>
            </div>
            <div class="field-group">
                    <div class="label-wrapper">
                        <label>
                        Driving License No.
                        </label>
                    </div>
                    <div class="field-wrapper">
                        <input type="text" name="driving_license_no" value="<?php echo $row['driving_license_no']; ?>">

                    </div>
            </div>            
            <div class="field-group">
                    <div class="field-wrapper submit-button">
                        <input type="submit" name="d_submit" value="submit">
                    </div>
                    <div class="field-wrapper submit-button home-button_d">
                        <a href="dashboard.php">Go to Home</a>
                    </div>
            </div>
            

        </div>
        </div>
        </form>
        <?php
       }
   }
//    echo"<pre>";
//    print_r($_GET);
//    exit;
$conn->close();
   ?>
    </div>
    

</div><!-- /.container -->

<?php include 'footer.php'; ?>