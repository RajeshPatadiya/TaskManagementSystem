<?php
    include("db_conn.php");
    
    $result = $db->query("select * from task GROUP BY idtask DESC");
        while ($row = $result->fetch_assoc()) {
            $task_id       = $row['idtask'];
            $task_name     = $row['name'];
            $task_duration = $row['duration'];
            $date          = $row['date'];
            $user_id       = $row['userid'];
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header text-center">
                        Tasks
                    </h2>
                </div>
                <div class="col-lg-12">
                    <form style action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="col-xs-12 col-sm-12 col-lg-12">
                            <div class="form-group">
                                <label for="inputUserID" class="col-2 col-form-label">User ID</label>
                                <div class="col-10">
                                    <select class="form-control" id="inputUserID" name="inputUserID">
                                        <?php
                                            foreach ($user_id as $key => $value)
                                                echo "<option>$user_id[$value]</option>";
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTask">Task Description</label>
                                <input type="text" class="form-control" id="inputTask" name="inputTask" placeholder="Enter User Task">
                            </div>
                            <div class="form-group">
                                <label for="inputDuration">Task Duration (hours)</label>
                                <input type="number" class="form-control" id="inputDuration" name="inputDuration" placeholder="Enter Task Duration (hours)">
                            </div>
                            <div class="form-group">
                                <label for="inputDate" class="col-2 col-form-label">Date</label>
                                <div class="col-10">
                                    <input class="form-control" type="date" value="<?php echo date("m-d-Y"); ?>" id="inputDate" name="inputDate">
                                </div>
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12">
                    <form style action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="col-xs-12 col-sm-12 col-lg-12">
                            <div class="form-group">
                                <label for="filterDate" class="col-2 col-form-label">Date</label>
                                <div class="col-10">
                                    <input class="form-control" type="date" value="<?php echo date("m-d-Y"); ?>" id="filterDate" name="filterDate">
                                </div>
                            </div>
                            <button name="filter" type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12">
                    <form style action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="col-xs-12 col-sm-12 col-lg-12">
                            <div class="form-group">
                                <label for="filterid" class="col-2 col-form-label">ID</label>
                                <div class="col-10">


                                    <select class="form-control" id="filterid" name="filterid">
                                        <?php
                                        echo "<option selected>2</option>";
                                        echo "<option>3</option>";
                                        echo "<option>4</option>";
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <button name="filterID" type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
            <div style="height:200px;overflow:auto;">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Task Description</th>
                        <th>Duration(hours)</th>
                        <th>Date</th>
                        <th>User id</th>
                    </tr>
                    <?php
                    $result = $db->query("select * from task GROUP BY idtask DESC");
                    while ($row = $result->fetch_assoc()) {
                        $task_id       = $row['idtask'];
                        $task_name     = $row['name'];
                        $task_duration = $row['duration'];
                        $date          = $row['date'];
                        $user_id       = $row['userid'];
                        echo     '<tr>
                                        <td>' . $task_id . '</td>
                                        <td>' . $task_name . '</td>
                                        <td>' . $task_duration . '</td>
                                        <td>' . $date . '</td>									
                                        <td>' . $user_id . '</td>
                                    </tr>';
                    }
                    $result->free();
                    ?>

                </table>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $inputTask = $_POST['inputTask'];
                $inputDuration = $_POST['inputDuration'];
                $inputDate = $_POST['inputDate'];
                $inputUserID = $_POST['inputUserID'];

                $sql = "INSERT  INTO `task` (`idtask`, `name`, `duration`, `date`, `userid`) VALUES (NULL, '{$inputTask}', '{$inputDuration}', '{$inputDate}', '{$inputUserID}')";
                if ($db->query($sql)) { }               
            } elseif (isset($_POST['filter'])) {
            ?>
                <div style="height:200px;overflow:auto;">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Task Description</th>
                            <th>Duration(hours)</th>
                            <th>Date</th>
                            <th>User id</th>
                        </tr>
                        <?php
                        $filterDate = $_POST['filterDate'];
                        $result = $db->query("select * from task where date = '{$filterDate}' GROUP BY idtask DESC");
                        while ($row = $result->fetch_assoc()) {
                            $task_id       = $row['idtask'];
                            $task_name     = $row['name'];
                            $task_duration = $row['duration'];
                            $date          = $row['date'];
                            $user_id       = $row['userid'];
                            echo     '<tr>
                                        <td>' . $task_id . '</td>
                                        <td>' . $task_name . '</td>
                                        <td>' . $task_duration . '</td>
                                        <td>' . $date . '</td>									
                                        <td>' . $user_id . '</td>
                                    </tr>';
                        }
                        $result->free();
                        ?>

                    </table>
                </div>
            <?php } elseif (isset($_POST['filterID'])) {
            ?>
                <div style="height:200px;overflow:auto;">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Task Description</th>
                            <th>Duration(hours)</th>
                            <th>Date</th>
                            <th>User id</th>
                        </tr>
                        <?php
                        $filterid = $_POST['filterid'];
                        $result = $db->query("select * from task where userid = '{$filterid}' GROUP BY idtask DESC");
                        while ($row = $result->fetch_assoc()) {
                            $task_id       = $row['idtask'];
                            $task_name     = $row['name'];
                            $task_duration = $row['duration'];
                            $date          = $row['date'];
                            $user_id       = $row['userid'];
                            echo     '<tr>
                                        <td>' . $task_id . '</td>
                                        <td>' . $task_name . '</td>
                                        <td>' . $task_duration . '</td>
                                        <td>' . $date . '</td>									
                                        <td>' . $user_id . '</td>
                                    </tr>';
                        }
                        $result->free();
                        ?>

                    </table>
                </div>
            <?php } ?>
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