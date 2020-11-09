<?php ob_start();
include 'header.php'; ?>
<?php
    if(empty($_SESSION['login'])){
        header("Location: http://localhost:8100/parking-website/login.php");
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
        <h1>Marina Car Parking</h1>
        <h4>You can edit or delete the customer entries here with the below form.</h4>
    </div>
<?php
    // the ob_start at the start of this page and ob_end_fush is important to resirect to work.

    //mysqli_real_escap_strin is better to use than $name = $_POST['name']
    // use $_POST only if there is something like password which we want to protect
    $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
    $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
    $contact_no = mysqli_real_escape_string($conn, $_REQUEST['contact_no']);
    $cnic = mysqli_real_escape_string($conn, $_REQUEST['cnic']);
    $driving_license_no = mysqli_real_escape_string($conn, $_REQUEST['driving_license_no']);
    

    $sql = "INSERT INTO `tblDriver`(`name`, `age`, `contact_no`, `cnic`, `driving_license_no`) 
            VALUES ('$name', '$age', '$contact_no', '$cnic', '$driving_license_no')";
    // echo "<pre>";
    // print_r($sql);
    // exit();
    if(mysqli_query($conn, $sql)){
        echo "Record updated successfully";
    }
    else{
        echo "failed.";
    }
    $conn->close();
?>
    <div class="customer-edit-form-container">
        <p class="label-box">Customer Details</p>
        <p class="label-box-small">Please pay attention - this will update your Database permanentally</p>
        <form action="" method="post">
            <div class="form-inputs">
                <input type="text" name="name" class="long-input" placeholder="Full Name" required>
            </div>
            <div class="form-inputs">
                <input type="text" name="age" class="long-input" placeholder="Age --only digits--">
            </div>
            <div class="form-inputs">
                <input type="tel" name="contact_no" class="long-input" placeholder="Contact No. ex:03001122334" required>
            </div>
            <div class="form-inputs">
                <input type="text" name="cnic" class="long-input" placeholder="CNIC or Identity Card No." required>
            </div>
            <div class="form-inputs">
                <input type="text" name="driving_license_no" class="long-input" placeholder="Driving License No." required>
            </div>
            <div class="form-inputs">
                <button type="submit" class="btn btn-primary" name="btn" value="login">Sign In</button>
            </div>
    </div>
    

</div>

<?php include 'footer.php'; ?>