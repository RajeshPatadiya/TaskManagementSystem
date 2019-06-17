<?php 
	include("db_conn.php");
	$result = $db->query("select * from user");
	while($row = $result->fetch_assoc()){
		$user_id        = $row['iduser'];
		$first_name     = $row['fname'];
		$last_name      = $row['lname'];
		$type           = $row['type'];	
	}
	$result->free();
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
            TMSFOE | Task Management System For Overseas Engineers
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
					<a class="navbar-brand" href="index.php">TMSFOE</a>
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
		<!-- Page Content -->
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Users
						<small>TMSFOE</small>
					</h1>
					<ol class="breadcrumb">
						<li><a style="color:#800000;" href="index.php">TMSFOE</a>
						</li>
						<li class="active">Users</li>
					</ol>
				</div>
			</div>
			<!-- /.row -->	
						
			<div class="row">
				<!-- /.row -->
				<div class="col-lg-12">
				<?php
					if (isset($_POST['filterUserIDButton'])) {
				?>
				        <div style="height:%50;overflow:auto;">
							<table class="table">
								<tr>
									<th>User ID</th>
									<th>First name</th>
									<th>Last name</th>
									<th>Type</th>
								</tr>
								<?php
									$filterUserID = $_POST['filterUserID'];
									$result = $db->query("select * from user where iduser = '{$filterUserID}' GROUP BY iduser DESC");
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
					<?php
					} elseif (isset($_POST['filterTypeButton'])) {
					?>
						<div style="height:%50;overflow:auto;">
							<table class="table">
								<tr>
									<th>User ID</th>
									<th>First name</th>
									<th>Last name</th>
									<th>Type</th>
								</tr>
								<?php
									$filterType = $_POST['filterType'];
									$result = $db->query("select * from user where type = '{$filterType}' GROUP BY iduser DESC");
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
					<?php } elseif (isset($_POST['filterLastnameButton'])) {
					?>
								<div style="height:%50;overflow:auto;">
									<table class="table">
										<tr>
											<th>User ID</th>
											<th>First name</th>
											<th>Last name</th>
											<th>Type</th>
										</tr>
										<?php
											$filterLastname = $_POST['filterLastname'];
											$result = $db->query("select * from user where lname = '{$filterLastname}' GROUP BY iduser DESC");
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
						<?php } else{ ?>
									<div style="height:%50;overflow:auto;">
										<table class="table">
											<tr>
												<th>User ID</th>
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
							<?php }
							?>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-4 col-sm-4 col-lg-4">
					<form style action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
							<div class="form-group">
								<label for="filterType" class="col-2 col-form-label">Type</label>
									<select class="form-control" id="filterType" name="filterType">
										<?php
											$result = $db->query("select * from user");
											while($row = $result->fetch_assoc()){
												$user_id        = $row['iduser'];
												$first_name     = $row['fname'];
												$last_name      = $row['lname'];
												$type           = $row['type'];	
												echo '<option>' . $type . '</option>';
											}
											$result->free();                                        
										?>
									</select>
								
							</div>
							<button name="filterTypeButton" type="submit" class="btn btn-primary col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3"><i class="fa fa-fw fa-filter"></i>Filter</button>
					</form>
				</div>
				<div class="col-xs-4 col-sm-4 col-lg-4">
					<form style action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
							<div class="form-group">
								<label for="filterUserID" class="col-2 col-form-label">User ID</label>
									<select class="form-control" id="filterUserID" name="filterUserID">
										<?php
											$result = $db->query("select * from user");
											while($row = $result->fetch_assoc()){
												$user_id        = $row['iduser'];
												$first_name     = $row['fname'];
												$last_name      = $row['lname'];
												$type           = $row['type'];	
												echo '<option>' . $user_id . '</option>';
											}
											$result->free();                                        
										?>
									</select>
							</div>
							<button name="filterUserIDButton" type="submit" class="btn btn-primary col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3"><i class="fa fa-fw fa-filter"></i>Filter</button>
					</form>
				</div>
				<div class="col-xs-4 col-sm-4 col-lg-4">
					<form style action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
							<div class="form-group">
								<label for="filterLastname" class="col-2 col-form-label">Last name</label>
									<select class="form-control" id="filterLastname" name="filterLastname">
										<?php
											$result = $db->query("select * from user");
											while($row = $result->fetch_assoc()){
												$user_id        = $row['iduser'];
												$first_name     = $row['fname'];
												$last_name      = $row['lname'];
												$type           = $row['type'];	
												echo '<option>' . $last_name . '</option>';
											}
											$result->free();                                        
										?>
									</select>
							</div>
							<button name="filterLastnameButton" type="submit" class="btn btn-primary col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3"><i class="fa fa-fw fa-filter"></i>Filter</button>
					</form>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-lg-6">
						<a class="btn btn-success col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" href="createUser.php">Create a User</a>				
					
				</div>
				<div class="col-xs-6 col-sm-6 col-lg-6">
						<a class="btn btn-info col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" href="user.php">Clear Filter</a>				
					
				</div>
			</div>
			<hr>
			<footer>
				<div class="row text-center">
					<div class="col-lg-12">
						<p>Copyright <b>Berk Cetinsaya</b> &copy; <?php echo date("Y"); ?></p>
					</div>
				</div>
			</footer>			
		</div>
		<script src="assets/js/jquery.js"></script>
    	<script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>