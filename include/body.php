

<link rel="stylesheet" type="text/css" href="css/default.css" />
<div="" id="main" data-twttr-rendered="true" style="zoom: 1;">
<iframe id="twttrHubFrameSecure" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" name="twttrHubFrameSecure" src="../index_files/hub.f15fe2cd70788a40560e69fa17341d5e.html" style="position: absolute; top: -9999em; width: 10px; height: 10px;"></iframe>
    <!-- <div id="ratemodal" style="display:none; ">
        <div id="login-form">

        <h3>Login</h3>
        <fieldset>
          <form id="loginform" onsubmit="return false;">
            <input type="text" id="text" required value="text" onBlur="if(this.value=='')this.value='Enter Name'" onFocus="if(this.value=='Password')this.value='' ">
            <input type="email" id="email" required value="Email" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' ">
            <input type="submit" id="loginbtn" value="Login" onclick="login()">
          </form>
        </fieldset>

      </div>
  </div> -->
    <div class="container" style="min-height: 363px;">
        <div class="row">
            <div class="content span8 blog-page">
                <article>
                    <h1 class="title"><?php $ext=pathinfo($post_image,PATHINFO_EXTENSION); echo $post_title; ?></h1>
                    <div style="margin:5px;">
                        <figure>
                            <a href="../index_files/<?php echo strtolower(str_replace(' ', '-', $post_title)).".$ext"; ?>" rel="prettyPhoto">
                                <img src="../index_files/<?php echo strtolower(str_replace(' ', '-', $post_title)).".$ext";?>" alt='<?php  echo "$post_title" ?>' height="60px" width="60px">
                            </a>
                        </figure>
                    </div>
                    <div class="blog-content">
                        <div class="info">
                            <a>
                            <span class="date">
                                <?php 
                                    mysql_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2");
                                    mysql_select_db("databaselds"); 
                                    $query = "SELECT * FROM search WHERE title LIKE '%$post_title%' ";
                                    $query = mysql_query($query);
                                    $numrows = mysql_num_rows($query);
                                    if ($numrows > 0){
                                        $rows = mysql_fetch_assoc($query);
                                        $date = $rows['dates'];
                                        $id=$rows['id'];
                                        $tags=$rows['tags'];
                                        $author=$rows['author'];
                                        $avgrate=$rows['avgrate'];
                                        $numhits=$rows['numhits'];
                                        $description=$rows['description'];
                                        echo $date;
                                    }
                                    $link=mysqli_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2","databaselds");
                                    $query = "SELECT * FROM authorized_users WHERE id = '$author' ";

                                    $result = $link->query($query) or die(mysql_error());

                                    if($result->num_rows > 0){
                                        $row = mysqli_fetch_array($result, MYSQL_ASSOC);
                                        $name = $row["name"];
                                        $dp = $row["dp"];
                                        $about = $row["about"];
                                    }
                                ?>
                            </span>, by</a>
                            <a href="../best_profile/public-profile.php?id=<?php echo $author?>"><?php echo $name?></a>
                        </div>
                        <p id="cotent" >
                            <?php 
                                echo $tags;
                            ?>
                        </p>
                        <div class="tag-container">
                            <div class="tag-title">Tags: </div>
                            <a class="tag" href="#">LUMS</a>
                            <a class="tag" href="#">SSE</a>
                            <a class="tag" href="#">SAT</a>
                            <a class="tag" href="#">Admissions</a>
                        </div>
                    </div>
                    <div class="blog-bottom">
                        <div class="share-title">Share</div>
                        <div class="share-content">
                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style ">
                             <!--< a class="addthis_button_facebook_like at300b" fb:like:layout="button_count"><div class="fb-like fb_iframe_widget" data-ref=".VX_-JNZZgQ4.like" data-layout="button_count" data-show_faces="false" data-share="false" data-action="like" data-width="90" data-font="arial" data-href="file:///C:/xampp/htdocs/kami/LUMS%20Daily%20Student.php" data-send="false" fb-xfbml-state="parsed" fb-iframe-plugin-query="action=like&amp;app_id=172525162793917&amp;container_width=0&amp;font=arial&amp;href=file%3A%2F%2F%2FC%3A%2Fxampp%2Fhtdocs%2Fkami%2FLUMS%2520Daily%2520Student.php&amp;layout=button_count&amp;locale=en_US&amp;ref=.VX_-JNZZgQ4.like&amp;sdk=joey&amp;send=false&amp;share=false&amp;show_faces=false&amp;width=90"><span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;"><iframe name="f3ee1da5a8" width="90px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="about:blank" style="border: none; visibility: hidden; width: 0px; height: 0px;"></iframe></span></div></a>
                            <a class="addthis_button_tweet at300b"><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="../index_files/tweet_button.54460a335ba528591a034cfb509bdf51.en.html" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" kwframeid="4" style="position: absolute; visibility: hidden;"></iframe><a href="http://twitter.com/share" class="twitter-share-button" data-url="file:///C:/xampp/htdocs/kami/LUMS%20Daily%20Student.php/#.VX_-JJZhLOc.twitter" data-counturl="file:///C:/xampp/htdocs/kami/LUMS%20Daily%20Student.php" data-count="horizontal" data-text="LUMS Daily Student:" data-related="" data-hashtags="" data-width="110">Tweet</a></a><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="./index_files/tweet_button.54460a335ba528591a034cfb509bdf51.en(1).html" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" style="position: static; visibility: visible; width: 78px; height: 20px;"></iframe> -->
                            <a class="addthis_button_pinterest_pinit at300b"><span class="at_PinItButton"></span></a>
                            <a class="addthis_counter addthis_pill_style addthis_nonzero" href="#" style="display: inline-block;"></a><a class="atc_s addthis_button_compact at300m" href="file:///C:/Users/usman/Desktop/blogPost.html#"><span></span></a><a class="addthis_button_expanded at300m" target="_blank" title="View more services" href="#"><span class="at4-icon aticon-expanded" style="background-color: rgb(252, 109, 76);"><span>More Sharing Services</span></span>23</a>
                            <div class="atclear"></div><div class="atclear"></div><div class="atclear"></div></div>
                            <script type="text/javascript" src="../index_files/addthis_widget.js"></script>
                            <!-- AddThis Button END -->
                        </div>
                        <div style="background-color: #f9f9f9;border-left: solid 1px #d3d2d2;border-right: solid 1px #d3d2d2; padding: 5px 15px; color: #6b6b6b;font-size: 16px;font-family: Abel;display: inline-block;height: 23px;">Rate</div>
                        <div style="display: inline-block;vertical-align: middle;position: relative; padding-left: 5px;">
                        <form id="ratingsForm">
                            <div class="stars">
                                <?php
                                    for ($i=1;$i<=5;$i++){
                                        if ($i==$avgrate){
                                            echo "<input type='radio' name='star' class='star-$i' value='$i' id='star-$i' onclick='rate()' checked/>
                                                <label class='star-$i' for='star-$i'></label>";
                                        }else{
                                            echo "<input type='radio' name='star' class='star-$i' value='$i' id='star-$i' onclick='rate()'/>
                                                <label class='star-$i' for='star-$i'></label>";
                                        }
                                    } 
                                ?>
                                <span></span>
                            </div>
                          
                        </form>
                        </div>
                        <div style="color: #6b6b6b;font-size: 16px;font-family: Abel;display: inline-block;height: 23px;">
                            <?php echo $avgrate ?>/5(votes:<?php echo $numhits ?>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                            <?php
                                if( isset($_SESSION['authorized_user']) && !empty($_SESSION['authorized_user']) ){
                                    if($_SESSION['authorized_user']==$author){
                                        echo "<button id='myButton1' class='myButton'>Edit Post</button>";
                                        echo "<button id='myButton2' class='myButton'>Delete Post</button>";
                                    }
                                }
                            ?>
                        </div>
                </article>
                <div class="row">
                    <div class="span8 author-box">
                        <div class="box-title">
                            <h2>About the author </h2>
                            <div class="title-line"></div>
                        </div>
                        <div class="author">
                            <figure>
                                <img src='../best_profile/<?php echo $dp; ?>' alt="">
                            </figure>
                            <div class="author-links">
                                <a href="#" class="twitter author-social">Twitter</a>
                                <a href="#" class="facebook author-social">Facebook</a>
                                <a href="#" class="googleplus author-social">Googleplus</a>
                            </div>
                            <div class="description">
                                <span class="name"><?php echo $name; ?></span> <?php echo $about; ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="related-news span8">
                        <div style="background-color:white; margin-bottom:5px;">
                            <div id="disqus_thread" style="margin: 7px;"></div>
                        </div>
                        <script type="text/javascript">
                            /* * * CONFIGURATION VARIABLES * * */
                            var disqus_shortname = 'ldslumsedupk';
                            
                            /* * * DON'T EDIT BELOW THIS LINE * * */
                            (function() {
                                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                        <div class="inner-box">
                            <h1 class="title">Related Posts</h1>
                            <?php
                                mysql_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2");
                                mysql_select_db("databaselds");
                                $query = "SELECT * FROM search WHERE author LIKE '%$author%' ";
                                $query = mysql_query($query);
                                $numrows = mysql_num_rows($query);
                                if ($numrows > 0){
                                    for ($i=0;$i<3;$i++){
                                        $rows = mysql_fetch_assoc($query);
                                        if ($rows){
                                            $date = $rows['dates'];
                                            $title=$rows['title'];
                                            $link=$rows['link'];
                                            $pic=$rows['picture'];
                                            if ($title!=$post_title){
                                                echo "<div class='column'>
                                                        <div class='inner'>
                                                            <a href='$link'>
                                                                <figure>
                                                                    <img src='../index_files/$pic' alt=''>
                                                                </figure>
                                                                <div class='title'>$title</div>
                                                                <div class='date'>$date</div>
                                                            </a>
                                                        </div>
                                                    </div>";
                                            }else{
                                                $i--;
                                            }
                                        }
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
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
    (function($){
        $.fn.styleddropdown = function(){
            return this.each(function(){
                var obj = $(this)
                obj.find('.field').click(function() { //onclick event, 'list' fadein
                obj.find('.list').fadeIn(400);
                
                $(document).keyup(function(event) { //keypress event, fadeout on 'escape'
                    if(event.keyCode == 27) {
                    obj.find('.list').fadeOut(400);
                    }
                });
                
                obj.find('.list').hover(function(){ },
                    function(){
                        $(this).fadeOut(400);
                    });
                });
                
                obj.find('.list li').click(function() { //onclick event, change field value with selected 'list' item and fadeout 'list'
                obj.find('.field')
                    .val($(this).html())
                    .css({
                        'background':'#fff',
                        'color':'#333'
                    });
                obj.find('.list').fadeOut(400);
                });
            });
        };
    })(jQuery);
    $(function(){
        $('.size').styleddropdown();
    });
    $(function(){
      $('#loginform').submit(function(e){
        return false;
      });
      
      $('#modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
    });
    $(function(){
      
      $('#modaltriggerr').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
    });
    $('.navbar-lower').affix({
      offset: {top: 50}
    });
    $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
    $(document).ready(function() {
    $('.parent').click(function() {
        $('.sub-nav').toggleClass('visible');
    });
});
    function emptyElement(x){
        _(x).innerHTML = "";
    }
    function login(){
        var e = document.getElementById("email").value;
        var p = document.getElementById("password").value;
        if(e == "" || p == ""){
            document.getElementById("status").innerHTML = "Fill out all of the form data";
        } else {
            document.getElementById("loginbtn").style.display = "none";
            document.getElementById("status").innerHTML = 'please wait ...';
            var ajax = ajaxObj("POST", "../include/loginm.php");
            ajax.onreadystatechange = function() {
                if(ajaxReturn(ajax) == true) {
                    if(ajax.responseText.includes('try again')){
                        document.getElementById("status").innerHTML = ajax.responseText;
                        document.getElementById("loginbtn").style.display = "block";
                    } else {
                        document.getElementById("status").innerHTML = ajax.responseText;
                        location.reload();
                    }
                }
            }
            ajax.send("email="+e+"&password="+p);
        }
    }
    function logout(){
        var ajax = ajaxObj("POST", "../include/logout.php");
        ajax.onreadystatechange = function() {
            if(ajaxReturn(ajax) == true) {
                location.reload();
            }
        }
        ajax.send();
    }
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'ldslumsedupk';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());

    function rate(){
        for (var i=1;i<=5;i++){
            var id='#star-'+i;
            if ($(id).is(":checked")){
              var e = $(id).val();
              break;
            }
        }
        var article = "<?php echo $post_title; ?>";
        method = "post"; // Set method to post by default if not specified.

        // The rest of this code assumes you are not using a library.
        // It can be made less wordy if you use one.
        var form = document.createElement("form");
        form.setAttribute("method", method);
        form.setAttribute("action", "../rate.php");
        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", 'stars');
        hiddenField.setAttribute("value", e);
        form.appendChild(hiddenField);
        var hiddenFields = document.createElement("input");
        hiddenFields.setAttribute("type", "hidden");
        hiddenFields.setAttribute("name", 'article');
        hiddenFields.setAttribute("value", article);
        form.appendChild(hiddenFields);
        
        document.body.appendChild(form);
        form.submit();      
        /*for (var i=1;i<=5;i++){
            var id='#star-'+i;
            if ($(id).is(":checked")){
              var e = $(id).val();
              break;
            }
        }
        var article = "<?php echo $post_title; ?>";
        var ajax = ajaxObj("POST", "../include/rate.php");
        ajax.onreadystatechange = function() {
            if(ajaxReturn(ajax) == true) {
                alert(ajax.responseText);
                location.reload();
            }
        }
        ajax.send("stars="+e+"&article="+article);*/
    }
    $(document).ready(function(){
        $('#nav_bar').hide();
          $(window).scroll(function () { 
            console.log($(window).scrollTop());
        
            if ($(window).scrollTop() > 450) {
              $('#nav_bar').addClass('navbar-fixed-top');
              $("#nav_bar").fadeIn("slow");
            }
        
            if ($(window).scrollTop() < 451) {
              $('#nav_bar').removeClass('navbar-fixed-top');
              $('#nav_bar').hide();
              $("#nav_bar").fadeOut("fast");
            }
          });
        $('#myButton2').click(function() {
        var dialog = $('<p>Are you sure?</p>').dialog({
            buttons: {
                "Yes": function() {
                    var article = "<?php echo $id; ?>";
                    var title = "<?php echo strtolower(str_replace(' ', '-', $post_title)); ?>";
                    method = "post";
                    var form = document.createElement("form");
                    form.setAttribute("method", method);
                    form.setAttribute("action", "../include/deletepost.php");
                    var hiddenFields = document.createElement("input");
                    hiddenFields.setAttribute("type", "hidden");
                    hiddenFields.setAttribute("name", 'article');
                    hiddenFields.setAttribute("value", article);
                    form.appendChild(hiddenFields);
                    var hiddenFields = document.createElement("input");
                    hiddenFields.setAttribute("type", "hidden");
                    hiddenFields.setAttribute("name", 'title');
                    hiddenFields.setAttribute("value", title);
                    form.appendChild(hiddenFields);
                    document.body.appendChild(form);
                    form.submit(); 
                },
                "No":  function() {dialog.dialog('close');},
                "Cancel":  function() {
                    dialog.dialog('close');
                }
            }
        });
      });
        $('#myButton1').click(function(){
            var divHtml = $(this).html();
            if (divHtml=='Edit Post'){
                EditPost();
            }else{
                Done();
            }
            $(this).html($(this).html() == 'Edit Post' ? 'Done' : 'Edit Post');
        });
    });
    function EditPost() {
            var divHtml = document.getElementById("cotent").innerHTML;
            var editableText = $("<textarea id='tarea' id='tarea' style='width:720px; height:500px; resize: none;' />");
            editableText.val(divHtml);
            $("#cotent").replaceWith(editableText);
            editableText.focus();
    }
    function Done() {
            var id=<?php echo $id; ?>;
            var divHtml = document.getElementById("tarea").value;
            var editableText = $("<p id='cotent'/>");
            editableText.html(divHtml);
            $("#tarea").replaceWith(editableText);
            var ajax = ajaxObj("POST", "../include/editpost.php");
            ajax.onreadystatechange = function() {
                if(ajaxReturn(ajax) == true) {
                    alert(ajax.responseText);
                }
            }
            ajax.send("content="+divHtml+"&id="+id);
    }
</script>
<style type="text/css">
        form .stars {
          background: url("stars.png") repeat-x 0 0;
          width: 150px;
          margin: 0 auto;
        }

        form .stars input[type="radio"] {
          position: absolute;
          opacity: 0;
          filter: alpha(opacity=0);
        }
        form .stars input[type="radio"].star-5:checked ~ span {
          width: 100%;
        }
        form .stars input[type="radio"].star-4:checked ~ span {
          width: 80%;
        }
        form .stars input[type="radio"].star-3:checked ~ span {
          width: 60%;
        }
        form .stars input[type="radio"].star-2:checked ~ span {
          width: 40%;
        }
        form .stars input[type="radio"].star-1:checked ~ span {
          width: 20%;
        }
        form .stars label {
          display: block;
          width: 30px;
          height: 30px;
          margin: 0!important;
          padding: 0!important;
          text-indent: -999em;
          float: left;
          position: relative;
          z-index: 10;
          background: transparent!important;
          cursor: pointer;
        }
        form .stars label:hover ~ span {
          background-position: 0 -30px;
        }
        form .stars label.star-5:hover ~ span {
          width: 100% !important;
        }
        form .stars label.star-4:hover ~ span {
          width: 80% !important;
        }
        form .stars label.star-3:hover ~ span {
          width: 60% !important;
        }
        form .stars label.star-2:hover ~ span {
          width: 40% !important;
        }
        form .stars label.star-1:hover ~ span {
          width: 20% !important;
        }
        form .stars span {
          display: block;
          width: 0;
          position: relative;
          top: 0;
          left: 0;
          height: 30px;
          background: url("stars.png") repeat-x 0 -60px;
          -webkit-transition: -webkit-width 0.5s;
          -moz-transition: -moz-width 0.5s;
          -ms-transition: -ms-width 0.5s;
          -o-transition: -o-width 0.5s;
          transition: width 0.5s;

        }
        .myButton {
            -moz-box-shadow:inset 0px 39px 0px -24px #e67a73;
            -webkit-box-shadow:inset 0px 39px 0px -24px #e67a73;
            box-shadow:inset 0px 39px 0px -24px #e67a73;
            background-color:#e4685d;
            -moz-border-radius:4px;
            -webkit-border-radius:4px;
            border-radius:4px;
            border:1px solid #ffffff;
            display:inline-block;
            cursor:pointer;
            color:#ffffff;
            font-family:Arial;
            font-size:15px;
            padding:6px 15px;
            text-decoration:none;
            text-shadow:0px 1px 0px #b23e35;
        }
        .myButton:hover {
            background-color:#eb675e;
        }
        .myButton:active {
            position:relative;
            top:1px;
        }


</style>