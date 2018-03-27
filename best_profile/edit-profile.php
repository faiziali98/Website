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
    <script type="text/javascript" src="../index_files/ajax.js"></script>
    <title>Profile</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- Custom CSS -->
    <!-- <link href="css/portfolio-item.css" rel="stylesheet"> -->

    <!-- Custom Theme files -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <style type="text/css">

        .styled-button-2 {
                background: #25A6E1;
                background: -moz-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
                background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,#25A6E1),color-stop(100%,#188BC0));
                background: -webkit-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
                background: -o-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
                background: -ms-linear-gradient(top,#25A6E1 0%,#188BC0 100%);
                background: linear-gradient(top,#25A6E1 0%,#188BC0 100%);
                filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#25A6E1',endColorstr='#188BC0',GradientType=0);
                padding:4px 7px;
                /*color:#fff;*/
                background: rgb(28, 184, 65); 
                font-family:'Helvetica Neue',sans-serif;
                font-size:17px;
                border-radius:4px;
                -moz-border-radius:4px;
                -webkit-border-radius:4px;
                border:1px solid #1A87B9;

                margin-left: 190px;
        }

        .fileUpload {
                position: relative;
                overflow: hidden;
                margin-top: -90px;
                margin-left: 170px;
        }

        .fileUpload input.upload {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
    </style>


</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


    <?php

        session_start();

        if( !isset($_SESSION['authorized_user']) || empty($_SESSION['authorized_user']) ){
            $error =  'You must be logged in to access this page.';
            echo "<div class=\"alert alert-danger\">$error</div>";
            exit;
        }
            
        
        $id = $_SESSION['authorized_user'];

        if(isset($_POST["submit"])) { // if the user asked to save changes

            $post_image = basename($_FILES["fileToUpload"]["name"]);

            $target_dir = "images/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            
            
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    //echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }

            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";

            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                    $dp = "images/".basename( $_FILES["fileToUpload"]["name"]);
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }

        }

        // establish connection

        $link=mysqli_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2","databaselds");

        // update first

        if(isset($_POST['name'])){ // update name
            $name = $_POST['name'];
            $update = "UPDATE authorized_users SET name = '$name' WHERE id = '$id' ";
            $link->query($update) or die(mysql_error());
        }

        if(isset($_POST['about'])){ // update about
            $about = $_POST['about'];
            $update = "UPDATE authorized_users SET about = '$about' WHERE id = '$id' ";
            $link->query($update) or die(mysql_error());
        }

        if(isset($dp)){
            $update = "UPDATE authorized_users SET dp = '$dp' WHERE id = '$id' ";
            $link->query($update) or die(mysql_error());
        }

        // retrieve updated data
                
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
                <a class="navbar-brand page-scroll" id="pata" href="#page-top"><?php echo $name; ?></a>
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
                <h2 class="page-header">
                    <form action="edit-profile.php" method="post">
                        <h2 id="nam" style="color:white;"><?php echo $name; ?></h2>
                    </form> 
                </h2>
            </div>
        </div> 

        <!-- Picture and Description -->
        <div class="row">
            <div class="col-md-5">
                <img class="img-responsive" src="<?php echo $dp; ?>" alt="">
                <div>

                    <form action="edit-profile.php" method="post" enctype="multipart/form-data">

                        <div class="fileUpload btn btn-primary">
                            <span>Choose Picture</span>
                            <input id="uploadBtn" type="file" onchange="this.form.submit()" class="upload" name="fileToUpload" />
                        </div>

                                              

                        <div class="button">
                            <button type="submit" name = "submit" class="styled-button-2">Upload</button>
                        </div>
                    </form>


                </div>
            </div>

            <div class="col-md-5 col-md-push-1">
                <h2 style="margin-top:0px; color:white;">About Me</h2>
                <p class="text-justify">

                    <form action="edit-profile.php" method="post"> 
                        <p class="text-justify" id="para" style="color:white;"><?php echo $about; ?></p>
                    </form> 

                </p>
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
                                $query = "SELECT * FROM search WHERE author='id' ORDER BY id DESC LIMIT 0,4";
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

    <script type="text/javascript">
        function ajaxObj( meth, url ) {
            var x = new XMLHttpRequest();
            x.open( meth, url, true );
            x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            return x;
        }
        function ajaxReturn(x){
            if(x.readyState == 4 && x.status == 200){
                return true;    
            }
        }
        $(document).ready(function(){
            $('#about').keypress(function(e){
              if(e.which == 13){
                   // submit via ajax or
                   $('form').submit();
               }
            });
        });
        function divClicked() {
            var divHtml = $(this).html();
            var editableText = $("<textarea  class= 'messageTextarea' name='about' rows='12' style='width:480px;' />");
            editableText.val(divHtml);
            $(this).replaceWith(editableText);
            editableText.focus();
            editableText.blur(editableTextBlurred);
        }
        function editableTextBlurred() {
            var html = $(this).val();
            var viewableText = $("<p class='text-justify' id='para' style='color:white;' />");
            viewableText.html(html);
            $(this).replaceWith(viewableText);
            var ajax = ajaxObj("POST", "edit.php");
            ajax.onreadystatechange = function() {
                if(ajaxReturn(ajax) == true) {
                    alert(ajax.responseText);
                }
            }
            ajax.send("about="+html);
            // setup the click event for this new div
            viewableText.click(divClicked);

        }
        function namClicked() {
            var divHtml = $(this).html();
            var editableText = $("<input type='text' name='name' style='font-size:23px;' />");
            editableText.val(divHtml);
            $(this).replaceWith(editableText);
            editableText.focus();
            editableText.blur(editableBlurred);
        }
        function editableBlurred() {
            var html = $(this).val();
            var viewableText = $("<h2 id='nam' style='color:white;' />");
            viewableText.html(html);
            $(this).replaceWith(viewableText);
            var ajax = ajaxObj("POST", "edit.php");
            ajax.onreadystatechange = function() {
                if(ajaxReturn(ajax) == true) {
                }
            }
            ajax.send("name="+html);
            document.getElementById("pata").innerHTML = html;
            // setup the click event for this new div
            viewableText.click(namClicked);
        }
        $(document).ready(function() {
            $("#para").click(divClicked);
            $("#nam").click(namClicked)
        });
    </script>

</body>

</html>
