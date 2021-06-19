<?php
require_once ('dbhelp.php');

$s_StudentName = $s_DateOfBirth = $s_Address = $s_PhoneNumber = '';

if (!empty($_POST)) {
$s_ID = '';
	if (isset($_POST['StudentName'])) {
		$s_StudentName = $_POST['StudentName'];
	}

	if (isset($_POST['DateOfBirth'])) {
		$s_DateOfBirth = $_POST['DateOfBirth'];
	}

	if (isset($_POST['Address'])) {
		$s_Address = $_POST['Address'];
	}
    if (isset($_POST['PhoneNumber'])) {
		$s_PhoneNumber = $_POST['PhoneNumber'];
	}

	if (isset($_POST['ID'])) {
		$s_ID = $_POST['ID'];
	}

    $s_StudentName = str_replace('\'', '\\\'', $s_StudentName);
	$s_DateOfBirth = str_replace('\'', '\\\'', $s_DateOfBirth);
	$s_Address      = str_replace('\'', '\\\'', $s_Address);
	$s_PhoneNumber  = str_replace('\'', '\\\'', $s_PhoneNumber);
	$s_ID       = str_replace('\'', '\\\'', $s_ID);

	if ($s_ID != '') {
		//update
		$sql = "update student set StudentName = '$s_StudentName', DateOfBirth = '$s_DateOfBirth', Address = '$s_Address', PhoneNumber = '$s_PhoneNumber'  where ID = " .$s_ID;
	} else {
		//insert
		$sql = "insert into student(StudentName, DateOfBirth, Address, PhoneNumber) value ('$s_StudentName', '$s_DateOfBirth', '$s_Address', '$s_PhoneNumber')";
	}

	// echo $sql;

	execute($sql);

	header('Location: quanlyhs.php');
	die();
}

$ID = '';
if (isset($_GET['ID'])) {
	$ID          = $_GET['ID'];
	$sql         = 'select * from student where ID = '.$ID;
	$studentList = executeResult($sql);
	if ($studentList != null && count($studentList) > 0) {
		$std        = $studentList[0];
		$s_StudentName = $std['StudentName'];
		$s_DateOfBirth      = $std['DateOfBirth'];
		$s_Address  = $std['Address'];
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
				<h2 class="text-center">Add Student</h2>
			</div>
			<div class="panel-body">
				<form method="post">
                <div class="form-group">
					  <label for="StudentName">StudentName:</label>
					  <input type="number" name="ID" value="<?=$ID?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="StudentName" name="StudentName" value="<?=$s_StudentName?>">
					</div>
					<div class="form-group">
					  <label for="DateOfBirth">DateOfBirth:</label>
					  <input type="date ($format, $timestamp = 'time()')" class="form-control" id="DateOfBirth" name="DateOfBirth" value="<?=$s_DateOfBirth?>">
					</div>
					<div class="form-group">
					  <label for="Address">Address:</label>
					  <input type="text" class="form-control" id="Address" name="Address" value="<?=$s_Address?>">
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