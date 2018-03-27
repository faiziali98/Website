<?php
    session_start() or die ("Error");
    try {
        if( !isset($_SESSION['authorized_user']) || empty($_SESSION['authorized_user']) ){
            $error =  'You must be logged in to access this page.';
            echo "$error";
            exit;
        }
        $id=$_SESSION['authorized_user'];
        $link=mysqli_connect("localhost","ldsdatabase","TQDQ8aW3URMVpqN2","databaselds");

        if(isset($_POST['name'])){ // update name
            $name = $_POST['name'];
            $update = "UPDATE authorized_users SET name = '$name' WHERE id = '$id'";
            $link->query($update) or die(mysql_error());
            echo "updated name";
        }

        if(isset($_POST['about'])){ // update about
            $about = $_POST['about'];
            $update = "UPDATE authorized_users SET about = '$about' WHERE id = '$id'";
            $link->query($update) or die(mysql_error());
            echo "updated description";
        }

    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
?>