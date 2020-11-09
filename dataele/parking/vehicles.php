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
        <h4> Vehicles Registered with us. </h4>
    </div>
          <div class="valign">

          <?php

          $sql    = "SELECT * from tblVehicle";
          $result = $conn->query($sql);

          if ($result->num_rows) {

              ?>

            <table id="table-driver-info">
              <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Model</th>
                <th>Type</th>
                <th>Color</th>
                <th>Registration Number</th>
              </tr>
              </thead>
              <?php

              while ($row = $result->fetch_assoc()) {
                  ?>
              <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["model"]; ?></td>
                <td><?php echo $row["type"]; ?></td>
                <td><?php echo $row["color"]; ?></td>
                <td><?php echo $row["registration_no"]; ?></td>
              </tr>
              <?php
          }

              ?>

            </table>

            <?php

            $conn->close();

          }

          ?>    
          </div>
<?php include 'footer.php';?>