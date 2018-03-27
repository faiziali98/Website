<!DOCTYPE html>
<?php
    session_start();
?>
<html>

    <head>
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><script type="text/javascript" src="../index_files/shares.json"></script><script type="text/javascript" src="../index_files/widgets.js"></script>
    <title>LUMS Daily Student</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Nifty Modal Window Effects with CSS Transitions and Animations" />
    <meta name="keywords" content="modal, window, overlay, modern, box, css transition, css animation, effect, 3d, perspective" />
    <meta name="author" content="Codrops" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="icon" type="image/png" href="../index_files/lds.png">
    <link rel="stylesheet" type="text/css" href="../index_files/bootstrap.css">
    <link rel="stylesheet" href="../index_files/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    
    <link rel="stylesheet" type="text/css" href="../index_files/demo.css">
    <link rel="stylesheet" type="text/css" href="../index_files/set1.css">
    <link rel="stylesheet" type="text/css" href="../index_files/headcss.css">
    <script src="js/modernizr.custom.js"></script>

    <!--Local CSS files-->

    <link rel="stylesheet" type="text/css" href="../index_files/flexslider.css">
    <link rel="stylesheet" type="text/css" href="../index_files/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="../index_files/sty.css">
    <link rel="stylesheet" type="text/css" href="../index_files/style.css">
    
    <script type="text/javascript" src="../index_files/jquery-1.9.0.js"></script>
    <script type="text/javascript" src="../index_files/main.js"></script>
    <script type="text/javascript" src="../index_files/jquery.flexslider.js"></script>
    <script type="text/javascript" src="../index_files/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="../index_files/tinynav.min.js"></script>
    <script type="text/javascript" src="../index_files/jquery.placeholder.min.js"></script>
    <script type="text/javascript" src="../index_files/bootstrap.min.js"></script>
    <script type="text/javascript" src="../index_files/jquery.ticker.js"></script>
    <script type="text/javascript" src="../index_files/ajax.js"></script>
    <script type="text/javascript" charset="utf-8" src="../index_files/js/jquery.leanModal.min.js"></script>
    

    </head>
<body data-twttr-rendered="true" style="zoom: 1;"><iframe id="twttrHubFrameSecure" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" name="twttrHubFrameSecure" src="../index_files/hub.f15fe2cd70788a40560e69fa17341d5e(1).html" style="position: absolute; top: -9999em; width: 10px; height: 10px;" kwframeid="5"></iframe><iframe id="twttrHubFrame" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" name="twttrHubFrame" src="../index_files/hub.f15fe2cd70788a40560e69fa17341d5e.html" style="position: absolute; top: -9999em; width: 10px; height: 10px;" kwframeid="6"></iframe>


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
          <p><span class="info">?</span><a href="#">Forgot Password</a></p>

        </footer>

      </form>

    </fieldset>

  </div>
  </div>


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
<div="" id="main" data-twttr-rendered="true" style="zoom: 1;">

<iframe id="twttrHubFrameSecure" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" name="twttrHubFrameSecure" src="../index_files/hub.f15fe2cd70788a40560e69fa17341d5e.html" style="position: absolute; top: -9999em; width: 10px; height: 10px;"></iframe>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/noscript.css" />
		</noscript>
   </head>
   <header>
    <div class="row logo-line">
            <div class='span3 logo' style="margin-bottom:0px; ">
            </div>            
        </div>
        <nav id='nav_bar'>
            <div class='row menu-line'>
              <div class='span7'>
                        <nav>
                            <ul>
                                <li class='active'><a href="index.html">Home</a></li>
                                <li><a href="blog.html">Categories</a></li>
                                <li><a href="homepage-blog.html">Authors</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="http://localhost/kami/include/login.html">login</a></li>
                            </ul>
                        </nav>
                        
                    </div>
                    <div class='span3 social-links'>
                        <ul>
                            <li><a href="#" class='facebook'>Facebook</a></li>
                            <li><a href="#" class='twitter'>Twitter</a></li>
                            <li><a href="#" class='pinterest'>Pinterest</a></li>
                            <li><a href="#" class='googleplus'>Google+</a></li>
                        </ul>
                    </div>
                    <div class="navMenuu expander">
                        <?php
                            if(isset($_SESSION['authorized_user'])){
                                $id=$_SESSION['authorized_user'];
                                mysql_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2");
                                mysql_select_db("lds_accounts");
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
                                          <li role='presentation'><a role='menuitem' tabindex='-1' href='http://localhost/kami/best_profile/public-profile.php?id=$id'>Profile</a></li>
                                          <li role='presentation'><a role='menuitem' tabindex='-1' href='http://localhost/kami/best_profile/edit-profile.php'>Edit Profile</a></li>
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
        <div class="row main-nav">
            
            <div class="span12">
                <nav>
                    <ul class="l_tinynav1 hidden-phone">
                        <li class="first-child">
                            <div class="inner">
                                <a href="#"><strong>LUMS Daily Student</strong></a>
                            </div>
                        </li>
                        <li class="first-child">
                            <div class="inner">
                                <a href="http://localhost/kami/include/main.php">Home</a>
                            </div>
                        </li>
                        
                        <li>
                            <div class="inner">
                                <a href="#">Categories</a>
                                <div class="dropdown first-level">
                                    <ul>
                                        <li><div class="inner"><a href="#">Internet</a></div></li>
                                        <li>
                                            <div class="inner">
                                                <a href="#">Social Media</a>
                                                <div class="dropdown second-level">
                                                    <ul>
                                                        <li>
                                                            <div class="inner">
                                                                <a href="#">Internet</a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="inner">
                                                                <a href="#">Social Media</a>
                                                                <div class="dropdown third-level">
                                                                    <ul>
                                                                        <li>
                                                                            <div class="inner">
                                                                                <a href="##">Internet</a>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="inner">
                                                                                <a href="#">Social Media</a>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="inner">
                                                                                <a href="#">IT</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li><div class="inner"><a href="#">IT</a></div></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li><div class="inner"><a href="#">IT</a></div></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        
                        
                        <li><div class="inner"><a href="http://localhost/kami/include/author.php">Authors</a></div></li>
                        <li><div class="inner"><a href="http://teothemes.com/html/Voxis/contact.html">Contact</a></div></li>
                        
                        <div class="navMenu expander">
                            <form method="GET" action="../include/search.php">
                                <input type="text" name="input" />
                            </form>
                        </div>

                    </ul><select id="tinynav1" class="tinynav tinynav1 visible-phone"><option>Navigation</option><option value="/">Home</option><option value="homepage-blog.html">Blog</option><option value="blog-category.html">Category</option><option value="blog-category.html">- Internet</option><option value="blog-category.html">- Social Media</option><option value="blog-category.html">- - Internet</option><option value="blog-category.html">- - Social Media</option><option value="#">- - - Internet</option><option value="blog-category.html">- - - Social Media</option><option value="blog-category.html">- - - IT</option><option value="blog-category.html">- - IT</option><option value="blog-category.html">- IT</option><option value="shortcodes-buttons.html"><option value="blog-author.html">Authors</option><option value="contact.html">Contact</option></select>
              </nav>
            </div>
        </div>
</header>

            <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
        <li><img src="data1/images/pit_bull.jpg" alt="Pit Bull" title="Pit Bull" id="wows1_0"/></li>
        <li><img src="data1/images/selena_gomez.jpg" alt="Selena Gomez" title="Selena Gomez" id="wows1_1"/></li>
        <li><img src="data1/images/3.jpg" alt="3" title="3" id="wows1_2"/></li>
        <li><img src="data1/images/5.jpg" alt="5" title="5" id="wows1_3"/></li>
        <li><img src="data1/images/6.jpg" alt="6" title="6" id="wows1_4"/></li>
        <li><img src="data1/images/7.jpg" alt="7" title="7" id="wows1_5"/></li>
        <li><img src="data1/images/8.jpg" alt="8" title="8" id="wows1_6"/></li>
        <li><img src="data1/images/9.jpg" alt="9" title="9" id="wows1_7"/></li>
        <li><a href="http://wowslider.com"><img src="data1/images/10.jpg" alt="joomla slideshow" title="10" id="wows1_8"/></a></li>
        <li><img src="data1/images/2.jpg" alt="2" title="2" id="wows1_9"/></li>
    </ul></div>
    <div class="ws_bullets"><div>
        <a href="#" title="Pit Bull"><span><img src="data1/tooltips/pit_bull.jpg" alt="Pit Bull"/>1</span></a>
        <a href="#" title="Selena Gomez"><span><img src="data1/tooltips/selena_gomez.jpg" alt="Selena Gomez"/>2</span></a>
        <a href="#" title="3"><span><img src="data1/tooltips/3.jpg" alt="3"/>3</span></a>
        <a href="#" title="5"><span><img src="data1/tooltips/5.jpg" alt="5"/>4</span></a>
        <a href="#" title="6"><span><img src="data1/tooltips/6.jpg" alt="6"/>5</span></a>
        <a href="#" title="7"><span><img src="data1/tooltips/7.jpg" alt="7"/>6</span></a>
        <a href="#" title="8"><span><img src="data1/tooltips/8.jpg" alt="8"/>7</span></a>
        <a href="#" title="9"><span><img src="data1/tooltips/9.jpg" alt="9"/>8</span></a>
        <a href="#" title="10"><span><img src="data1/tooltips/10.jpg" alt="10"/>9</span></a>
        <a href="#" title="2"><span><img src="data1/tooltips/2.jpg" alt="2"/>10</span></a>
    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">slider bootstrap</a> by WOWSlider.com v8.2</div>
<div class="ws_shadow"></div>
</div>  
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

        <script type="text/javascript" src="../index_files/headjs.js"></script>
        <script type="text/javascript" src="js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
					easing		: 'easeOutExpo',
					titleeasing	: 'easeOutExpo',
					titlespeed	: 1200
                });
            });
        </script>
        <div id="main">
    <div class="container">
        <div class="row">
            <div class="content span8 blog-style">
                <?php
                        if (isset($_GET['page'])){
                            $page = $_GET['page'];
                        }else{
                            $page="1";
                        }
                        if ($page=="1"){
                            $start=0;
                            $pages=$page;
                        }else{
                            $start=($page*5)-5;
                            $pages=$page-1;
                        }
                        $query = "SELECT * FROM search ORDER BY id DESC LIMIT $start,5";
                        $query1 = "SELECT * FROM search";
                            //echo $query;
                        mysql_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2");
                        mysql_select_db("databaselds");
                        $query = mysql_query($query);
                        $query1 = mysql_query($query1);
                        if (!$query) {
                            $message  = 'Invalid query: ' . mysql_error() . "\n";
                            $message .= 'Whole query: ' . $query;
                            die($message);
                        }
                        $numrows = mysql_num_rows($query1);
                        if ($numrows > 0){
                            while ($rows = mysql_fetch_assoc($query)) {
                                $id = $rows['id'];
                                $title = $rows['title'];
                                $description = $rows['description'];
                                $keywords = $rows['keywords'];
                                $links = $rows['link'];
                                $date = $rows['dates'];
                                $author=$rows['author'];
                                $link=mysqli_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2","lds_accounts");
                                $query2 = "SELECT * FROM authorized_users WHERE id = '$author' ";

                                $result = $link->query($query2) or die(mysql_error());

                                if($result->num_rows > 0){
                                    $row = mysqli_fetch_array($result, MYSQL_ASSOC);
                                    $name = $row["name"];
                                    $dp = $row["dp"];
                                    $about = $row["about"];
                                }
                                echo "<article>";
                                echo "<div class='inner'>";
                                echo "<figure><a href='$links'><img src='../index_files/sat.jpg' alt=''></a></figure>";
                                echo "<div class='text'><div class='inner-border'><div class='title'><a href='$links'>$title</a></div>";
                                echo "<div class='description'><div class='date'>$date, by $name</div><div class='excerpt'>";
                                //echo "<h1 class='title' ><a href='$link'>$title</a></h1>";
                                //echo "<div class='blog-content'><p>$description<br/><br/></p></div>";
                                echo "<p>$description <a href='$links'>Read more...</a></p>";
                                echo "</div></div></div></div></div>";
                                echo "</article>";
                            }
                            $count=ceil($numrows/5);
                            echo "<div class='pagination'><ul><li><a href='http://localhost/kami/include/main.php?page=$pages'><</a></li>";
                            for ($c=1;$c<=$count;$c++){  
                                if (intval($page)==$c){      
                                    echo  "<li class='active'><a href='http://localhost/kami/include/main.php?page=$c'>$c</a></li>";
                                }else{
                                    echo  "<li><a href='http://localhost/kami/include/main.php?page=$c'>$c</a></li>";
                                }  
                            }
                            if (intval($page)==$count){
                                $pagee=$page;
                            }else{
                                $pagee=$page+1;
                            }
                            echo "<li><a href='http://localhost/kami/include/main.php?page=$pagee'>></a></li></ul></div>";
                        }
                        else{
                            echo "No Results Found for \"<b>$input</b>\"";
                        }
                        mysql_close();
                    ?> 
                    </div>
            <?php   
                require("side-bars.php");
            ?>

    <div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;"><iframe id="_atssh927" title="AddThis utility frame" src="../index_files/sh.6fac7b6f(1).html" style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;"></iframe></div>
<div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;"><iframe id="_atssh169" title="AddThis utility frame" src="../index_files/sh.6fac7b6f.html" kwframeid="3" style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;"></iframe></div>

<?php   
    require("footer.php");
?>