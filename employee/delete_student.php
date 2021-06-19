<?php
if (isset($_POST['ID'])) {
	$ID = $_POST['ID'];

	require_once ('dbhelp.php');
	$sql = 'delete from student where ID = '.$ID;
	execute($sql);

	echo 'Xoá sinh viên thành công';
}