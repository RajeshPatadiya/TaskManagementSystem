<?php
$page_title = "Task Management System For Overseas Engineers";
include_once "header.php";
?>
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
				<hr>
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
        <?php include_once "footer.php";?>