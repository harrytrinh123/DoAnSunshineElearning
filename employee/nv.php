<?php
require_once ('dbhelp.php');

$s_EmployeeName = $s_Address =  $s_Email  = $s_UserName = '';

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

    if (isset($_POST['UserName'])) {
		$s_UserName = $_POST['UserName'];
	}

	if (isset($_POST['ID'])) {
		$s_ID = $_POST['ID'];
	}

  	$s_EmployeeName = str_replace('\'', '\\\'', $s_EmployeeName);
	$s_Address      = str_replace('\'', '\\\'', $s_Address);
	$s_Email = str_replace('\'', '\\\'', $s_Email);
    $s_UserName  = str_replace('\'', '\\\'', $s_UserName);
	$s_ID       = str_replace('\'', '\\\'', $s_ID);

	if ($s_ID != '') {
		//update
		$sql = "update employee set EmployeeName = '$s_EmployeeName', Address = '$s_Address', Email = '$s_Email', UserName = '$s_UserName'  where ID = " .$s_ID;
	} else {
		//insert
		$sql = "insert into employee(EmployeeName, Address, Email, UserName) value ('$s_EmployeeName', '$s_Address',  '$s_Email',  '$s_UserName')";
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
        $s_UserName = $std['Username'];
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
					  <label for="UserName">UserName:</label>
					  <input type="text" class="form-control" id="UserName" name="UserName" value="<?=$s_UserName?>">
					</div>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>