<?php
require_once ('dbhelp.php');

$s_ClassName = $s_ClassSize = $s_DateStart = $s_DateEnd = $s_ScheduleID = $s_CourseID = $s_LichHoc = $s_HocPhi = '';

if (!empty($_POST)) {
	$s_id = '';
	if (isset($_POST['ClassName'])) {
		$s_ClassName = $_POST['ClassName'];
	}

    if (isset($_POST['ClassSize'])) {
		$s_ClassSize = $_POST['ClassSize'];
	}

	if (isset($_POST['DateStart'])) {
		$s_DateStart = $_POST['DateStart'];
	}
    
    if (isset($_POST['DateEnd'])) {
		$s_DateEnd = $_POST['DateEnd'];
	}

    if (isset($_POST['ScheduleID'])) {
		$s_ScheduleID = $_POST['ScheduleID'];
	}

    if (isset($_POST['CourseID'])) {
		$s_CourseID = $_POST['CourseID'];
	}

    if (isset($_POST['LichHoc'])) {
		$s_LichHoc = $_POST['LichHoc'];
	}

    if (isset($_POST['HocPhi'])) {
		$s_HocPhi = $_POST['HocPhi'];
	}


	if (isset($_POST['ID'])) {
		$s_ID = $_POST['ID'];
	}

    $s_ClassName = str_replace('\'', '\\\'', $s_ClassName);
	$s_ClassSize      = str_replace('\'', '\\\'', $s_ClassSize);
	$s_DateStart = str_replace('\'', '\\\'', $s_DateStart);
	$s_DateEnd      = str_replace('\'', '\\\'', $s_DateEnd);
        $s_ScheduleID = str_replace('\'', '\\\'', $s_ScheduleID);
	$s_CourseID      = str_replace('\'', '\\\'', $s_CourseID);
        $s_LichHoc = str_replace('\'', '\\\'', $s_LichHoc);
	$s_HocPhi      = str_replace('\'', '\\\'', $s_HocPhi);
	$s_ID       = str_replace('\'', '\\\'', $s_ID);

	if ($s_ID != '') {
		//update
		$sql = "update class set ClassName = '$s_ClassName', ClassSize = '$s_ClassSize', DateStart = '$s_DateStart', DateEnd = '$s_DateEnd', ScheduleID = '$s_ScheduleID', CourseID = '$s_CourseID', LichHoc = '$s_LichHoc', HocPhi = '$s_HocPhi' where ID = " .$s_ID;
	} else {
		//insert
		$sql = "insert into class(ClassName, ClassSize, DateStart, DateEnd, ScheduleID, CourseID, LichHoc, HocPhi) value ('$s_ClassName', '$s_ClassSize', '$s_DateStart', '$s_DateEnd', '$s_ScheduleID', '$s_CourseID', '$s_LichHoc', '$s_HocPhi')";
	}

	// echo $sql;

	execute($sql);

	header('Location: quanlylop.php');
	die();
}

$ID = '';
if (isset($_GET['ID'])) {
	$ID          = $_GET['ID'];
	$sql         = 'select * from class where ID = '.$ID;
	$classList = executeResult($sql);
	if ($classList != null && count($classList) > 0) {
		$std        = $classList[0];
		$s_ClassName = $std['ClassName'];
		$s_ClassSize  = $std['ClassSize'];
       	        $s_DateStart = $std['DateStart'];
		$s_DateEnd  = $std['DateEnd'];
                $s_ScheduleID = $std['ScheduleID'];
		$s_CourseID  = $std['CourseID'];
                $s_LichHoc = $std['LichHoc'];
		$s_HocPhi  = $std['HocPhi'];
        
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
				<h2 class="text-center">Add Course</h2>
			</div>
			<div class="panel-body">
				<form method="post">
                <div class="form-group">
					  <label for="ClassName">ClassName:</label>
					  <input type="number" name="ID" value="<?=$ID?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="ClassName" name="ClassName" value="<?=$s_ClassName?>">
					</div>
					
					<div class="form-group">
					  <label for="ClassSize">ClassSize:</label>
					  <input type="text" class="form-control" id="ClassSize" name="ClassSize" value="<?=$s_ClassSize?>">
					</div>
                    <div class="form-group">
					  <label for="DateStart">DateStart:</label>
					  <input type="date" class="form-control" id="DateStart" name="DateStart" value="<?=$s_DateStart?>">
					</div>
                    <div class="form-group">
					  <label for="DateEnd">DateEnd:</label>
					  <input type="date" class="form-control" id="DateEnd" name="DateEnd" value="<?=$s_DateEnd?>">
					</div>
					<div class="form-group">
					  <label for="LichHoc">LichHoc:</label>
					  <input type="text" class="form-control" id="LichHoc" name="LichHoc" value="<?=$s_LichHoc?>">
					</div>
                    <div class="form-group">
					  <label for="HocPhi">HocPhi:</label>
					  <input type="text" class="form-control" id="HocPhi" name="HocPhi" value="<?=$s_HocPhi?>">
					</div>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>