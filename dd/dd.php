<?php
require_once ('db.php');

$s_Date = $s_StudentID = $s_ClassID = '';

if (!empty($_POST)) {

	if (isset($_POST['Date'])) {
		$s_Date = $_POST['Date'];
	}

	if (isset($_POST['StudentID'])) {
		$s_StudentID = $_POST['StudentID'];
	}

	if (isset($_POST['ClassID'])) {
		$s_ClassID = $_POST['ClassID'];
	}
	if (isset($_POST['ID'])) {
		$s_ID = $_POST['ID'];
	}

    $s_Date = str_replace('\'', '\\\'', $s_Date);
	$s_StudentID = str_replace('\'', '\\\'', $s_StudentID);
	$s_ClassID     = str_replace('\'', '\\\'', $s_ClassID);
	$s_ID          = str_replace('\'', '\\\'', $s_ID);

	if ($s_ID != '') {
		//update
		$sql = "update rollcall Date  = '$s_Date', StudentID = '$s_StudentID', ClassID = '$s_ClassID', where ID = " .$s_ID;
	} else {
		//insert
		$sql = "insert into rollcall(Date, StudentID, ClassID) value ('$s_Date', '$s_StudentID', '$s_ClassID')";
	}

	// echo $sql;

	execute($sql);

	header('Location: rollcall.php');
	die();
}

$ID = '';
if (isset($_GET['ID'])) {
	$ID          = $_GET['ID'];
	$sql         = 'select * from rollcall where ID = '.$ID;
	$rollcallList = executeResult($sql);
	if ($rocallList != null && count($rollcallList) > 0) {
		$std        = $studentList[0];
		$s_Date = $std['Date'];
		$s_StudentID = $std['StudentID'];
		$s_ClassID  = $std['ClassID'];
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
					  <label for="StudentName">StudentID:</label>
					  <input type="number" name="ID" value="<?=$ID?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="StudentID" name="StudentID" value="<?=$s_StudentID?>">
					</div>
					<div class="form-group">
					  <label for="DateOfBirth">Date:</label>
					  <input type="date ($format, $timestamp = 'time()')" class="form-control" id="DateOfBirth" name="DateOfBirth" value="<?=$s_Date?>">
					</div>
					<div class="form-group">
					  <label for="Address">ClassID:</label>
					  <input type="text" class="form-control" id="ClassID" name="ClassID" value="<?=$s_ClassID?>">
					</div>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>