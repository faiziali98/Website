<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>LUMS Daily Student</title>
    <link rel="icon" type="image/png" href="../index_files/lds.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LUMS Daily Student</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- Custom CSS -->
    <!-- <link href="css/portfolio-item.css" rel="stylesheet"> -->

    <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


    <?php

        $id = $_GET["id"];

        $link=mysqli_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2","databaselds");
        $query = "SELECT * FROM authorized_users WHERE id = '$id' ";

        $result = $link->query($query) or die(mysql_error());

        if($result->num_rows > 0){
            $row = mysqli_fetch_array($result, MYSQL_ASSOC);
            $name = $row["name"];
            $dp = $row["dp"];
            $about = $row["about"];
        }
        else 
            exit;
    ?>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><?php echo $name; ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../include/index.php">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Recent Posts</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- About Section -->
    <section id="about" class="about-section bg-primary">
        <div class="container">
            <div class="row">

            <!-- <div class="col-lg-12">
                    <h1>About Section</h1>
                </div> -->

                <!-- Name -->
        <div class="row" id="row">
            <div class="col-lg-12">
                <h2 class="page-header" style="color:white;"><?php echo $name; ?></h2>
            </div>
        </div> 

        <!-- Picture and Description -->
        <div class="row">
            <div class="col-md-5">
                <img class="img-responsive" src="<?php echo $dp; ?>" alt="">
            </div>

            <div class="col-md-5 col-md-push-1">
                <h2 style="margin-top:0px;color:white;">About Me</h2>
                <p class="text-justify" style="color:white;"><?php echo $about; ?></p>
            </div>
        </div>
               
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>Recent Posts</h1>
                            </div>
                        </div>


            <!-- Related Projects Row -->
       <!--  <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Recent Articles</h3>
            </div>

        </div> -->
        <!-- /.row -->
                <div class="container">
                    <!-- <div class="portfolio-head text-center">
                        <h2>Recent Posts</h2>
                    </div> -->
                    <!-- portfolio-grids -->
                    <div class="portfolio-grids">
                        <?php
                                mysql_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2");
                                mysql_select_db("databaselds");
                                $query = "SELECT * FROM search WHERE author='$id' ORDER BY id DESC LIMIT 0,4";
                                $query = mysql_query($query);
                                if (!$query) {
                                    $message  = 'Invalid query: ' . mysql_error() . "\n";
                                    $message .= 'Whole query: ' . $query;
                                    die($message);
                                }
                                $numrows = mysql_num_rows($query);
                                if ($numrows > 0){
                                    while ($rows = mysql_fetch_assoc($query)) {
                                        $title = $rows['title'];
                                        $links = $rows['link'];
                                        $pic = $rows['picture'];
                                        echo "<div class='col-md-3 portfolio-grid'>
                                                <div class='portfolio-grid-pic'>
                                                    <img src='../index_files/$pic' title='name' />
                                                    <div class='portfolio-grid-pic-caption'>
                                                        <a href='$links'>Read Article</a>
                                                    </div>
                                                </div>
                                                <div class='portfolio-grid-info text-center'>
                                                    <h5>$title</h5>
                                                </div>
                                            </div>";
                                    }
                                }
                            ?>
                        
                        <div class="clearfix"> </div>
                    </div>
                    <!-- portfolio-grids -->
                </div>


        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color:white;">Contact</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
