<?php
	require("header.php");
	if( isset($_SESSION['authorized_user']) && !empty($_SESSION['authorized_user']) ){
        $id=$_SESSION['authorized_user'];

    }else{
    	echo "<h1>Error: access denied</h1>";
    	exit;
    }
?>
<iframe id="twttrHubFrameSecure" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" name="twttrHubFrameSecure" src="../index_files/hub.f15fe2cd70788a40560e69fa17341d5e.html" style="position: absolute; top: -9999em; width: 10px; height: 10px;"></iframe>
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
						$query = "SELECT * FROM search WHERE author=$id ";
                        $query1 = "SELECT * FROM search WHERE author=$id";
                        if ($page=="1"){
                            $start=0;
                            $pages=$page;
                        }else{
                            $start=($page*5)-5;
                            $pages=$page-1;
                        }
                        $query .="ORDER BY 'id' DESC LIMIT $start,5";
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
								$keywords = $rows['tags'];
								$link = $rows['link'];
                                $date = $rows['dates'];
                                $pic=$rows['picture'];
                                echo "<article>";
                                echo "<div class='inner'>";
                                echo "<figure><a href='$link'><img src='../index_files/$pic' alt=''></a></figure>";
                                echo "<div class='text'><div class='inner-border'><div class='title'><a href='$link'>$title</a></div>";
                                echo "<div class='description'><div class='date'>$date, by Aleks Ivic</div><div class='excerpt'>";
								//echo "<h1 class='title' ><a href='$link'>$title</a></h1>";
								//echo "<div class='blog-content'><p>$description<br/><br/></p></div>";
                                echo "<p>$description <a href='$link'>Read more...</a></p>";
                                echo "</div></div></div></div></div>";
                                echo "</article>";
							}
                            $count=ceil($numrows/5);
                            echo "<div class='pagination'><ul><li><a href='allposts.php?page=$pages'><</a></li>";
                            for ($c=1;$c<=$count;$c++){  
                                if (intval($page)==$c){      
                                    echo  "<li class='active'><a href='allposts.php?page=$c'>$c</a></li>";
                                }else{
                                    echo  "<li><a href='allposts.php?page=$c'>$c</a></li>";
                                }  
                            }
                            if (intval($page)==$count){
                                $pagee=$page;
                            }else{
                                $pagee=$page+1;
                            }
                            echo "<li><a href='allposts.php?page=$pagee'>></a></li></ul></div>";
						}
						else{
							echo "No Articles found yet";
						}
						mysql_close();
					?> 
            </div>
<?php
    require("side-bars.php");
    require("footer.php");
?>