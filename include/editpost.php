<?php

        session_start();

        if( !isset($_SESSION['authorized_user']) || empty($_SESSION['authorized_user']) ){
            $error =  'You must be logged in to access this page.';
            echo "<div class=\"alert alert-danger\">$error</div>";
            exit;
        }

        // establish connection

        $link=mysqli_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2","databaselds");

        // update first

        if(isset($_POST['content'])){ // update name
            $content = $_POST['content'];
            $id = $_POST['id'];
            $update = "UPDATE search SET tags = '$content' WHERE id = '$id' ";
            $link->query($update) or die(mysql_error());
            echo "Done";
        }
?>