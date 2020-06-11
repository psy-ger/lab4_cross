
<!DOCTYPE html>
<html>
<head>
<style>

table, td, th {
  border: 1px solid black;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','lab');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM `users` WHERE id = '$q'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Login</th>
<th>Password</th>
<th>Role</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['login'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "<td>" . $row['role'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
<a href="crud.php">Come back</a>
</body>
</html>