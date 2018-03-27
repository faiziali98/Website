<?php
    $message="";
    if (isset($_POST['email']) && isset($_POST['name'])){
            $email=$_POST['email'];
            $name=$_POST['name'];
            $conn = new mysqli("localhost","ldsdatabase","TQDQ8aW3URMVpqN2","databaselds");
            if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
            } 
            $query = "SELECT * FROM subscribers WHERE email = '$email'";
            $result = $conn->query($query);
            if($result->num_rows == 0){
                $query = "INSERT INTO subscribers (name, email) VALUES ('$name','$email')";
                $conn->query($query) or $error="Not done Sub";
                $message="Subscribed Successfully!";
            }else{
                $message="Already Subscribed!";
            }
    }
?>

<style type="text/css">
    footer .container {
        background-color: #34495e;
    }
</style>
<footer>
    <div class="container">
        <div class="row">
            <div class="span4 footer-widget">
                <h3>About</h3>
                <p style="font-size: 16px">
                    LUMS daily student is a student-run organization 
                    at Lahore University of Management Sciences. It 
                    is a source of everything at LUMS, online - your key
                    to stay updated on everything that has happened or will happen.
                </p>
            </div>
            <div class="span4 footer-widget">
                <h3>Developers</h3>
                <div class="row flickr-gallery">
                    <div class="span1">
                        <a target="_blank" href="https://www.facebook.com/faizi.ali.98">
                            <img src="../index_files/dev.jpg" alt="Flickr Image">
                        </a>
                    </div>
                    <div class="span1">
                        <a target="_blank" href="https://www.facebook.com/kamran8888?fref=ufi">
                            <img src="../index_files/author.jpg" alt="Flickr Image">
                        </a>
                    </div>
                </div>
                <p >
                   	Faizan Ali&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kamran Khalil </p>
            </div>
            <div class="span4 footer-widget">
                <h3>Subscribe</h3>
                  <form action="<?php echo basename($_SERVER['PHP_SELF'])?>" method="post" style="width:220px">
                    <div>
                    <?php
                        if ($message)
                            echo "<div class=\"alert alert-success\" style='color:white;height:30px;padding:5px 10px; padding-left:25px;font-size:16px;'>
                                <strong>$message</strong></div>"
                    ?>
                    </div>
                    <input type="text" required value="Name" name="name" onBlur="if(this.value=='')this.value='Name'" onFocus="if(this.value=='Name')this.value='' "> <!-- JS because of IE support; better: placeholder="Email" -->

                    <input type="email"  required value="Email" name="email" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' "> <!-- JS because of IE support; better: placeholder="Password" -->
                    <div>
                        <button type='submit' class='btn btn-success' data-toggle='button'>Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="span9 copyright">
                Copyright © 2015 LDS. Developed by <a target="_blank" href="https://www.facebook.com/faizi.ali.98">Faizan Ali</a> and <a target="_blank" href="https://www.facebook.com/kamran8888?fref=ufi">Kamran Khalil</a>.
            </div>
            <div class="span3 social-links">
                <ul>
                    <li><a href="#" class="facebook">Facebook</a></li>
                    <li><a href="#" class="twitter">Twitter</a></li>
                    <li><a href="#" class="pinterest">Pinterest</a></li>
                    <li><a href="#" class="googleplus">Google+</a></li>
                </ul>
            </div>
        </div>
        <a href="#" class="back-to-top" style="display: none;">Scroll Top</a>
    </div>
</div>

<div id="fb-root" class=" fb_reset fb_reset"><script src="./index_files/sdk.js&version=v2.0" async=""></script><script src="./index_files/sdk.js&version=v2(1).0" async=""></script><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="./index_files/1ldYU13brY_.html" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="./index_files/1ldYU13brY_(1).html" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="f389aa0e6" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" src="./index_files/ping.html" style="display: none;"></iframe></div></div><script src="./index_files/sdk.js&version=v2(2).0" async=""></script><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="./index_files/1ldYU13brY_(2).html" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="./index_files/1ldYU13brY_(3).html" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="f2571d371c" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" src="about:blank" style="display: none;"></iframe></div></div></div></div=""><div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;"><iframe id="_atssh562" title="AddThis utility frame" src="./index_files/sh.6fac7b6f(2).html" style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;"></iframe></div>

</body>

</html>