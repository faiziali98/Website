<?php
    require("header.php");
?>
<div="" id="main" data-twttr-rendered="true" style="zoom: 1;">

<iframe id="twttrHubFrameSecure" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" name="twttrHubFrameSecure" src="../index_files/hub.f15fe2cd70788a40560e69fa17341d5e.html" style="position: absolute; top: -9999em; width: 10px; height: 10px;"></iframe>
    <div class="slider hidden-phone">
    <div class="container">
        <div class="row">
            <div class="inner">
                <div id="slider">
                    <ul class="slides">
                        <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; display: list-item;">
                            <div class="span12 single-slide">
                                <figure>
                                    <img src="../index_files/slider-big.jpg" alt="">
                                </figure>
                                <div class="slider-caption">
                                    <div class="span6 no-margin">
                                        <div class="title">New Pictures of the Golden Los Angeles Bridge</div>
                                    </div>
                                    <br>
                                    <div class="description span5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Praesent accumsan justo ac purus eleifend tristique.
                                        Sed tincidunt tempus turpis eget aliquet. Donec semper...</div>
                                </div>
                            </div>
                        </li>
                        <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;">
                            <div class="span12 single-slide">
                                <figure>
                                    <img src="../index_files/slider-big.jpg" alt="">
                                </figure>
                                <div class="slider-caption">
                                    <div class="span6 no-margin">
                                        <div class="title">New Pictures from San Francisco</div>
                                    </div>
                                    <br>
                                    <div class="description span5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Praesent accumsan justo ac purus eleifend tristique.
                                        Sed tincidunt tempus turpis eget aliquet. Donec semper...</div>
                                </div>
                            </div>
                        </li>
                        <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;">
                            <div class="span12 single-slide">
                                <figure>
                                    <img src="../index_files/slider-big.jpg" alt="">
                                </figure>
                                <div class="slider-caption">
                                    <div class="span6 no-margin">
                                        <div class="title">Slide 3</div>
                                    </div>
                                    <br>
                                    <div class="description span5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Praesent accumsan justo ac purus eleifend tristique.
                                        Sed tincidunt tempus turpis eget aliquet. Donec semper...</div>
                                </div>
                            </div>
                        </li>
                        <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;">
                            <div class="span12 single-slide">
                                <figure>
                                    <img src="../index_files/slider-big.jpg" alt="">
                                </figure>
                                <div class="slider-caption">
                                    <div class="span6 no-margin">
                                        <div class="title">Slide 4</div>
                                    </div>
                                    <br>
                                    <div class="description span5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Praesent accumsan justo ac purus eleifend tristique.
                                        Sed tincidunt tempus turpis eget aliquet. Donec semper...</div>
                                </div>
                            </div>
                        </li>
                        <li class="" style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;">
                            <div class="span12 single-slide">
                                <figure>
                                    <img src="../index_files/slider-big.jpg" alt="">
                                </figure>
                                <div class="slider-caption">
                                    <div class="span6 no-margin">
                                        <div class="title">Slide 5</div>
                                    </div>
                                    <br>
                                    <div class="description span5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Praesent accumsan justo ac purus eleifend tristique.
                                        Sed tincidunt tempus turpis eget aliquet. Donec semper...</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="span12 slider-navigation">
                    <div class="navigation-item first-child active" rel="1">
                        <span>Stepmom saves her step daughter from death</span>
                    </div>
                    <div class="navigation-item" rel="2">
                        <span>New Pictures of the Golden Los Angeles Bridge</span>
                    </div>
                    <div class="navigation-item" rel="3">
                        <span>Teenage killer found and sent to trial after killing two...</span>
                    </div>
                    <div class="navigation-item" rel="4">
                        <span>Themeforest hits 10 million users in February 2013</span>
                    </div>
                    <div class="navigation-item" rel="5">
                        <span>Barrack Obama declares it's "new times" for the USA</span>
                    </div>
                </div>
            </div>
        </div>
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
                            $start=($page*5)-5;
                            $pages=$page-1;
                        }
                        $query = "SELECT * FROM search ORDER BY id DESC LIMIT $start,5";
                        $query1 = "SELECT * FROM search";
                            //echo $query;
                        mysql_connect("localhost","root","");
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
                                $link = $rows['link'];
                                $date = $rows['dates'];
                                echo "<article>";
                                echo "<div class='inner'>";
                                echo "<figure><a href='$link'><img src='../index_files/sat.jpg' alt=''></a></figure>";
                                echo "<div class='text'><div class='inner-border'><div class='title'><a href='$link'>$title</a></div>";
                                echo "<div class='description'><div class='date'>12 comments, $date, by Aleks Ivic</div><div class='excerpt'>";
                                //echo "<h1 class='title' ><a href='$link'>$title</a></h1>";
                                //echo "<div class='blog-content'><p>$description<br/><br/></p></div>";
                                echo "<p>$description <a href='$link'>Read more...</a></p>";
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