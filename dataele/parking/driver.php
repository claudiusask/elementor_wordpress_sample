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
        <h1>Welcome to Marina Car Parking</h1>
        <h3><a href="customer-form.php">Add New Driver</a></h3>
    </div>
        <div>
            <?php
            $sql = "SELECT * FROM tblDriver";
            // echo "<pre>";
            // print_r($sql);
            // exit();       
            $result = $conn->query($sql);
     
            if($result->num_rows > 0){
             
            ?>
            <table id="table-driver-info">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Contact No.</th>
                        <th>CNIC No.</th>
                        <th>DRV. License No.</th>
                        <th>Edit Customer info</th>
                    </tr>
                </thead>  
                <tbody>
                    <?php           
                    foreach($result as $row){
                              echo '<tr>
                                    <td>'.$row['id'].'</td>
                                    <td>'.$row['name'].'</td>
                                    <td>'.$row['age'].'</td>
                                    <td>'.$row['contact_no'].'</td>
                                    <td>'.$row['cnic'].'</td>
                                    <td>'.$row['driving_license_no'].'</td>
                                    <td><a href="driver-edit.php?driver_id='. $row['id'] .'">EDIT</a></td>
                                    </tr>';
                    }    
            }
            $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    

</div>

<?php include 'footer.php'; ?>