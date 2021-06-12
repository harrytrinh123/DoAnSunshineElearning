<?php
if (isset($_POST['ID'])) {
	$ID = $_POST['ID'];

	require_once ('dbhelp.php');
	$sql = 'delete from employee where ID = '.$ID;
	execute($sql);

	echo 'Xoá nhân viên thành công';
}