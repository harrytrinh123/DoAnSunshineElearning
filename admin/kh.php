<?php
require_once ('dbhelp.php');

$s_CourseName = $s_Description = '';

if (!empty($_POST)) {

	if (isset($_POST['CourseName'])) {
		$s_CourseName = $_POST['CourseNamee'];
	}

	if (isset($_POST['Description'])) {
		$s_Description = $_POST['Description'];
	}
    

	if (isset($_POST['ID'])) {
		$s_ID = $_POST['ID'];
	}

    $s_CourseName = str_replace('\'', '\\\'', $s_CourseName);
	$s_Description      = str_replace('\'', '\\\'', $s_Description);
	
	$s_ID       = str_replace('\'', '\\\'', $s_ID);

	if ($s_ID != '') {
		//update
		$sql = "update student CourseName = '$s_CourseName', Description = '$s_Description'  where ID = " .$s_ID;
	} else {
		//insert
		$sql = "insert into student(CourseName, Description) value ('$s_CourseName', '$s_Description')";
	}

	// echo $sql;

	execute($sql);

	header('Location: quanlykh.php');
	die();
}

$ID = '';
if (isset($_GET['ID'])) {
	$ID          = $_GET['ID'];
	$sql         = 'select * from course where ID = '.$ID;
	$courseList = executeResult($sql);
	if ($courseList != null && count($courseList) > 0) {
		$std        = $teacherList[0];
		$s_CourseName = $std['CourseName'];
		$s_Description  = $std['Description'];
        
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
					  <label for="CourseName">CourseName:</label>
					  <input type="number" name="ID" value="<?=$ID?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="CourseName" name="CourseName" value="<?=$s_CourseName?>">
					</div>
					
					<div class="form-group">
					  <label for="Description">Description:</label>
					  <input type="text" class="form-control" id="Description" name="Description" value="<?=$s_Description?>">
					</div>
                    
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>