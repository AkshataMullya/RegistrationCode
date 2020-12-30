<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$conn = mysqli_connect("database1.cikrt1wxrd3j.us-east-1.rds.amazonaws.com","admin","^TFGHY6tfghy");
$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($conn,$result) > 0) {
    echo "<table><tr><th>ID</th><th>FirstName</th><th>LastName</th><th>EmailID</th><th>MobileNo.</th></tr>";
    // output data of each row
//    while($row = mysqli_fetch_assoc($conn,$result)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstName"]. " " . $row["lastName"]. " " . $row["email"]. " " . $row["mobile"]. "</td></tr>";
  //  }
    echo "</table>";
//} else {
  //  echo "0 results";
//}

mysqli_close($conn);
?>

</body>
</html>
