<?php
    require("header.php");
?>
<div="" id="main" data-twttr-rendered="true" style="zoom: 1;">

<iframe id="twttrHubFrameSecure" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" name="twttrHubFrameSecure" src="../index_files/hub.f15fe2cd70788a40560e69fa17341d5e.html" style="position: absolute; top: -9999em; width: 10px; height: 10px;"></iframe>
    <div class="slider hidden-phone">
    <div class="container">
        <!-- Start WOWSlider.com BODY section -->
        
        <div id="wowslider-container1">
        <div class="ws_images"><ul>
                <?php
                   $query = "SELECT * FROM search ORDER BY id DESC LIMIT 0,10";
                                    //echo $query;
                    mysql_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2");
                    mysql_select_db("databaselds");
                    $query = mysql_query($query);
                    $numrows = mysql_num_rows($query);
                    if ($numrows > 0){
                        $int=0;
                        while ($rows = mysql_fetch_assoc($query)) {
                            $title = $rows['title'];
                            $links = $rows['link'];
                            $pic = $rows["picture"];
                            echo "<li><img src='../index_files/$pic' alt='$int' title='$title' id='wows1_$int'/></li>";
                            $int++;
                        }
                    }
                ?>
            </ul></div>
            <div class="ws_bullets"><div>
                <?php
                   $query = "SELECT * FROM search ORDER BY id DESC LIMIT 0,10";
                                    //echo $query;
                    $query = mysql_query($query);
                    $numrows = mysql_num_rows($query);
                    if ($numrows > 0){
                        $int=1;
                        while ($rows = mysql_fetch_assoc($query)) {
                            $title = $rows['title'];
                            $links = $rows['link'];
                            $pic = $rows["picture"];
                            $int++;
                        }
                    }
                ?>
            </div></div>
            <div class="ws_shadow"></div>
        </div>  
        <script type="text/javascript" src="engine1/wowslider.js"></script>
        <script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
    </div>
</div>
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
                            $start=($page*10)-10;
                            $pages=$page-1;
                        }
                        $query = "SELECT * FROM search ORDER BY id DESC LIMIT $start,10";
                        $query1 = "SELECT * FROM search";
                            //echo $query;
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
                                $keywords = $rows['tags'];
                                $links = $rows['link'];
                                $date = $rows['dates'];
                                $author=$rows['author'];
                                $pic = $rows["picture"];
                                $link=mysqli_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2","databaselds");
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
                                echo "<figure><a href='$links'><img src='../index_files/$pic' alt=''></a></figure>";
                                echo "<div class='text'><div class='inner-border'><div class='title'><a href='$links'>$title</a></div>";
                                echo "<div class='description'><div class='date'>$date, by <a href='../best_profile/public-profile.php?id=$author'>$name</a></div><div class='excerpt'>";
                                //echo "<h1 class='title' ><a href='$link'>$title</a></h1>";
                                //echo "<div class='blog-content'><p>$description<br/><br/></p></div>";
                                echo "<p dir='ltr' style='line-height:1.7181818181818183;'><span style='font-size:16px;'><span id='docs-internal-guid-b062b128-9125-a187-57ce-ce98b16d772a'><span style='font-family: Georgia; color: rgb(51, 51, 51); vertical-align: baseline;'>$description 
                                <span></span>
                               </span></span></span></p><a href='$links'><button type='button' class='btn btn-success' data-toggle='button' aria-pressed='false' autocomplete='off'>
                                    Read More
                                </button></a>";
                                echo "</div></div></div></div></div>";
                                echo "</article>";
                            }
                            $count=ceil($numrows/5);
                            echo "<div class='pagination'><ul><li><a href='index.php?page=$pages'><</a></li>";
                            for ($c=1;$c<=$count;$c++){  
                                if (intval($page)==$c){      
                                    echo  "<li class='active'><a href='index.php?page=$c'>$c</a></li>";
                                }else{
                                    echo  "<li><a href='index.php?page=$c'>$c</a></li>";
                                }  
                            }
                            if (intval($page)==$count){
                                $pagee=$page;
                            }else{
                                $pagee=$page+1;
                            }
                            echo "<li><a href='index.php?page=$pagee'>></a></li></ul></div>";
                        }
                        mysql_close();
                    ?> 
                    </div>
            <?php   
                require("side-bars.php");
            ?>

    <div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;"><iframe id="_atssh927" title="AddThis utility frame" src="../index_files/sh.6fac7b6f(1).html" style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;"></iframe></div>
<div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;"><iframe id="_atssh169" title="AddThis utility frame" src="../index_files/sh.6fac7b6f.html" kwframeid="3" style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;"></iframe></div>

<style>
@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);

@font-face {
    font-family: 'codropsicons';
    src:url('../fonts/codropsicons/codropsicons.eot');
    src:url('../fonts/codropsicons/codropsicons.eot?#iefix') format('embedded-opentype'),
        url('../fonts/codropsicons/codropsicons.woff') format('woff'),
        url('../fonts/codropsicons/codropsicons.ttf') format('truetype'),
        url('../fonts/codropsicons/codropsicons.svg#codropsicons') format('svg');
    font-weight: normal;
    font-style: normal;
}
a {
    color: #c0392b;
    text-decoration: none;
}

a:hover,
a:active {
    color: #333;
}

/* Header Style */


/* Main Content */
.main {
    max-width: 69em;
}

.column {
    float: left;
    width: 50%;
    padding: 0 2em;
    min-height: 300px;
    position: relative;
}

.column:nth-child(2) {
    box-shadow: -1px 0 0 rgba(0,0,0,0.1);
}

.column p {
    font-weight: 300;
    font-size: 2em;
    padding: 0;
    margin: 0;
    text-align: right;
    line-height: 1.5;
}

/* To Navigation Style */
.codrops-top {
    background: #fff;
    background: rgba(255, 255, 255, 0.2);
    text-transform: uppercase;
    width: 100%;
    font-size: 0.69em;
    line-height: 2.2;
}

.codrops-top a {
    padding: 0 1em;
    letter-spacing: 0.1em;
    display: inline-block;
}

.codrops-top a:hover {
    color: #e74c3c;
    background: rgba(255,255,255,0.6);
}

.codrops-top span.right {
    float: right;
}

.codrops-top span.right a {
    float: left;
    display: block;
}

.codrops-icon:before {
    font-family: 'codropsicons';
    margin: 0 4px;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
}

.codrops-icon-drop:before {
    content: "\e001";
}

.codrops-icon-prev:before {
    content: "\e004";
}

button {
    border: none;
    background: #c0392b;
    font-family: 'Lato', Calibri, Arial, sans-serif;
    font-size: 1em;
    letter-spacing: 1px;
    text-transform: uppercase;
    cursor: pointer;
    display: inline-block;
    border-radius: 2px;
}

button:hover {
    background: #A5281B;
}

@media screen and (max-width: 46.0625em) {
    .column {
        width: 100%;
        min-width: auto;
        min-height: auto;
        padding: 1em; 
    }

    .column p {
        text-align: left;
        font-size: 1.5em;
    }

    .column:nth-child(2) {
        box-shadow: 0 -1px 0 rgba(0,0,0,0.1);
    }
}

@media screen and (max-width: 25em) {

    .codrops-icon span {
        display: none;
    }

}
.btn-danger{
    font-size: 1em;
    text-align: left;
    background-color: #dc0007;
    width: 110px;
    height: 35px;
}
</style>

<?php   
    require("footer.php");
?>