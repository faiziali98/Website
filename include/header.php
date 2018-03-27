<!DOCTYPE html>
<?php
    session_start();
?>
<html>

    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><script type="text/javascript" src="../index_files/shares.json"></script><script type="text/javascript" src="../index_files/widgets.js"></script>
    <title>LUMS Daily Student</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Nifty Modal Window Effects with CSS Transitions and Animations" />
    <meta name="keywords" content="modal, window, overlay, modern, box, css transition, css animation, effect, 3d, perspective" />
    <meta name="author" content="Codrops" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="icon" type="image/png" href="../index_files/lds.png">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../index_files/bootstrap.css">
    <link rel="stylesheet" href="../index_files/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="../index_files/demo.css">
    <link rel="stylesheet" type="text/css" href="../index_files/set1.css">
    <script src="js/modernizr.custom.js"></script>

    <!--Local CSS files-->

    <link rel="stylesheet" type="text/css" href="../index_files/flexslider.css">
    <link rel="stylesheet" type="text/css" href="../index_files/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="../index_files/sty.css">
    <link rel="stylesheet" type="text/css" href="../index_files/style.css">
    <link rel="stylesheet" type="text/css" href="../index_files/override.css">
    <link rel="stylesheet" type="text/css" href="../index_files/headcss.css">

    <script type="text/javascript" src="../index_files/jquery-1.9.0.js"></script>
    <script type="text/javascript" src="../index_files/main.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="../index_files/jquery.flexslider.js"></script>
    <script type="text/javascript" src="../index_files/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="../index_files/tinynav.min.js"></script>
    <script type="text/javascript" src="../index_files/jquery.placeholder.min.js"></script>
    <script type="text/javascript" src="../index_files/bootstrap.min.js"></script>
    <script type="text/javascript" src="../index_files/jquery.ticker.js"></script>
    
    <script type="text/javascript" src="headjs.js"></script>
    <script type="text/javascript" src="ajax.js"></script>
    
    <script type="text/javascript" charset="utf-8" src="../index_files/js/jquery.leanModal.min.js"></script>
    </head>
<body data-twttr-rendered="true" style="zoom: 1;"><iframe id="twttrHubFrameSecure" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" name="twttrHubFrameSecure" src="../index_files/hub.f15fe2cd70788a40560e69fa17341d5e(1).html" style="position: absolute; top: -9999em; width: 10px; height: 10px;" kwframeid="5"></iframe><iframe id="twttrHubFrame" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" name="twttrHubFrame" src="../index_files/hub.f15fe2cd70788a40560e69fa17341d5e.html" style="position: absolute; top: -9999em; width: 10px; height: 10px;" kwframeid="6"></iframe>

<!-- <div id="post" class="modalDialog">
            <div><a href="#close" title="Close" class="close">X</a>
                <?php
                    //echo "Hello baby";
                ?>
            </div>
        </div> -->
<div id="loginmodal" style="display:none; ">
    <div id="login-form">

    <h3>Login</h3>
    <fieldset>

      <form id="loginform" onsubmit="return false;">

        <input type="email" id="email" required value="Email" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' "> <!-- JS because of IE support; better: placeholder="Email" -->

        <input type="password" id="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> <!-- JS because of IE support; better: placeholder="Password" -->

        <input type="submit" id="loginbtn" value="Login" onclick="login()">

        <footer class="clearfix">
        <p id="status" style="color:red"></p>
          <p><span class="info">?</span><a href="../forgot_pass.php">Forgot Password</a></p>

        </footer>

      </form>

    </fieldset>

  </div>
  </div>
<header>
	<div class="row logo-line">
            <div class="span3 logo">
            </div>
            
    </div>
        <nav id='nav_bar' style="display:none;">
            <div class='row menu-line' style="height: 45px; font-size:14px;background-color:#2c3e50">
              <div class='span7' style="margin-top: 6px;padding-left:4px;">
                        <nav>
                            <ul>
                                <li class='active'><a href="../include/index.php">Home</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Authors</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="../signup.php">Sign Up</a></li>
                            </ul>
                        </nav>
                        
                    </div>
                    <div class='span3 social-links' style="margin-top: 6px;">
                        <ul>
                            <li><a href="#" class='facebook'>Facebook</a></li>
                            <li><a href="#" class='twitter'>Twitter</a></li>
                            <li><a href="#" class='pinterest'>Pinterest</a></li>
                            <li><a href="#" class='googleplus'>Google+</a></li>
                        </ul>
                    </div>
                    <div class="navMenuu expander" style="margin-top: 4px;">
                        <?php
                            if(isset($_SESSION['authorized_user'])){
                                $id=$_SESSION['authorized_user'];
                                mysql_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2");
                                mysql_select_db("databaselds");
                                $query = "SELECT * FROM authorized_users WHERE id = '$id'";
                                $query = mysql_query($query);
                                if (!$query) {
                                    $message  = 'Invalid query: ' . mysql_error() . "\n";
                                    $message .= 'Whole query: ' . $query;
                                    die($message);
                                }
                                $rows = mysql_fetch_assoc($query);
                                $name=$rows['name'];

                                echo "<div class='dropdown' style='float:right;'>
                                        <button class='flatbton' type='button' id='menu1' data-toggle='dropdown' style='background-color:green'>$name<span class='caret'></span>
                                        </button>
                                        <ul class='dropdown-menu' role='menu' aria-labelledby='menu1'>
                                            <li role='presentation'><a role='menuitem' tabindex='-1' href='../best_profile/public-profile.php?id=$id'>Profile</a></li>
                                            <li role='presentation'><a role='menuitem' tabindex='-1' href='../best_profile/edit-profile.php'>Edit Profile</a></li>
                                            <li role='presentation'><a role='menuitem' tabindex='-1' href='../include/allposts.php'>All Article</a></li>
                                            <li role='presentation'><a role='menuitem' tabindex='-1' href='../Editor.php'>Add Article</a></li>
                                            <li role='presentation'><a role='menuitem' tabindex='-1' href='../change_pass.php'>Change Password</a></li>
                                            <li role='presentation' class='divider'></li>
                                            <li ><button role='menuitem' tabindex='-1' type='submit' onclick='logout()' style='margin-left:40px; background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;' >Logout</li>
                                        </ul>
                                      </div>";

                            }else{
                                echo "<h2 style='float:right; font-size: 18px; vertical-align: top; color: #FFF;'><a href='#loginmodal' class='flatbtn' id='modaltrigger'> Sign In </a></h2>";
                            }
                        ?>
                        <form method="GET" action="../include/search.php">
                            <input type="text" name="input" />
                     	</form>
              </div>
          </div>
        </nav>
        <div class="row main-nav" style="width:1346px;">
            <div class="span12">
                <nav>
                    <ul class="l_tinynav1 hidden-phone" style="width:1346px;">
                        <li class="first-child">
                            <div class="inner">
                                <a href="#"><strong>LUMS Daily Student</strong></a>
                            </div>
                        </li>
                        <li class="first-child">
                            <div class="inner">
                                <a href="../include/index.php">Home</a>
                            </div>
                        </li>
                        
                        <li>
                            <div class="inner">
                                <a href="oweek.lums.edu.pk">O-Week 15</a>
                            </div>
                        </li>
                        
                        
                        <li><div class="inner"><a href="../include/author.php">Authors</a></div></li>
                        <li><div class="inner"><a href="#">Contact</a></div></li>
                        
                        <!-- <div class="navMenu expander">
                            <form method="GET" action="../include/search.php">
                                <input type="text" name="input" />
                            </form>
                        </div> -->

                    </ul><select id="tinynav1" class="tinynav tinynav1 visible-phone"><option>Navigation</option><option value="/">Home</option><option value="homepage-blog.html">Blog</option><option value="blog-category.html">Category</option><option value="blog-category.html">- Internet</option><option value="blog-category.html">- Social Media</option><option value="blog-category.html">- - Internet</option><option value="blog-category.html">- - Social Media</option><option value="#">- - - Internet</option><option value="blog-category.html">- - - Social Media</option><option value="blog-category.html">- - - IT</option><option value="blog-category.html">- - IT</option><option value="blog-category.html">- IT</option><option value="shortcodes-buttons.html"><option value="blog-author.html">Authors</option><option value="contact.html">Contact</option></select>
              </nav>
            </div>
        </div>
</header>
<div class="md-overlay"></div><!-- the overlay element -->

        <!-- classie.js by @desandro: https://github.com/desandro/classie -->
<script src="js/classie.js"></script>
<script src="js/modalEffects.js"></script>

        <!-- for the blur effect -->
        <!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
<script>
            // this is important for IEs
    var polyfilter_scriptpath = '/js/';
</script>
<script src="js/cssParser.js"></script>
<script src="js/css-filters-polyfill.js"></script>
