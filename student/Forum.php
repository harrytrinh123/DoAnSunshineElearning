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
                <div class="list-group">
                    <a href="Postdetail.php" class="list-group-item list-group-item-action"><img src="images/user_avatar2.png" width="40" height="40" /> jkabfaksf</a>
                </div>
            </div>
            <div class="col-4 col-s-4 menu">
                <div id="lasted_posts" class="text-uppercase font-weight-bold">Lasted Topic</div><br />
                <div class="list-group">
                    <a href="Postdetail.php" class="list-group-item list-group-item-action"><img src="images/user_avatar2.png" width="40" height="40" /> jkabfaksf</a>
                </div>
            </div>
            <div class="col-8 col-s-8 menu">
                <div id="topic_name" class="text-uppercase font-weight-bold">Nói</div><br />
                <div class="list-group">
                    <a href="Postdetail.php" class="list-group-item list-group-item-action"><img src="images/user_avatar2.png" width="40" height="40" /> jkabfaksf</a>
                </div>
            </div>
			<div class="col-8 col-s-8 menu">
                <div id="topic_name" class="text-uppercase font-weight-bold">Đọc</div><br />
				<?php
					$p->loadpost();
				?>
            </div>
			<div class="col-8 col-s-8 menu">
                <div id="topic_name" class="text-uppercase font-weight-bold">Viết</div><br />
                <div class="list-group">
                    <a href="Postdetail.php" class="list-group-item list-group-item-action"><img src="images/user_avatar2.png" width="40" height="40"/>
					<p>Name</p>
					<p>Comment</p>
					</a>
                </div>
            </div>
			<div class="col-8 col-s-8 menu">
                <div id="topic_name" class="text-uppercase font-weight-bold">Khác</div><br />
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