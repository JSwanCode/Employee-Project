<?php 
$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'employeeProject';
$connect = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
if($connect){
	echo "connected";
}

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$department = $_POST['department'];
	$salary = $_POST['salary'];
	$address = $_POST['address'];
	$sql = "INSERT INTO Employees(name, department, salary, address)VALUES('$name', '$department', '$salary', '$address')";
	if(mysqli_query($connect, $sql)){
		echo "New Record Created Successfully";
	}else{
		echo "Error" . $sql . "<br>" . mysqli_error($connect);
	}
}


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Employee Database</title>
</head>
<body>
<form method="post">
  
    <label for="name">Name</label>
    <input type="name" name="name" class="form-control" id="name" placeholder="name">
 
<br>
    <label for="department">Department</label>
    <input type="department" name="department" class="form-control" id="department" placeholder="department">
 
<br>
    <label for="salary">Salary</label>
    <input type="salary" name="salary" class="form-control" id="salary" placeholder="salary">
  
<br>
    <label for="address">Address</label>
    <input type="address" name="address" class="form-control" id="address" placeholder="address">
 <br>
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>

</body>
</html>