<?php
echo "hello";
        session_start();
                    if (isset($_POST["post_title"])&&isset($_POST["content"])){
                        if (!empty($_POST["content"])&& !empty($_POST["post_title"])){
                            $post_title = $_POST["post_title"];
                            $content = $_POST["content"];
                            $post_image = basename($_FILES["fileToUpload"]["name"]);

                            $target_dir = "index_files/";
                            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

                            $uploadOk = 1;
                            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                            
                            if(isset($_POST["submit"])) {
                                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                if($check !== false) {
                                    echo "File is an image - " . $check["mime"] . ".";
                                    $uploadOk = 1;
                                } else {
                                    echo "File is not an image.";
                                    $uploadOk = 0;
                                }
                            }

                            if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";

                            } else {
                                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                            }

                            

                            $new_content = "<?php
                            \$post_title = \"$post_title\";
                            \$post_image = \"$post_image\";
                            ";
                            
                            $post_titlet =$post_title ;
                            $post_title = strtolower(str_replace(' ', '-', $post_title));

                            $body = fopen("posts/$post_title.html", "w") or die("Unable to open body!");
                            $file = fopen("posts/$post_title.php", "w") or die("Unable to open file!");
                            
                            copy("posts/template.php","posts/$post_title.php");
                            $old_content = file_get_contents("posts/template.php");
                            fwrite($file, $new_content."\n".$old_content);
                            
                            
                            fwrite($body, $content);
                            
                            fclose($body);
                            fclose($file);

                            $terms = explode(" ",$content);
                            $abs = $terms[0];
                            echo count($terms);
                            for ($count=1;$count<=count($terms);$count++){
                                $abs=$abs." ".$terms[$count];
                                if ($count>=50)
                                    break;
                            }
                            $myfile = fopen("id.txt", "r") or die("Unable to open file!");
                            $Id = intval(fgets($myfile))+1;
                            fclose($myfile);
                            $myfile = fopen("id.txt", "w") or die("Unable to open file!");
                            $Ids =$Id."\n";
                            fwrite($myfile, $Ids);
                            fclose($myfile);
                            $time=time();
                            $date=date('Y-m-d',$time);
                            mysql_connect("localhost","root","");
                            mysql_select_db("databaselds");
                            $aid=$_SESSION['authorized_user'];
                            echo $aid;
                            $sql = "INSERT INTO search (id, title, description,keywords,link,dates,author)
                                    VALUES ('$Id', '$post_titlet', '$abs','$content','http://localhost/kami/posts/$post_title.php','$date','$aid')" or die ("Not done");
                            mysql_query($sql);
                            echo "<h2>Success</h2>
                                <p>The article has successfully been posted.</p>";
                        }else{
                            echo "<h2>Fail</h2>
                                <p>There has been a problem while posting your article. Kindly fill all the required fields and then continue.</p>";
        }

    } else{
        echo "get lost";
    }
?>