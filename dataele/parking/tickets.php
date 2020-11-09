<?php 
//echo "<pre> inside tickets";
//print_r($conn);
//exit;
//$sql = "SELECT tblDriver.*, tblMembershipCard.* from tblDriver INNER JOIN tblMembershipCard ON tblDriver.id = tblMembershipCard.driver_id /*WHERE tblMembershipCard.driver_id = 2*/";
//$result = $conn->query($sql);

// OLD CODE STARTS -----
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "id: " . $row["id"]. " Name: " . $row["name"]. " driver_id: " . $row["driver_id"]. "<br>";
//     }
//   } else {
//     echo "0 results";
//   }
//   $conn->close();
// OLD CODE ENDS -----

// if ($result->num_rows > 0) {
//     echo "<table><tr><th>ID</th><th>Name</th><th>Driver ID</th></tr>";
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["driver_id"]. "</td></tr>";
//     }
//     echo "</table>";
// } else {
//     echo "0 results";
// }

// $conn->close();

$sql = "SELECT tblDriver.name,
        tblDriver.id AS 'driver_id',
        tblMembershipCard.id AS 'Member_ID', 
        tblMembershipCard.expiry_date AS 'Card_Expiry', 
        tblBooking.token_no, tblBooking.floor_id, tblBooking.entry_time, tblBooking.status
        FROM tblDriver INNER JOIN tblMembershipCard ON tblMembershipCard.driver_id = tblDriver.id
        INNER JOIN tblBooking ON tblBooking.membership_id = tblMembershipCard.id";

$result = $conn->query($sql);
// echo "<pre>";
// print_r($sql);
// exit;
echo "<table>
    <thead>
    <tr>
    <th>Token No</th>
    <th>name</th>
    <th>Member ID</th>
    <th>Card Expiry</th>
    <th>Floor No</th>
    <th>Entry Time</th>
    <th>Parked</th>
    </tr>
    </thead>";

if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
            if(!empty($row)):
            ?>   
                <tr>
                <td><?php echo $row['token_no']; ?></td>
                <td><a href="driver-info.php?driver_id=<?php echo $row['driver_id']; ?>"><?php echo $row['name']; ?></a></td>
                <td><?php echo $row['Member_ID']; ?></td>
                <td><?php echo $row['Card_Expiry']; ?></td>
                <td><?php echo $row['floor_id']; ?></td>
                <td><?php echo $row['entry_time']; ?></td>
                <td><?php echo $row['status']; ?></td>
                </tr>
        <?php
            endif;
    }
}
echo "</table>";

?>