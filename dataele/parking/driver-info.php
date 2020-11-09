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
    </div>
    <div>
   <?php
   if(!empty($_GET['driver_id'])){
       $driver_id = $_GET['driver_id'];
       $sql = "SELECT * FROM tblDriver WHERE id=".$driver_id;
       //echo $driver_id;
       $result = $conn->query($sql);

       if($result->num_rows > 0){
        $row = $result->fetch_assoc();
           $table = '<table id="table-driver-info">';
           $header = '<tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Contact No.</th>
                        <th>CNIC No.</th>
                        <th>DRV. License No.</th>
                        <th>Edit Customer info</th>
                     </tr>';
            $tableRow = '<tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['name'].'</td>
                        <td>'.$row['age'].'</td>
                        <td>'.$row['contact_no'].'</td>
                        <td>'.$row['cnic'].'</td>
                        <td>'.$row['driving_license_no'].'</td>
                        <td><a href="driver-edit.php?driver_id='. $row['id'] .'">EDIT</a></td>
                        </tr>';
            $tableEnd = '</table>';
            echo $table.$header.$tableRow.$tableEnd;
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