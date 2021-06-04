<?php
require_once ('dbhelp.php');

$s_Title = $s_Content = $s_ImageUrl = $s_Type = '';

if (!empty($_POST)) {

	if (isset($_POST['Title'])) {
		$s_Title = $_POST['Title'];
	}

	if (isset($_POST['Content'])) {
		$s_Content = $_POST['Content'];
	}

	if (isset($_POST['ImageUrl'])) {
		$s_ImageUrl = $_POST['ImageUrl'];
	}
    if (isset($_POST['Type'])) {
		$s_Type = $_POST['Type'];
	}

	if (isset($_POST['ID'])) {
		$s_ID = $_POST['ID'];
	}

    $s_Title = str_replace('\'', '\\\'', $s_Title);
	$s_Content = str_replace('\'', '\\\'', $s_Content);
	$s_ImageUrl     = str_replace('\'', '\\\'', $s_ImageUrl);
	$s_Type = str_replace('\'', '\\\'', $s_Type);
	$s_ID          = str_replace('\'', '\\\'', $s_ID);

	if ($s_ID != '') {
		//update
		$sql = "update post Title = '$s_Title', Content = '$s_Content', ImageUrl = '$s_ImageUrl', Type = '$s_Type'  where ID = " .$s_ID;
	} else {
		//insert
		$sql = "insert into post(Title, Content, ImageUrl, Type) value ('$s_Title', '$s_Content', '$s_ImageUrl', '$s_Type')";
	}

	//echo $sql;

	execute($sql);

	header('Location: quanlyhs.php');
	die();
}

$ID = '';
if (isset($_GET['ID'])) {
	$ID          = $_GET['ID'];
	$sql         = 'select * from post where ID = '.$ID;
	$studentList = executeResult($sql);
	if ($studentList != null && count($studentList) > 0) {
		$std        = $studentList[0];
		$s_Title = $std['Title'];
		$s_Content      = $std['Content'];
		$s_ImageUrl  = $std['ImageUrl'];
        $s_Type = $std['Type'];
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
				<h2 class="text-center">Đăng Bài</h2>
			</div>
			<div class="panel-body">
				<form method="post">
                <div class="form-group">
					  <label for="StudentName">Title</label>
					  <input type="number" name="ID" value="<?=$ID?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="StudentName" name="StudentName" value="<?=$s_Title?>">
					</div>
					<div class="form-group">
					  <label for="DateOfBirth">Content</label>
					  <input type="date ($format, $timestamp = 'time()')" class="form-control" id="DateOfBirth" name="DateOfBirth" value="<?=$s_Content?>">
					</div>
					<div class="form-group">
					  <label for="Address">Image</label>
					  <input type="text" class="form-control" id="Address" name="Address" value="<?=$s_ImageUrl?>">
					</div>
                    <div class="form-group">
					  <label for="PhoneNumber">Type</label>
					  <input type="number" class="form-control" id="PhoneNumber" name="PhoneNumber" value="<?=$s_Type?>">
					</div>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>