<?php
if (isset($_POST['ID'])) {
	$ID = $_POST['ID'];

	require_once ('dbhelp.php');
	$sql = 'delete from course where ID = '.$ID;
	execute($sql);

	echo 'Xoá khóa học thành công';
}