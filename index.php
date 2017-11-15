<?php 
$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'employeeProject';
$connect = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
if($connect){
	echo "connected";
}
$sql2 = "SELECT * FROM Employees";
$results = mysqli_query($connect, $sql2);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Employee Database</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
	



<table class="table table-hover">
<tr>
<th>ID</th>
	<th>Name</th>
	<th>Department</th>
	<th>Salary</th>
	<th>Address</th>
</tr>
  <?php 
  if ($results -> num_rows > 0){
  	while($row = $results -> fetch_assoc()) {
  		echo "<tr><td>" .$row["id"]."</td>" . "<td>" . $row["name"] . "</td>" . "<td>" . $row["department"] . "</td>" . "<td>" . $row["salary"] . "</td>" . "<td>" . $row["address"] . "</td></tr>";
  	}
  }
   ?>
</table>
</div>
</div>
</div>
</body>
</html>