<?php 
    $error = "";
    $success = "";
    $stars="";
    $post_title="";
	if(isset($_POST['stars']) && isset($_POST['article'])){
		$stars=$_POST['stars'];
		$post_title=$_POST['article'];
        if (isset($_POST['email']) && isset($_POST['name'])){
            $email=$_POST['email'];
            $name=$_POST['name'];
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                if(strlen($error)==0)
                    $error = "Please enter a valid email address.<br>";
            if (!$error){
                $conn = new mysqli("localhost","ldsdatabase","TQDQ8aW3URMVpqN2","databaselds");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                $query = "SELECT * FROM subscribers WHERE email = '$email'";
                $result = $conn->query($query);
                if($result->num_rows == 0){
                    $query = "INSERT INTO subscribers (name, email) VALUES ('$name','$email')";
                    $conn->query($query) or $error="Not done Sub";
                }
                $query = "SELECT * FROM rated WHERE byid = '$email' AND forid='$post_title' " ;
                $result = $conn->query($query) or die(mysqli_error($conn));
                if($result->num_rows == 0){
                    $query = "INSERT INTO rated (byid, forid) VALUES ('$email','$post_title')";
                    $conn->query($query) or $error="Not done Rate";
                }else{
                    $error="Allready Rated this post";
                }

                mysql_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2");
                mysql_select_db("databaselds"); 
                $query = "SELECT * FROM search WHERE title LIKE '%$post_title%' ";
                $query = mysql_query($query);
                $numrows = mysql_num_rows($query);
            }
            if ($error==""){
                if ($numrows > 0){
                    $rows = mysql_fetch_assoc($query);
                    $id=$rows['id'];
                    $rating = $rows['rating'];
                    $avgrate = $rows['avgrate'];
                    $numhits = $rows['numhits'];
                    $rating=$rating+$stars;
                    $numhits++;
                    $avgrate=$rating/$numhits;

        			$sql = "UPDATE search SET rating='$rating' , avgrate='$avgrate', numhits='$numhits' WHERE id='$id'";

        			if ($conn->query($sql) === TRUE) {
        			    $success="Record updated successfully";
        			} else {
        			    $error= "Error updating record: " . $conn->error;
        			}
                }
                $post_title = strtolower(str_replace(' ', '-', $post_title));
                header("Location: ./posts/$post_title.php");
            }
        }
	}
?>
<html>

<head>

  <meta charset="UTF-8">

  <title>Writers Signup Form</title>

    <style>
        
        @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
        @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);
    
    body{
        margin: 0;
        padding: 0;
        /*background: #fff;*/

        /*color: #fff;*/
        font-family: Arial;
        font-size: 12px;
    }

    .body{
        position: absolute;
        top: -20px;
        left: -20px;
        right: -40px;
        bottom: -40px;
        background-image: url(http://static.tumblr.com/db6d6056efbbc156f35c9967e7d9f14c/v56ekyk/b8Nmtsggm/tumblr_static_writing.jpg);
        background-size: cover;
        -webkit-filter: blur(1px);
        z-index: 0;
    }

    .grad{
        position: absolute;
        top: -20px;
        left: -20px;
        right: -40px;
        bottom: -40px;
        /*width: auto;*/
        /*height: auto;*/
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
        z-index: 1;
        opacity: 0.7;
    }

    .header{
        position: absolute;
        top: calc(30% + 5px);
        left: calc(15% - 56px);
        z-index: 2;
    }

    .header div{
        float: left;
        color: #F00E0E;
        font-family: 'Exo', sans-serif;
        font-size: 35px;
        font-weight: 210;
    }

    .header div span{
        color: #0A08A4 !important;
    }

    .login{
        position: absolute;
        top: calc(45% - 50px);
        left: calc(15% - 55px);
        height: 150px;
        width: 350px;
        padding: 10px;
        z-index: 2;
    }

    .login input[type=text]{
        width: 290px;
        height: 35px;
        background: transparent;
        border: 1px solid rgba(255,255,255,0.6);
        border-radius: 2px;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 4px;
        margin-top: 10px;
    }

    .login input[type=password]{
        width: 290px;
        height: 35px;
        background: transparent;
        border: 1px solid rgba(255,255,255,0.6);
        border-radius: 2px;
        color: #fff;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 4px;
        margin-top: 10px;
    }

    .login input[type=submit]{
        width: 290px;
        height: 40px;
        background: #fff;
        border: 1px solid #fff;
        cursor: pointer;
        border-radius: 2px;
        color: #a18d6c;
        font-family: 'Exo', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 6px;
        margin-top: 30px;
    }

    .login input[type=submit]:hover{
        opacity: 0.8;
    }

    .login input[type=submit]:active{
        opacity: 0.6;
    }

    .login input[type=text]:focus{
        outline: none;
        border: 1px solid rgba(255,255,255,0.9);
    }

    .login input[type=password]:focus{
        outline: none;
        border: 1px solid rgba(255,255,255,0.9);
    }

    .login input[type=submit]:focus{
        outline: none;
    }

    ::-webkit-input-placeholder{
       color: rgba(255,255,255,0.6);
    }

    ::-moz-input-placeholder{
       color: rgba(255,255,255,0.6);
    }

    body {
       overflow: hidden;  
    }

    .alert {
        width:290px;    
    }

</style>

    <script src="js/prefixfree.min.js"></script>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<body>

  <div class="body"></div>
        <div class="grad"></div>

        <div class="header">
            <!-- <div>
            <a href="#">
                <img src="http://localhost/kami/include/logo.png">
            </a>
            </div> -->
            <div> <span>LUMS </span>Daily Student</div>
        </div>
        <br>
        <div class="login">
                <form id="loginform" onsubmit="return false;">

                    <!-- <div class="alert alert-success">Success! Well done its submitted.</div>
                    <div class="alert alert-danger">Error ! Change few things.</div> -->

                    <?php
                        if($error) {
                            echo "<div class=\"alert alert-danger\">
                                <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Error:</span>
                                $error</div>";
                        }else if($success){
                            echo "<div class=\"alert alert-success\">
                                $success</div>";
                        }else
                            echo "<div class=\"alert alert-success\">
                                Please Subscribe to Rate</div>";
                                
                        if ($name)
                            echo "<input type='text' value='$name' name='name' id='name'><br>";
                        else
                            echo "<input type='text' placeholder='Name' name='name' id='name'><br>";
                    ?>
                    <input type="text" placeholder="Email" name="email" id="email"><br>

                    <input type="submit" value="Subscribe" name="submit" onclick="rate()">
                </form>
        </div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>


<script type="text/javascript">
function rate(){
        
        var em = document.getElementById("email").value;
        var n = document.getElementById("name").value;
        if(em != "" || n != ""){
            var e = "<?php echo $stars; ?>";
            var article = "<?php echo $post_title; ?>";
            method = "post"; // Set method to post by default if not specified.
            // The rest of this code assumes you are not using a library.
            // It can be made less wordy if you use one.
            var form = document.createElement("form");
            form.setAttribute("method", method);
            form.setAttribute("action", "rate.php");
            
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
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", 'email');
            hiddenField.setAttribute("value", em);
            form.appendChild(hiddenField);
            var hiddenFields = document.createElement("input");
            hiddenFields.setAttribute("type", "hidden");
            hiddenFields.setAttribute("name", 'name');
            hiddenFields.setAttribute("value", n);
            form.appendChild(hiddenFields);
            
            document.body.appendChild(form);
            form.submit(); 
        }
    }
</script>
</body>

</html>