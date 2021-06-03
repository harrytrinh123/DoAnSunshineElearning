<?php
require_once ('dbhelp.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
	include("assets/source/class.php");
	$p = new csdl();
  ?>
  <?php include("./partials/headlibs.php") ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forum</title>
  <link rel="stylesheet" href="assets/css/forum.css" />
    <link rel="stylesheet" href="./assets/css/index.css">

</head>
<body>
  <?php include("./partials/header.php") ?>
    <div class="container">
        <div class="row">
            <div class="col-8 col-s-8 menu">
                <div id="topic_name" class="text-uppercase font-weight-bold">Nghe</div><br />
                <?php
					
					$sql = 'select * from post a join student b on a.StudentID = b.ID where type = 1';
					$studentList = executeResult($sql);

					foreach ($studentList as $std) {
						echo '<div class="list-group">
									<a href="Postdetail.php?ID='.$std['ID'].'" class="list-group-item list-group-item-action"><img src="images/user_avatar2.png" width="40" height="40" />
									<p>'.$std['StudentName'].'</p>
									<p>'.$std['Content'].'</p>
									<p style="float:right">'.$std['Time'].'</p>
									</a>
							  </div>';
					}
				?>
            </div>
            <div class="col-4 col-s-4 menu">
                <div id="lasted_posts" class="text-uppercase font-weight-bold">Lasted Topic</div><br />
                <?php
					
					$sql = 'select * from post a join student b on a.StudentID = b.ID order by Time ASC limit 1';
					$studentList = executeResult($sql);

					foreach ($studentList as $std) {
						echo '<div class="list-group">
									<a href="Postdetail.php?ID='.$std['ID'].'" class="list-group-item list-group-item-action"><img src="images/user_avatar2.png" width="40" height="40" />
									<p>'.$std['StudentName'].'</p>
									<p>'.$std['Content'].'</p>
									<p style="float:right">'.$std['Time'].'</p>
									</a>
							  </div>';
					}
				?>
            </div>
            <div class="col-8 col-s-8 menu">
                <div id="topic_name" class="text-uppercase font-weight-bold">Nói</div><br />
                <?php
					
					$sql = 'select * from post a join student b on a.StudentID = b.ID where type = 2';
					$studentList = executeResult($sql);

					foreach ($studentList as $std) {
						echo '<div class="list-group">
									<a href="Postdetail.php?ID='.$std['ID'].'" class="list-group-item list-group-item-action"><img src="images/user_avatar2.png" width="40" height="40" />
									<p>'.$std['StudentName'].'</p>
									<p>'.$std['Content'].'</p>
									<p style="float:right">'.$std['Time'].'</p>
									</a>
							  </div>';
					}
				?>
            </div>
			<div class="col-8 col-s-8 menu">
                <div id="topic_name" class="text-uppercase font-weight-bold">Đọc</div><br />
				<?php
					
					$sql = 'select * from post a join student b on a.StudentID = b.ID where type = 3';
					$studentList = executeResult($sql);

					foreach ($studentList as $std) {
						echo '<div class="list-group">
									<a href="Postdetail.php?ID='.$std['ID'].'" class="list-group-item list-group-item-action"><img src="images/user_avatar2.png" width="40" height="40" />
									<p>'.$std['StudentName'].'</p>
									<p>'.$std['Content'].'</p>
									<p style="float:right">'.$std['Time'].'</p>
									</a>
							  </div>';
					}
				?>
            </div>
			<div class="col-8 col-s-8 menu">
                <div id="topic_name" class="text-uppercase font-weight-bold">Viết</div><br />
                <?php
					
					$sql = 'select * from post a join student b on a.StudentID = b.ID where type = 4';
					$studentList = executeResult($sql);

					foreach ($studentList as $std) {
						echo '<div class="list-group">
									<a href="Postdetail.php?ID='.$std['ID'].'" class="list-group-item list-group-item-action"><img src="images/user_avatar2.png" width="40" height="40" />
									<p>'.$std['StudentName'].'</p>
									<p>'.$std['Content'].'</p>
									<p style="float:right">'.$std['Time'].'</p>
									</a>
							  </div>';
					}
				?>
            </div>
			<div class="col-8 col-s-8 menu">
                <div id="topic_name" class="text-uppercase font-weight-bold">Khác</div><br />
                <?php
					
					$sql = 'select * from post a join student b on a.StudentID = b.ID where type = 5';
					$studentList = executeResult($sql);

					foreach ($studentList as $std) {
						echo '<div class="list-group">
									<a href="Postdetail.php?ID='.$std['ID'].'" class="list-group-item list-group-item-action"><img src="images/user_avatar2.png" width="40" height="40" />
									<p>'.$std['StudentName'].'</p>
									<p>'.$std['Content'].'</p>
									<p style="float:right">'.$std['Time'].'</p>
									</a>
							  </div>';
					}
				?>
            </div>
			</div>
			</div>
			<!-- FOOTER -->
			  <?php include("./partials/footer.php") ?>
			  <!-- Contact bar -->
			  <ul class="contact-bar">
				<li class="facebook">
				  <a href="https://m.me" target="_blank" rel="nofollow"></a>
				</li>
				<li class="zalo">
				  <a href="https://zalo.me" target="_blank" rel="nofollow"></a>
				</li>
			  </ul>

</body>
</html>