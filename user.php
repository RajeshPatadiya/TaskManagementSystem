<?php 
	include("db_conn.php");
	
?>
<!DOCTYPE HTML>
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Task Management System For Overseas Engineers">
        <meta name="author" content="Berk Cetinsaya">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/modern-business.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="assets/js/jquery.min.js"></script>
        <title>
            Task Management System For Overseas Engineers
        </title>
	</head>
    <body>
	<!-- Navigation -->
	<nav style="background-color:#800000;" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Task Management System For Overseas Engineers</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="task.php">Tasks</a>
						</li>
						<li>
							<a href="user.php">Users</a>
						</li>
						<li>
							<a href="contact.php">Contact</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
		<!-- Header Carousel -->
		<header id="myCarousel" class="carousel slide">
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<div class="fill" style="background-image:url('assets/img/ship3.jpg');"></div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('assets/img/ship.jpg');"></div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('assets/img/ship2.jpg');"></div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('assets/img/ship1.jpg');"></div>
				</div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="icon-next"></span>
			</a>
		</header>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header text-center">
						User List
					</h1>
				</div>
				
			</div>
        <!-- /.row -->
        <div style="height:200px;overflow:auto;">
		<table class="table">
			<tr>
				<th>ID</th>
				<th>First name</th>
				<th>Last name</th>
				<th>Type</th>
			</tr>
			<?php
				$result = $db->query("select * from user");
				while($row = $result->fetch_assoc()){
					$user_id        = $row['iduser'];
					$first_name     = $row['fname'];
					$last_name      = $row['lname'];
					$type           = $row['type'];				
				echo 	'<tr>
							<td>' . $user_id . '</td>
							<td>' . $first_name .'</td>
							<td>' . $last_name . '</td>
							<td>' . $type . '</td>
						</tr>';
				}
				$result->free();
			?>
			
		</table>
        </div>
		<footer>
            <div class="row text-center">
                <div class="col-lg-12">
					<p>Copyright <b>Berk Cetinsaya</b> &copy; <?php echo date("Y"); ?></p>
                </div>
            </div>
        </footer>
</div>
		<script src="js/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<script>
        $('.carousel').carousel({
        	interval: 5000 //changes the speed
    	});
		</script>
    </body>
</html>