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
                <div class="item">
                    <div class="fill" style="background-image:url('assets/img/ship31.jpg');"></div>
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
        <!-- Page Content -->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header text-center">
                        Task Management System For Overseas Engineers
					</h1>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4><i class="fa fa-fw fa-check"></i>Tasks</h4>
						</div>
						<div class="panel-body">
							<p>For the tasks created, please click below.</p>
							<a href="task.php" class="btn btn-default btn-block">Tasks</a>
						</div>
					</div>
                </div>
                <div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4><i class="fa fa-fw fa-user"></i>Users</h4>
						</div>
						<div class="panel-body">
							<p>If you want to see the user list, please click below.</p>
							<a href="user.php" class="btn btn-default btn-block">Users</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4><i class="fa fa-fw fa-compass"></i>Contact Information</h4>
						</div>
						<div class="panel-body">
							<p>If you want to contact us, please click below.</p>
							<a href="contact.php" class="btn btn-default btn-block">Contact</a>
						</div>
					</div>
                </div>
                
			</div>
        <!-- /.row -->
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
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            });
        </script>
    </body>
</html>