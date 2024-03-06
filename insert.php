<?php

$conn = mysqli_connect("localhost", "root", "", "tutorial") or die("Connection Failed");
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if (mysqli_num_rows($result) > 0) {
    $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
  <tr>
    <th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Department</th>
    <th>Designation</th>
  </tr>';
  
    while ($row = mysqli_fetch_assoc($result)) {
      $output .= "<tr><td>" . $row["id"] . "</td><td>" . $row["fname"] . "</td><td>" . $row["lname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["department"] . "</td><td>" . $row["designation"] . "</td></tr>";
    }
  
    $output .= "</table>";
    mysqli_close($conn);
    echo $output;
  } else {
    echo "<h1>No Record Found</h1>";
  }
  
?>
