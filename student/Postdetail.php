<?php
require_once ('dbhelp.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("./partials/headlibs.php") ?>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chi Tiết Bài Đăng</title>
  <link rel="stylesheet" href="assets/css/forum.css" />
  <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
  <?php include("./partials/header.php") ?>
  <div class="container">
    <div class="row">
      <div class="col-8 col-s-8 menu">
        <div id="topic_name_detail" class="text-uppercase font-weight-bold">Topic Name</div><br />
                   <?php
					$ID = $_GET['ID'];
					$sql = "select * from post a join student b on a.StudentID = b.ID 
												 join comment c on a.ID = c.StudentID
							where ID = '.$ID.'";
					$studentList = executeResult($sql);

					foreach ($studentList as $std) {
						echo '<div class="list-group">
									<a class="list-group-item list-group-item-action"><img src="images/user_avatar2.png" width="40" height="40" />
									<p>'.$std['StudentName'].'</p>
									<p>'.$std['Content'].'</p>
									</a>
							  </div>';
					}
				?>
      </div>
      <div class="col-4 col-s-4 menu">
        <div id="relative_posts" class="text-uppercase font-weight-bold">Relative Posts</div><br />
        <div class="list-group">
          <a href="Postdetail.php" class="list-group-item list-group-item-action"><img src="images/user_avatar2.png" width="40" height="40" /> jkabfaksf</a>
         
        </div>
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