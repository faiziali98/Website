<?php
    require("header.php");
?>
<style type="text/css">
    body{
        background-color: #1abc9c;
    }
    .container {
        background-color: #1abc9c;
    }
</style>
<div="" id="main" data-twttr-rendered="true" style="zoom: 1;">

<iframe id="twttrHubFrameSecure" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" name="twttrHubFrameSecure" src="../index_files/hub.f15fe2cd70788a40560e69fa17341d5e.html" style="position: absolute; top: -9999em; width: 10px; height: 10px;"></iframe>
    
    <div class="container" style="min-height: 363px;">
        <header class="codrops-header">
                <h1 style="color:white">Authors <span style="color:white">Everything you want to know about them</span></h1>
            </header>

            <div class="content">
                
                <div class="grid">
                    <?php 
                        mysql_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2");
                        mysql_select_db("databaselds");
                        $query = "SELECT * FROM authorized_users";
                        $query = mysql_query($query);
                        if (!$query) {
                            $message  = 'Invalid query: ' . mysql_error() . "\n";
                            $message .= 'Whole query: ' . $query;
                            die($message);
                        }
                        $numrows = mysql_num_rows($query);
                        if ($numrows > 0){
                            while ($rows = mysql_fetch_assoc($query)) {
                                $id = $rows['id'];
                                $about=$rows['about'];
                                $name=$rows['name'];
                                $dp=$rows['dp'];
                                echo "<figure class='effect-zoe' style='border:solid; width:47%;'>
                                <img src='../best_profile/$dp' alt='img1' style='height:400px;'>
                                    <figcaption style='height: 2em; background-color:#9FFFCB'>
                                        <h2><span>$name</span></h2>
                                        <p class='icon-links'>
                                            <a href='#''><span class='icon-heart' style='margin-top:-30px'></span></a>
                                            <a href='#'><span class='icon-eye' style='margin-top:-30px'></span></a>
                                            <a href='../best_profile/public-profile.php?id=$id' style='margin-top:-30px'><span class='icon-paper-clip'></span></a>
                                        </p>
                                    </figcaption>           
                                </figure> ";                    
                            }
                        }
                    ?>
                </div>
            
            </div><!-- /content -->
    </div><div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;"><iframe id="_atssh927" title="AddThis utility frame" src="../index_files/sh.6fac7b6f(1).html" style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;"></iframe></div>
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
header .main-nav nav ul {
    border-bottom: solid 4px #1abc9c;
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
</style>

<?php   
     require("footer.php");
?>