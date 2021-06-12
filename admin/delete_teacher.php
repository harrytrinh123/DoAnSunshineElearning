<?php
if (isset($_POST['ID'])) {
	$ID = $_POST['ID'];

	require_once ('dbhelp.php');
	$sql = 'delete from teacher where ID = '.$ID;
	execute($sql);

	echo 'Xoá giáo viên thành công';
}