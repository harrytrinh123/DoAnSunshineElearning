<?php
require_once ('dbhelp.php');

$s_EmployeeName = $s_Address =  $s_Email  = $s_PhoneNumber = '';

if (!empty($_POST)) {

	if (isset($_POST['EmployeeName'])) {
		$s_EmployeeName = $_POST['EmployeeName'];
	}

	if (isset($_POST['Address'])) {
		$s_Address = $_POST['Address'];
	}
    if (isset($_POST['Email'])) {
		$s_Email = $_POST['Email'];
	}

    if (isset($_POST['PhoneNumber'])) {
		$s_PhoneNumber = $_POST['PhoneNumber'];
	}

	if (isset($_POST['ID'])) {
		$s_ID = $_POST['ID'];
	}

  	$s_EmployeeName = str_replace('\'', '\\\'', $s_EmployeeName);
	$s_Address      = str_replace('\'', '\\\'', $s_Address);
	$s_Email = str_replace('\'', '\\\'', $s_Email);
    $s_PhoneNumber  = str_replace('\'', '\\\'', $s_PhoneNumber);
	$s_ID       = str_replace('\'', '\\\'', $s_ID);

	if ($s_ID != '') {
		//update
		$sql = "update employee set EmployeeName = '$s_EmployeeName', Address = '$s_Address', Email = '$s_Email', PhoneNumber = '$s_PhoneNumber'  where ID = " .$s_ID;
	} else {
		//insert
		$sql = "insert into employee(EmployeeName, Address, Email, PhoneNumber) value ('$s_EmployeeName', '$s_Address',  '$s_Email',  '$s_PhoneNumber')";
	}

	// echo $sql;

	execute($sql);

	header('Location: quanlynv.php');
	die();
}

$ID = '';
if (isset($_GET['ID'])) {
	$ID          = $_GET['ID'];
	$sql         = 'select * from employee where ID = '.$ID;
	$teacherList = executeResult($sql);
	if ($teacherList != null && count($teacherList) > 0) {
		$std        = $teacherList[0];
		$s_EmployeeName = $std['EmployeeName'];
		$s_Address  = $std['Address'];
     	$s_Email      = $std['Email'];
        $s_PhoneNumber = $std['PhoneNumber'];
	} else {
		$ID = '';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Add Employee</h2>
			</div>
			<div class="panel-body">
				<form method="post">
                <div class="form-group">
					  <label for="EmployeeName">EmployeeName:</label>
					  <input type="number" name="ID" value="<?=$ID?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="EmployeeName" name="EmployeeName" value="<?=$s_EmployeeName?>">
					</div>
					
					<div class="form-group">
					  <label for="Address">Address:</label>
					  <input type="text" class="form-control" id="Address" name="Address" value="<?=$s_Address?>">
					</div>
                    <div class="form-group">
					  <label for="Email">Email:</label>
					  <input type="text" class="form-control" id="Email" name="Email" value="<?=$s_Email?>">
					</div>
                    <div class="form-group">
					  <label for="PhoneNumber">PhoneNumber:</label>
					  <input type="number" class="form-control" id="PhoneNumber" name="PhoneNumber" value="<?=$s_PhoneNumber?>">
					</div>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>